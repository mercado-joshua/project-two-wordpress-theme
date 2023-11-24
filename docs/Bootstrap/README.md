### Bootstrap
***

### Flex

#### 1

`d-flex` - flex ( parent container )

`gap-0 to 5` - ( parent container )

`row-gap-1 to 5` - ( parent container )

`row-gap-1 to 5` - ( parent container )

#### 1

`d-inline-flex` - inline flex container ( parent container )

`flex-row-reverse` ( parent container )

`flex-row` - flex-direction: row ( parent container )

`flex-column` - flex-direction: column ( parent container )

#### 2

`justify-content-start` - ( parent container )
 
`justify-content-end` - ( parent container )

`justify-content-center` ( parent container )

`justify-content-between` - space between ( parent container )

`justify-content-around` - space around ( parent container )

#### 1

`flex-fill` - forced equal width per children ( child item )

`flex-grow-1` - to take ALL space ( child item )

`flex-shrink-1` - to shrink as much space as possible space ( child item )

`order-1 to 5` - 1 is highest priority ( child item )

`me-auto or ms-auto` - to push items to the left or right ( child item )

`flex-nowrap` - ( parent container )

`flex-wrap` - ( parent container )

`flex-wrap-reverse` - ( parent container )

### Align verticaly of GATHERED child items, opposite of justify-content

#### 2

`align-content-start` - top ( parent container )

`align-content-end` - bottom ( parent container )

`align-content-center` - ( parent container )

`align-content-between` - ( parent container )

`align-content-around` - ( parent container )

`align-content-stretch` - ( parent container )

### Align verticaly of SINGLE ROWS

#### 2

`align-items-start` - ( parent container )

`align-items-end` - ( parent container )

`align-items-center` - ( parent container )

`align-items-baseline` - ( parent container )

`align-items-stretch` - ( parent container )


### Vertical alignment of specified flex item

#### 2

`align-self-start` - ( child item )

`align-self-end` - ( child item )

`align-self-center` - ( child item )

`align-self-baseline` - ( child item )

`align-self-stretch` - ( child item )

#### Grid

`row` - grid container ( parent container )

`col` - equal width ( child item )

`1-12`

`col-` less than 576 ( parent container )

`col-sm-` - starts stacking at 576 ( parent container )

`col-md-` - starts stacking at 768 ( parent container )

`col-lg-` - starts stacking at 992 ( parent container )

`col-xl-` - starts stacking at 1200 ( parent container )

`col-xxl-` starts stacking at 1400 ( parent container )

`row-cols-*` - setting column ( parent container )

`g-0-1|2|3|4|5` - gutters ( parent container )

```html
<!-- -->
<div class="row">
  <div class="col-sm-3">.col-sm-3</div>
  <div class="col-sm-3">.col-sm-3</div>
  <div class="col-sm-3">.col-sm-3</div>
  <div class="col-sm-3">.col-sm-3</div>
</div>

<div class="row">
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-8">.col-sm-8</div>
</div>

<!-- equal width -->
<div class="row">
  <div class="col">.col</div>
  <div class="col">.col</div>
  <div class="col">.col</div>
</div>
```

```html
<div class="col-sm-3 col-md-6 col-lg-4">....</div>
<div class="col-sm-9 col-md-6 col-lg-8">....</div>
```

#### Auto-layout ( equal width columns )

```html
<!-- Two columns: 50% width on all screens, except for extra small (100% width) -->
<div class="row">
  <div class="col-sm">1 of 2</div>
  <div class="col-sm">2 of 2</div>
</div>

<!-- Four columns: 25% width on all screens, except for extra small (100% width)-->
<div class="row">
  <div class="col-sm">1 of 4</div>
  <div class="col-sm">2 of 4</div>
  <div class="col-sm">3 of 4</div>
  <div class="col-sm">4 of 4</div>
</div>
```

#### Container

`.container` - max-wrapper

`.container-fluid` - section-wrapper

`container-sm` - starts **margin: 0 auto** at 576 

`container-md` - starts **margin: 0 auto** at 768

`container-lg` - starts **margin: 0 auto** at 992

`container-xl` - starts **margin: 0 auto** at 1200

`container-xxl` - starts **margin: 0 auto** at 1400


### display

`d-{breakpoint}-{value}`

 - none

 - inline

 - inline-block

 - block

 - grid

 - inline-grid

 - table

 - table-cell

 - table-row

 - flex

 - inline-flex

#### Padding & Margin

***

`{property}{sides}-{breakpoint}-{number}`

`m`

`p`

`t`

`b`

`s`

`e`

`x`

`y`

`0` - sets margin or padding to 0

`1` - sets margin or padding to .25rem

`2` - sets margin or padding to .5rem

