<?php

/**
 * @package projectone
 */

// <div class="menu-container">
//     <ul class="list"> <!-- start_lvl() -->
//         <li class="item"><a href="#" class="link"><span class="text"> <!-- start_el() -->

//         </span></a></li> <!-- end_el() -->
//     </ul>  <!-- end_lvl() -->
// </div>


class Walker_Nav_Primary extends Walker_Nav_Menu {

    // & in $output means don't change / maintain the original contents of the $output variable
    function start_lvl( &$output, $depth = 0, $args = array() ) { // <ul>
        $tag_indent = str_repeat( "\t", $depth ); // creates space, indentation of tags

        /**
         * Setup for <ul>
         */

        // apply html class of 'sub-menu' if inside a level of indentation
        $submenu = ( $depth > 0 ) ? 'sub-menu' : '';

        $format = "\n %1\$s <ul class='dropdown-menu %2\$s depth_%3\$s'>\n";
        $output .= sprintf( $format, $tag_indent, $submenu, $depth );
    }

    // $item : contains items inside of <li> tag. eg. <a> tag and its attributes e.g rel, href
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) { // </li><a><span>
        // [a] creates space, indentation of tags
        // = if "$depth" is defined, create indentation
        $tag_indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        /**
         * Setup for <li>
         */

        /** ! EDITABLE */
        $li_attributes = ' data-js-something';
    
        // if $item->classes array is empty, return empty, otherwise return $item->classes array
        $classes = empty( $item->classes ) ? array() : ( array ) $item->classes;

        // this array will merge to the pre-existing classes array
        // if its true, means the item has children, e.g there's <ul> inside the <li>...
        // ...then apply the class "dropdown" to it
        $classes[] = ( $args->walker->has_children ) ? 'dropdown' : '';

        // checks if the submenu link is currently clicked by the user
        $classes[] = ( $item->current || $item->current_item_ancestor ) ? 'active' : '';

        // add the class thats connected to the id
        $classes[] = 'menu-item-' . $item->ID;

        // if both are true, add class to the sub item
        if ( $depth && $args->walker->has_children ) {
            $classes[] = 'dropdown-menu';
        }

        // join() : merges arrays, separated by the 1st argument, returns a string of classes
        // apply_filters( 'nav_menu_css_class' ) : will edit and adapt all the classes specified
        // array_filter( $classes ) : will apply apply_filters( 'nav_menu_css_class' ) to every item in its array parameter "$classes"
        // $items belongs to $classes
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        // creation of ID that handles single elements
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID,  $item, $args );

        // if not empty, apply the id attributes
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        // create the item <li>
        $output .= $tag_indent . '<li' . $id . $class_names . $li_attributes . '>';


        /**
         * Setup for <a>
         */

        // set attributes of the <a> tag

        // [a] title=""
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';

        // [b] target=""
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';

        // [c] rel=""
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';

        // [d] href=""
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';


        // if <a> is the container of a submenu, create a class for it
        $attributes .= ( $args->walker->has_children ) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

        $item_output = $args->before; // any html or class the wordpress generate by default
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

         // if <a> is the container of a submenu, add symbol to it
        $item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret">V</b></a>' : '</a>';
        $item_output .= $args->after; // any html or class the wordpress generate by default


        /** merge all */
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

    }
}