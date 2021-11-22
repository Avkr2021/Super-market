<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- bootstrap icon link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- fafa icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">

    <!-- slider -->
    <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">




    <title>TIS Coin</title>
  </head>
  <body >
<!-- php include navbar -->
<?php include('include/navbar.php');  ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="delet">
          <h4>Account Deletion</h4>
          <h5>Your account username: tusharka007</h5>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever sinc.</p>
        </div>
        <div class="type_username">
          <p>Type your username below to confirm deletion</p>
          <input type="text" name="">
          <div class="delete_btn">
            <button>Delete</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<style type="text/css">
  
 .menu {
   font-family: Verdana, Arial, sans-serif;
   font-size: 0.8em;
   width: 100%;
   position: fixed;
   display: none;
   z-index: 9999999;
}
 .js .menu {
   display: inline-block;
}
 .menu .dragger {
   height: 18px;
   background: #247fab;
   display: block;
   cursor: s-resize;
   border-top: 2px solid #124057;
}
 .menu .dragger span, .menu .dragger span:before, .menu .dragger span:after {
   width: 30px;
   height: 1px;
   margin: 0 auto;
   display: block;
   position: relative;
   top: 5px;
   background-color: white;
}
 .menu .dragger span:before, .menu .dragger span:before:before, .menu .dragger span:after:before {
   content: " ";
   top: 4px;
}
 .menu .dragger span:after, .menu .dragger span:before:after, .menu .dragger span:after:after {
   content: " ";
   top: 7px;
}

.ui-draggable-handle {
  background: #fff;
}
 
 


</style>
<section>
<div class="menu" id="mainmenu">
  <div id="dragmenu" class="draggable">        <nav>
      <ul>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
      </ul>
  </nav>
  <span class="dragger" title="Drag me"><span></span></span>
  </div>
</div>
<br /><br />
dragBegin: <input type="text" value="" id="dragBegin" /><br />
dragStop: <input type="text" value="" id="dragStop" />
</section>



<?php include('include/footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>

<!-- slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.nicolas-stey.de/cdn/jquery.ui.touch-punch.min.js"></script>   
    <script type="text/javascript">
      
var dragmenuHeight = $("#mainmenu").height();
var draggerHeight = $('.dragger').height();

// moves the fixed containment-container behind the top viewport
$("#mainmenu").height(dragmenuHeight + dragmenuHeight - draggerHeight).css("top", 0 - dragmenuHeight + draggerHeight);

var dragStart = 0, dragStop = 0, minMovement = 20; // in pixels
var dragBeginInput = $('#dragBegin');
var dragStopInput = $('#dragStop');

$("#dragmenu").draggable({
  containment: "#mainmenu",
  scroll: false,
  axis: "y",
  
  start: function(event, ui) {
    dragBegin = $(this).offset().top;
    dragBeginInput.val(dragBegin);
  },
  
  stop: function(event, ui) {
    dragStop = $(this).offset().top;
    dragStopInput.val(dragStop);
    
    if (dragStart <= dragStop) { // opening movement
      if (Math.abs(dragBegin) - Math.abs(dragStop) < minMovement) {
        closeMenu($(this));
      } else {
        openMenu($(this));
      }
    } else if (dragStart > dragStop) { // closing movement
      if (Math.abs(dragStop) - Math.abs(dragBegin) < minMovement) {
        openMenu($(this));
      } else {
        closeMenu($(this));
      }
    }
  },
  
  drag: function(event, ui) {
    dragStart = $(this).offset().top;
    dragBeginInput.val(dragStart);
  }
});

function closeMenu(element) {
  element.animate({
    top: 0
  }, 300);
}

function openMenu(element) {
  element.animate({
    top: dragmenuHeight - draggerHeight
  }, 300);
}

    </script>
  </body>
</html>