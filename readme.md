**IMPORTANT:**
*This is a proof of concept school project. It is NOT for free use or redistrubation without permission!*

# Bootstrap - Eksamensprosjekt

[![coverage report](http://158.38.101.133/anda702/Bootstrap/badges/master/coverage.svg)](http://158.38.101.133/anda702/Bootstrap/commits/master)

## Features
- Støtte for mobile enheter
- Støtte for alle moderne nettlesere
- Støtte for- og bruk av CSS3 og HTML 5 hvor mulig
- Designet etter mobile first prinsippet

## Table of Contents

<!-- TOC -->

- [Bootstrap - Eksamensprosjekt](#bootstrap---eksamensprosjekt)
    - [Features](#features)
    - [Table of Contents](#table-of-contents)
- [Example sites](#example-sites)
- [Cheatsheats](#cheatsheats)
    - [Cheatsheat 1](#cheatsheat-1)
    - [Cheatsheat 2](#cheatsheat-2)
    - [Cheatsheat 3](#cheatsheat-3)

<!-- /TOC -->

# Example sites

    - https://themes.getbootstrap.com/products/application
    - https://themeforest.net/item/maniac-bootstrap-admin-theme/8148958
    - http://preview.themeforest.net/item/olympus-html-social-network-toolkit/full_screen_preview/19755363

# Cheatsheats
## Cheatsheat 1

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set the page to the width of the device and set the zoon level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Bootstrap Tutorial</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<style>
.jumbotron{
    background-color:#2E2D88;
    color:white;
}
/* Adds borders for tabs */
.tab-content {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
}
.nav-tabs {
    margin-bottom: 0;
}
</style>

</head>
<body>

<!-- CONTAINERS -->
<!-- container puts padding around itself while container-fluid fills the whole screen. Bootstap grids require a container. -->
<div class="container">

<!-- page-header adds space aroundtext and enlarges it. It also adds an underline at the end -->
<div class="page-header">
<h1>Bootstrap Tutorial</h1>
</div>

<!-- jumbotron enlarges fonts and puts everything in a gray box with rounded corners. If jumbotron is outside a container it fills the total width. You can change the styles by placing the changes after the Bootstrap CDN link -->
<div class="jumbotron">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

<!-- BUTTONS -->
<!-- There are many built in button colors and sizes. If a link is to trigger in page functionality it should use role="button". The button element should be used in most situations -->
<p>
<a href="#" class = "btn btn-default btn-lg" role="button">More info</a>
<button type="submit" class = "btn btn-danger" role = "button">Button</button>
<input type="button" value="Info" class = "btn btn-info">
<button type="submit" class = "btn-primary btn-sm">Primary</button>
<button type="submit" class = "btn btn-success btn-xs">Success</button>
<button type="submit" class = "btn btn-warning btn-lg">Warning</button>
<button type="submit" class = "btn btn-link btn-lg">Link</button>

<!-- You can disable buttons with disabled -->
<button type="button" class="btn btn-lg btn-primary" disabled="disabled">Primary</button>

<!-- You disable links in a similar way -->
<a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a>

<!-- You can group buttons. You can size the buttons with btn-group-lg, btn-group-sm, or btn-group-xs -->
<div class="btn-group btn-group-lg" role="group" aria-label="...">
  <button type="button" class="btn btn-default">Small</button>
  <button type="button" class="btn btn-default">Medium</button>
  <button type="button" class="btn btn-default">Large</button>
</div>

</p>

<!-- bootstraptut2.html -->

<!-- ICONS -->
<!-- Bootstrap has hundreds of free icons. http://getbootstrap.com/components/#glyphicons They can be used on their own or inside of buttons with a link or regular button for example. -->
<p>
<span class="glyphicon glyphicon-film"></span>

<a href="#" class="btn btn-primary btn-lg">Trash <span class="glyphicon glyphicon-trash"></span></a>

<button type="button" class="btn btn-default btn-lg">

  <!-- aria-hidden hides decorative icons from screen readers -->
  <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> Call Me
</button>
</p>

</div>
</div>

<div class="container">

<!-- well surrounds the text with a rounded border and gray background. The size can be changed with well-sm or well-lg -->
<div class="well well-sm">
<p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
</div>

<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
</div>

<div class="container">

<!-- ROUNDED IMAGES -->
<!-- Images marked as responsive have a max-width equal to the screen. You can add rounded corners with img-rounded, img-circle, and img-thumbnail. pull-left and pull-right will float images in the provided direction. center-block will place the image in the center. -->
<img src="ntt-logo.png" id="nttLogo" class="img-responsive img-thumbnail pull-left" alt="Responsive image">

<!-- CONTEXTUAL COLORS -->
<!-- Contextual colors can be added to text -->
<p>
<span class="text-muted">Quis nostrud</span>
<span class="text-primary">exercitation ullamco</span>
<span class="text-success">laboris nisi</span>
<span class="text-info">ut aliquip</span>
<span class="text-warning">ex ea commodo</span>
<span class="text-danger">consequat.</span> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

<!-- You can set contextual backgrounds -->
<p class="bg-primary">Duis aute irure dolor</p>
<p class="bg-success">In reprehenderit</p>
<p class="bg-info">In voluptate velit</p>
<p class="bg-warning">Esse cillum dolore eu</p>
<p class="bg-danger">Fugiat nulla pariatur</p>
</div>

<div class="container">

<!-- DROP DOWN MENUS -->
<!-- You can easily add a drop down menu with class dropdown, or dropup. Change button size with btn-lg, btn-sm, btn-xs
ARIA stands for Accessible Rich Internet Applications and it is used to make apps more excessible for people with disabilities. aria-haspopup states that the element has a sub menu. aria-expanded defines if the sub-menu is expanded. Full list here http://www.w3.org/TR/wai-aria/states_and_properties#aria-expanded -->
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle btn-lg" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Favorite Hero

    <!-- Display icon in button -->
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">

    <!-- Unselectable header -->
    <li class="dropdown-header">Marvel</li>
    <li><a href="#">Spiderman</a></li>
    <li><a href="#">Captain America</a></li>
    <li><a href="#">Iron Man</a></li>

    <!-- Seperates content in menu -->
    <li role="separator" class="divider"></li>
    <li class="dropdown-header">DC</li>

    <!-- Disable menu element -->
    <li class="disabled"><a href="#">Superman</a></li>
    <li><a href="#">Batman</a></li>
    <li><a href="#">Flash</a></li>
  </ul>
</div>
</div><br>

<!-- INPUT GROUPS -->
<div class="container">

<!-- We can add text or buttons on the right and/or left of input elements. Use input-group-lg or input-group-sm for input sizing -->
<div class="input-group input-group-lg">
  <span class="input-group-addon">Your name</span>
  <input type="text" class="form-control" placeholder="Full Name">
</div><br>

<div class="input-group input-group-sm">
  <input type="text" class="form-control" placeholder="Full Name">
  <span class="input-group-btn">
    <button class="btn btn-default" type="button">Enter</button>
  </span>
</div><br>

<!-- Create input button dropdowns. aria-haspopup states that input has a sub menu. aria-expanded closes the dropdown by default -->
<div class="row">
    <div class="input-group">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User ID <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Google+</a></li>
        </ul>
      </div>
      <input type="text" class="form-control" aria-label="...">
    </div>
</div><br>

<!-- Input radio and checkboxes -->
<div class="row">
    <div class="input-group">
      <span class="input-group-addon">

        <!-- Change to radio for radio -->
        <input type="checkbox">
      </span>
      <input type="text" class="form-control">
    </div>
</div>

</div><br>

<!-- NAVIGATION ELEMENTS -->
<div class="container">

<!-- Basic horizontal menu -->
<ul class="list-inline">
  <li><a href="#">Home</a></li>
  <li><a href="#">About</a></li>

  <!-- Add a dropdown menu -->
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">Phone</a></li>
      <li><a href="#">Email</a></li>
      <li><a href="#">Achedule Appointment</a></li>
    </ul>
  </li>
  <li><a href="#">Shop</a></li>
</ul>

<!-- Basic vertical menu -->
<ul class="nav nav-pills nav-stacked">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">About</a></li>

  <!-- Add drop down menu -->
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">Phone</a></li>
      <li><a href="#">Email</a></li>
      <li><a href="#">Schedule Appointment</a></li>
    </ul>
  </li>
  <li><a href="#">Shop</a></li>
</ul>

<!-- Use nav-pills, nav-tabs. To center tabs add nav-justified to the class for ul -->
<ul class="nav nav-pills">
  <li class="active"><a data-toggle="tab" href="#superman">Superman</a></li>
  <li><a data-toggle="tab" href="#batman">Batman</a></li>

  <!-- Dropdown menu item -->
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Flash
    <span class="caret"></span></a>
    <ul class="dropdown-menu">

      <!-- Disable a tab -->
      <li class="disabled"><a data-toggle="tab" href="#flash">The Flash</a></li>
      <li><a data-toggle="tab" href="#kidflash">Kid Flash</a></li>
    </ul>
  </li>
</ul>

<div class="tab-content">
  <div id="superman" class="tab-pane fade in active">
    <p>Superman is a fictional superhero appearing in American comic books published by DC Comics. </p>
  </div>
  <div id="batman" class="tab-pane fade">
    <p>Batman is a fictional superhero appearing in American comic books published by DC Comics. </p>
  </div>
  <div id="flash" class="tab-pane fade">
    <p>The Flash is a fictional superhero appearing in American comic books published by DC Comics. </p>
  </div>
  <div id="kidflash" class="tab-pane fade">
    <p>Kid Flash is a fictional superhero appearing in American comic books published by DC Comics. </p>
  </div>
</div>

</div>

<!-- Collapsible Navigation Bar -->
<div class="container">

<!-- .navbar-fixed-top, or .navbar-fixed-bottom can be added to keep the nav bar fixed on the screen -->
<nav class="navbar navbar-default">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <!-- Button that toggles the navbar on and off on small screens -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

      <!-- Hides information from screen readers -->
        <span class="sr-only"></span>

        <!-- Draws 3 bars in navbar button when in small mode -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- You'll have to add padding in your image on the top and right of a few pixels (CSS Styling will break the navbar) -->
      <a class="pull-left" href="#"><img src="NTTLogosm.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Email</a></li>
            <li><a href="#">Phone</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Set Appointment</a></li>
          </ul>
        </li>
      </ul>
      <!-- navbar-left will move the search to the left -->
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<br>

<!-- Pagination -->
<div class="container">
<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div><br>

<!-- Thumbnails -->
<div class="container">
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
    <div class="thumbnail">
      <img src="thumb1.png" alt="...">
      <div class="caption">
        <h3>Hamburger</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a></p>
      </div>
      </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
    <div class="thumbnail">
      <img src="thumb2.png" alt="...">
      <div class="caption">
        <h3>Polenta</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a></p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
    <div class="thumbnail">
      <img src="thumb3.png" alt="...">
      <div class="caption">
        <h3>Meatball Sub</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a></p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
    <div class="thumbnail">
      <img src="thumb4.jpg" alt="...">
      <div class="caption">
        <h3>Eggplant</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a></p>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Progress bar -->
<!-- Provide progress feedback to users by changing the value of style for the progress-bar (Doesn't work on IE9 or below) progress-bar-striped is optional -->
<div class="container">
<div class="progress">
  <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
    <span class="sr-only">40% Complete</span>
  </div>
</div>
</div>

<!-- Media object -->
<div class="container">
<div class="media">

  <!-- You can use media-top, media-middle, or media-bottom -->
  <div class="media-left media-top">
    <a href="#">
      <img class="media-object" src="thumb1.png" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Awesome Veggie Burger</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor...</p>
  </div>
</div>

<div class="media">
  <div class="media-left media-top">
    <a href="#">
      <img class="media-object" src="thumb2.png" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Best Polenta Recipe</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor...</p>
  </div>
</div>
</div>

<!-- Media List -->

<div class="container">
  <h3>What did you Eat for Lunch?</h3>

  <div class="media"> <!-- class media , to create media element-->
      <a class="pull-left" href="#">
        <img class="media-object" src="thumb1.png" alt="...">
      </a>
      <div class="media-body">
        <h4 class="media-heading">A Ate a Veggie Burger</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor...</p>
      </div>
  </div>

  <div class="media"> <!-- class media , to create media element  -->
      <a class="pull-left" href="#">
        <img class="media-object" src="thumb4.jpg" alt="..."> <!-- media-object 2 -->
      </a>
      <div class="media-body">
        <h4 class="media-heading">Eggplant Parmesan</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor...</p>

        <!-- Nested Media : Was placed before the closing media-body div element -->
      <div class="media">
          <a class="pull-left" href="#">
        <img class="media-object" src="thumb3.png" alt="...">
          </a>
      <div class="media-body">
            <h4 class="media-heading">My Veggie Meatball Sub was Awesome</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor...</p>
       </div>
     </div>
   </div> <!-- media-body for Eggplant closes here -->
</div>
</div>

<!-- List Groups -->
<div class="container">
<ul class="list-group">

  <!-- Disable elements -->
  <li class="list-group-item disabled">Verizon Email</li>
  <li class="list-group-item">

  <!-- You can add badges -->
  <span class="badge">123</span>Gmail</li>
  <li class="list-group-item">Sent</li>

  <!-- You can style elements like warning, success, info, danger-->
  <li class="list-group-item list-group-item-warning">Junk</li>
</ul>

<!-- Add lists of links -->
<a href="#" class="list-group-item">Add Account</a>

<!-- Add any html elements in list -->
<a href="#" class="list-group-item">
  <h4 class="list-group-item-heading">Delete Account</h4>
  <p class="list-group-item-text">The account will be permanently deleted</p>
</a>

<!-- You can put buttons in the list -->
<button type="button" class="list-group-item">Check for Mail</button>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
```


## Cheatsheat 2

```html
<!-- You can create scalable multi-column layouts with up to 12 columns. Scaling is focused on screens < 768px, >= 768px, >=992px and >1200px -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Bootstrap Tutorial</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<div class="container">

<!-- col means column, md >=992px (Also use xs, sm and lg), and the 3 represents the size of the column
3 * 4 = 12 (A 6 column layout would use 2 if they had equal size) -->
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <h4>Column 1</h4>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla at libero at finibus. Mauris dui felis, sagittis in dapibus eget, porta quis elit. Donec sodales placerat porta. Vivamus laoreet magna eget facilisis condimentum. Donec porttitor elit nibh, et mollis nunc egestas at. Vestibulum tristique vehicula ligula vel mollis. Quisque ante lectus, tincidunt maximus scelerisque in, molestie nec eros. Vestibulum finibus, lacus at gravida condimentum, tellus mauris imperdiet orci.
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <h4>Column 2</h4>
      Quisque rutrum augue odio, eu placerat diam bibendum id. Donec at fringilla leo, non varius magna. Vestibulum finibus, lacus at gravida condimentum, tellus mauris imperdiet orci, a pretium justo nulla sit amet nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In fermentum ex ac lectus porttitor molestie. Sed cursus velit congue ex venenatis accumsan.
    </div>
    <!-- When in sm mode the 3rd column jumps up below the 2nd column. To fix it put the following right before the column that messes up using the screen mode being sm that messes up. -->
    <div class="clearfix visible-sm"></div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <h4>Column 3</h4>
      Pellentesque vulputate faucibus leo, non blandit ante faucibus maximus. Nunc non neque laoreet, tincidunt nisl et, tristique odio. Nullam imperdiet sollicitudin neque malesuada ornare. Curabitur ultrices urna id gravida lacinia. Nunc eu neque vitae nisi luctus rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <h4>Column 4</h4>
      Vestibulum vitae lacus eu metus finibus viverra vel blandit justo. Suspendisse ac sapien sapien. In a pellentesque ipsum. Donec quis venenatis lectus, at vehicula nulla. Etiam imperdiet tellus sit amet lobortis varius. Pellentesque sit amet arcu quis sem pretium luctus. Aliquam vitae neque id augue sollicitudin mattis id vitae lorem. Quisque a metus fermentum, ultricies diam non, dignissim nibh. Aliquam erat
    </div>
  </div>
</div><br>

<!-- For different sized columns divide up the 12 -->
<div class="container">
  <div class="row">
  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">

      <!-- We can collapse or hide data on the screen -->
      <h4><a href="#col1Content" data-toggle="collapse">Column 1</a></h4>

      <!-- With collapse in this div shows on load -->
      <div id="col1Content" class="collapse in">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla at libero at finibus a pretium justo nulla sit amet nunc. Vestibulum finibus, lacus at gravida condimentum, tellus mauris imperdiet orci.</div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
      <h4><a href="#col2Content" data-toggle="collapse">Column 2</a></h4>

      <!-- With class collapse this div won't show on load -->
      <div id="col2Content" class="collapse">Quisque rutrum augue odio, eu placerat diam bibendum id. Donec at fringilla leo, non varius magna. Vestibulum finibus, lacus at gravida condimentum, tellus mauris imperdiet orci, a pretium justo nulla sit amet nunc. Class aptent taciti sociosqu ad litora torquent per conubia.</div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <h4><a href="#col3Content" data-toggle="collapse">Column 3</a></h4>
      <div id="col3Content" class="collapse">Pellentesque vulputate faucibus leo, non blandit ante faucibus maximus. Nunc non neque laoreet, tincidunt nisl et, tristique odio. Nullam imperdiet sollicitudin neque malesuada ornare. Curabitur ultrices urna id gravida lacinia. Nunc eu neque vitae nisi luctus rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</div>
    </div>
  </div>
</div><br>

<!-- Show / Hide elements based on screen size -->
<div class="container">

<div class="well hidden-sm hidden-md hidden-lg">
<p>Screen &lt; 768px</p>
</div>

<div class="well hidden-md hidden-lg">
<p>Screen &gt;= 768px and &lt; 992px</p>
</div>

<div class="well hidden-lg">
<p>Screen &gt;= 992px and &lt; 1200px</p>
</div>

<div class="well">
<p>Screen &gt; 1200px</p>
</div>

</div><br>

<div class="container">

  <!-- You can constrain the columns if you want -->
  <div class="row">

  <!-- We could move it to the right with a blank div
  <div class="col-md-6"></div> -->

  <!-- Or we could use offset -->
  <div class="col-md-6 col-md-offset-6">

    <!-- The table class adds nice spacing and the other classes add additional style -->
    <table class="table table-bordered table-striped table-hover">
    <thead>
    <tr>
    <td colspan="4">Best Baseball Players</td>
    </tr>
    </thead>
    <tbody>
    <tr>

    <!-- You can adjust the width of table columns as well -->
    <th class="col-md-2"></td>

    <!-- Use text alignment like text-center or text-right -->
    <th class="text-center">Average</td>
    <th class="text-center">RBIs</td>
    <th class="text-center">Homeruns</td>
    </tr>
    <tr>
    <td><a href="#">Hank Aaron*</a></td>
    <td>.305</td>
    <td>2297</td>
    <td>755</td>
    </tr>
    <tr>
    <td><a href="#">Babe Ruth*</a></td>
    <td>.342</td>
    <td>2214</td>
    <td>714</td>
    </tr>
    <tr>
    <td><a href="#">Barry Bonds</a></td>
    <td>.298</td>
    <td>1996</td>
    <td>762</td>
    </tr>
    </tbody>
    </table>
  </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
```

## Cheatsheat 3
```html
`<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Bootstrap Tutorial</title>

<!-- Use downloaded version of Bootstrap. You can style everything here to your liking. -->
<!-- Download the Bootstrap source code here
http://getbootstrap.com/getting-started/ -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<style type="text/css">
body {
  font-size: 62.5%;
  font-family: arial, sans-serif;
}
#nttLogo{
  height: 100px;
  width: 100px;
}
#websiteTitle{
  font-size: 10em;
  vertical-align: middle;
  font-family: 'Pacifico', cursive;
  padding-left: 15px;
  color: #191970;
}
#websiteSlogan{
  font-size: 5.4em;
}
/* Carousel Styling */
.slide1{
  background-image: url('bkgrnd1.png');
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.slide2{
  background-image: url('bkgrnd2.png');
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.slide3{
  background-image: url('bkgrnd3.png');
  height: 500px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.carousel-caption h1{
  font-size: 5.4em;
  font-family: 'Pacifico', cursive;
  padding-bottom: .4em;
}
.carousel-caption p{
  font-size: 2em;
}
</style>
</head>
<body>
<!--
<div class="container">
  <div class="jumbotron">
  <img src="ntt-logo.png" id="nttLogo" alt="New Think Tank Logo">
  <span id="websiteTitle">New Think Tank</span>
  <p id="websiteSlogan">Video Tutorials on just about Anything</p>
  </div>
</div>
-->

<!-- Carousel -->
<!-- Surround everything with a div with the class carousel slide -->
<div id="theCarousel" class="carousel slide" data-ride="carousel">

  <!-- Define how many slides to put in the carousel -->
  <ol class="carousel-indicators">
    <li data-target="#theCarousel" data-slide-to="0" class="active"> </li >
    <li data-target="#theCarousel" data-slide-to="1"> </li>
    <li data-target ="#theCarousel" data-slide-to="2"> </li>
  </ol >

  <!-- Define the text to place over the image -->
  <div class="carousel-inner">
    <div class="item active" >
    <div class ="slide1"></div>
    <div class="carousel-caption">
      <h1>Amazing Backgrounds</h1>
      <p>Thousands of Backgrounds for Free</p>
      <p><a href="#" class="btn btn-primary btn-sm">Get them Now</a></p>
    </div>
  </div>
  <div class="item">
  <div class="slide2"></div>
  <div class="carousel-caption">
    <h1>Thousands of Colors</h1>
    <p>Every Color you can Imagine</p>
  </div>
  </div>
  <div class="item">
  <div class="slide3"></div>
  <div class="carousel-caption">
  <h1>Amazing Illustrations</h1>
  <p>And they are All Free</p>
  </div>
  </div>
  </div>

  <!-- Set the actions to take when the arrows are clicked -->
  <a class="left carousel-control" href="#theCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"> </span>
  </a>
  <a class="right carousel-control" href="#theCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Use downloaded version of Bootstrap -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
```