`3` - sets margin or padding to 1rem

`4` - sets margin or padding to 1.5rem

`5` - sets margin or padding to 3rem

`auto` - sets margin to auto

### Shadow

`shadow-none`

`shadow`

`shadow-sm`

`shadow-lg`

### Aspect Ratio

```html
<!-- Aspect ratio 1:1 -->
<div class="ratio ratio-1x1">
  <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
</div>

<!-- Aspect ratio 4:3 -->
<div class="ratio ratio-4x3">
  <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
</div>

<!-- Aspect ratio 16:9 -->
<div class="ratio ratio-16x9">
  <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
</div>

<!-- Aspect ratio 21:9 -->
<div class="ratio ratio-21x9">
  <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
</div>
```

### Border

***

`border` - border: 1px solid gray

`border border-0` - border: none

`border border-end-0` - lright none

`border border-bottom-0` bottom none

`border border-start-0` - left none

`border-top` - border top 

`border-end` - border right

`border-bottom` - border bottom

`border-start` - border left

`border border-1 to 5` - border width

`border border-primary`

`border border-secondary`

`border border-success`

`border border-danger`

`border border-warning`

`border border-info`

`border border-light`

`border border-dark`

`border border-white`

`rounded`

`rounded-top`

`rounded-end`

`rounded-bottom`

`rounded-start`

`rounded-circle`

`rounded-pill`

`rounded-0` - no round

`rounded-1`

`rounded-2`

`rounded-3`

`rounded-4`

`rounded-5`

### Width

`w-25` - 25%

`w-50` - 50%

`w-75` - 75%

`w-100` - 100%

`w-auto` - auto

`mw-100`  - max-width: 100%

### Height

`h-25`

`h-50`

`h-75`

`h-100`

`mh-auto`

`mh-100` - max-width: 100%

`vh-100` - viewport height 100%


### Table

`table table-bordered` - table ( with borders )

`table table-hover` - table ( can hover )

`table table-dark` - table dark color

`table table-dark table-striped` - table ( black & striped )

`table table-dark table-hover` table ( dark & hover )

`table table-borderless` - table ( no border )

`table-primary` - tr or thead 

`table-success` - tr or thead 

`table-danger` - tr or thead 

`table-info` - tr or thead 

`table-warning` - tr or thead 

`table-active` - tr  or thead ( grey: same color )

`table-secondary` - tr  or thead ( grey: same color )

`table-light` - tr or thead 

`table-dark` - tr or thead 

`table table-bordered table-sm` - table

`table-responsive` div container -> table

### Images

`rounded` - border-radius: .3em

`rounded-circle`

`img-thumbnail`

`img-fluid` - responsive image

`object-fit-{value}`

`object-fit-{breakpoint}-{value}`

 - contain

 - cover

 - fill

 - scale

 - none


### Opacity

`opacity-100` - 0, 25, 50, 75, 100

### Overflow

`overflow-x-{value}`

`overflow-y-{value}`

`overflow-auto`

`overflow-hidden`

`overflow-visible`

`overflow-scroll`

### Z-index

`z-3`

`z-2`

`z-1`

`z-0`

`z-n1`

### Position

`position-static`

`position-relative`

`position-absolute`

`position-fixed`

`position-sticky`


`top-{n}`

`start-{n}`

`bottom-{n}`

`end-{n}`

`0`

`50`

`100`

`translate-middle`

`translate-middle-x`

`translate-middle-y`

### Background

***

#### color

`bg-primary` - background-color: blue

`bg-dark` - background-color: black

`bg-success` 

`bg-info`

`bg-warning`

`bg-danger`

`bg-secondary` 

`bg-light`

`text-bg-[color]` - handles color of text according to background

### Text

`fs-1 to 4` - font-size

`fw-bold`

`fw-border`

`fw-normal`

`fw-light`

`fw-lighter`

`h1 to h6`

`display-1 to 6`

`small`

`mark`

`blockquote`

`footer.blockquote-footer`

`lead` - makes paragraph stand-out

`text-start` - text-align: left

`text-end` - text-align: right

`text-center` - text-align: center

`text-nowrap`

`text-break` - breaks long word

`text-decoration-none`

`text-lowercase`

`text-uppercase`

`text-capitalize`

`<abbr title="World Health Organization" class="initialism">WHO</abbr>`

### List

`list-unstyled`

`list-inline` - ul

`list-inline-item` - li

***

#### color

`text-white` - color: white

`text-muted` - opacity: 50

`text-primary` - blue

`text-success` - green

`text-info` - light blue

`text-warning` - yellow

`text-danger` - red

`text-secondary` - light grey

`text-dark` - black

`text-body` - default color: black

`text-light` - light grey / similar to white

`text-black-50`

`text-white-50`






