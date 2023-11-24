/**
 * npm init -y
 * 
 * npm i -D gulp gulp-cli sass gulp-sass gulp-postcss autoprefixer gulp-clean-css gulp-terser browser-sync bootstrap jquery @fortawesome/fontawesome-free gulp-babel babel-preset-env babel-core @babel/core @babel/preset-env babel-polyfill
 */

/**
 * +--------------------------------------------+
 * Gulp Configurations for Wordpress
 * +--------------------------------------------+
 */

/**
 * +--------------------------------------------+
 * Setup wordpress/localhost link
 */

// put the link here
const localhostPHP = "http://project-2.local/"; // e.g http://link_to_site.local

/**
 * +--------------------------------------------+
 * Import the required plugins
 */

/**
 * SASS and CSS plugins
 */

/// enables sass
const sass = require( "gulp-sass" )( require( "sass" ) );

// add vendor prefixes to new css properties
const postcss = require( "gulp-postcss" );
const autoprefixer = require( "autoprefixer" );

// minifies css stylesheets
const minify = require( "gulp-clean-css" );

/**
 * JS plugins
 */

// converts your ES6 js code into ES5
const babel = require( "gulp-babel" );

// minifies js scripts
const terser = require( "gulp-terser" );


/**
 * utilities plugins
 */

// enables gulp functionalities
const gulp = require( "gulp" );

// deals with browser reloading
const browserSync = require( "browser-sync" ).create();

/**
 * +--------------------------------------------+
 * Paths and configuration setup
 */

const paths = {
    jquery: "./node_modules/jquery/dist/jquery.min.js",
    polyfill: "./node_modules/babel-polyfill/dist/polyfill.min.js",
    bootstrap: {
        sass: "./node_modules/bootstrap/scss/bootstrap.scss",
        js: "./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"
    },
    fontawesome: {
        sass: "./node_modules/@fortawesome/fontawesome-free/scss/fontawesome.scss",
        js: "./node_modules/@fortawesome/fontawesome-free/js/all.min.js"
    },
    fonts: {
        source: "./src/fonts/**/**.*",
        destination: "./assets/fonts"
    },
    images: {
        source: "./src/images/**/**.*",
        destination: "./assets/images"
    },
    sass: {
        source: "./src/sass/**/*.scss",
        destination: "./"
    },
    css: {
        source: "./assets/css/**/*.css",
        destination: "./assets/css"
    },
    js: {
        source: "./src/js/**/*.js",
        destination: "./assets/js"
    },
    jsMinify: {
        source: "./assets/js/**/*.js",
        destination: "./assets/js"
    }
};

// create list of stylesheets
const listOfVendorCSS = [ 
    paths.bootstrap.sass, 
    paths.fontawesome.sass
];

// create list of js scripts
const listOfVendorJS = [
    paths.bootstrap.js, 
    paths.fontawesome.js, 
    paths.jquery, 
    paths.polyfill
];

// configuration for browsers
const config = {
    browserList: {
        overrideBrowserslist: [
        "> 1%",
        "ie >= 8",
        "edge >= 15",
        "ie_mob >= 10",
        "ff >= 45",
        "chrome >= 45",
        "safari >= 7",
        "opera >= 23",
        "ios >= 7",
        "android >= 4",
        "bb >= 10"
    ]},
    babel: {
        presets: [ "@babel/preset-env" ]
    },
    browserSync: {
        proxy: localhostPHP,
        baseDir: "./",
        open: false,
        notify: false
    }
};

// configuration for sourcemaps
const sourcemap = {
    css: {
        enable: true,
        path: "./sourcemaps"
    },
    js: {
        enable: true,
        path: "./sourcemaps"
    }
};

/**
 * +--------------------------------------------+
 * Tasks for code development
 */

/** [1] compiles custom style.scss to css */
gulp.task( "build:customCSS", function() {
    return gulp.src( paths.sass.source )
        .pipe( sass().on( "error", sass.logError ))
        .pipe( postcss([
            autoprefixer( config.browserList )
        ]))
        .pipe( gulp.dest( paths.sass.destination ));
});

/** [2] compiles vendor SASS stylesheets to CSS */
gulp.task( "build:vendorCSS", function() {
    return gulp.src( listOfVendorCSS )
        .pipe( sass().on( "error", sass.logError ))
        .pipe( postcss([
            autoprefixer( config.browserList )
        ]))
        .pipe( gulp.dest( paths.css.destination ));
});

/** [3] compiles js vendors */
gulp.task( "build:vendorJS", function() {
    return gulp.src( listOfVendorJS )
        .pipe( gulp.dest( paths.js.destination ));
});

/** [4] transforms custom js into ES5 */
gulp.task( "build:customJS", function() {
    return gulp.src( paths.js.source )
       .pipe( babel({ presets: [ "@babel/preset-env" ] }))
       .pipe( gulp.dest( paths.js.destination ) );
});

/** [5] copies "images" folder and all its images from .src to .assets/images */
gulp.task( "build:images", function() {
    return gulp.src( paths.images.source )
        .pipe( gulp.dest( paths.images.destination ));
});

/** [6] copies "fonts" folder and all its fonts from .src to .assets/fonts */
gulp.task( "build:fonts", function() {
    return gulp.src( paths.fonts.source )
        .pipe( gulp.dest( paths.fonts.destination ));
});

/** [7] starts live server url for mobile devices */
gulp.task( "build:server", function( cb ) {
    browserSync.init( config.browserSync );
    cb();
});

/** [8] reloads the webpage */
gulp.task( "build:reload", function( cb ) {
    browserSync.reload();
    cb();
});

/** [9] watch task for ./src files and monitors changes */
gulp.task( "build:monitor", function() {
    gulp.watch(
        [ paths.images.source, paths.fonts.source, paths.sass.source, paths.js.source ],
        gulp.series([ "build:images", "build:fonts", "build:customCSS", "build:customJS", "build:reload" ])
    );
});

/**
 * tasks for code deployment
 */

/** [1] minifies css and generate a sourcemap */
gulp.task( "prod:vendorCSS", function() {
    return gulp.src( listOfVendorCSS, { sourcemaps: sourcemap.css.enable })
        .pipe( sass().on( "error", sass.logError ))
        .pipe( prefix( config.browserList ))
        .pipe( minify() )
        .pipe( gulp.dest( paths.css.destination, { sourcemaps: sourcemap.css.path }));
});

gulp.task( "prod:customCSS", function() {
    return gulp.src( paths.sass.source, { sourcemaps: sourcemap.css.enable })
        .pipe( sass().on( "error", sass.logError ))
        .pipe( prefix( config.browserList ))
        .pipe( minify() )
        .pipe( gulp.dest( paths.sass.destination, { sourcemaps: sourcemap.css.path }));
});

/** [2] minifies js and generate a sourcemap */
gulp.task( "prod:js", function() {
    return gulp.src( paths.jsMinify.source, { sourcemaps: sourcemap.js.enable })
        .pipe( terser() )
        .pipe( gulp.dest( paths.jsMinify.destination, { sourcemaps: sourcemap.js.path }));
});

/**
 * console gulp commands
 */

/**
 * REMINDER!
 *     Add this script to the "package.json" file before
 *     using below commands:
 * 
       "scripts": {
            "gulp": "gulp",
            "prod": "gulp prod"
       }
 */

/** [1] run "npm run gulp" on terminal: when developing a site */
gulp.task( "default", gulp.parallel( 
    "build:customCSS", "build:customJS", "build:vendorCSS", "build:vendorJS", 
    "build:images", "build:fonts", "build:server", "build:monitor"
));

/** [2] run "gulp prod" on terminal: when deploying the site */
gulp.task( "prod", gulp.parallel(
    "prod:vendorCSS", "prod:customCSS", "prod:js"
));

