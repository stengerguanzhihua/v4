<!DOCTYPE html>
<html>
  <head>
    <title>Minimal 1.0 - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="gb2312" />

    <link rel="shortcut icon" href="http://www.17sucai.com/static/images/favicon.ico" type="image/x-icon"/>
    <!-- Bootstrap -->
    <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/animate/animate.min.css">
    <link type="text/css" rel="stylesheet" media="all" href="assets/js/vendor/mmenu/css/jquery.mmenu.all.css" />
    <link rel="stylesheet" href="assets/js/vendor/videobackground/css/jquery.videobackground.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">
    <link rel="stylesheet" href="assets/js/vendor/rickshaw/css/rickshaw.min.css">
    <link rel="stylesheet" href="assets/js/vendor/morris/css/morris.css">
    <link rel="stylesheet" href="assets/js/vendor/tabdrop/css/tabdrop.css">
    <link rel="stylesheet" href="assets/js/vendor/summernote/css/summernote.css">
    <link rel="stylesheet" href="assets/js/vendor/summernote/css/summernote-bs3.css">
    <link rel="stylesheet" href="assets/js/vendor/chosen/css/chosen.min.css">
    <link rel="stylesheet" href="assets/js/vendor/chosen/css/chosen-bootstrap.css">
    <link href="assets/css/minimal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg-1">

    <!-- Preloader -->
    <div class="mask"><div id="loader"></div></div>
    <!--/Preloader -->

    <!-- Wrap all page content here -->
    <div id="wrap">
      <!-- Make page fluid -->
      <div class="row">
        
		<?php
		require_once("w_navbar.php");
		?>
        
	<?php
		require_once("e_indexcontent.php");
	?>

	<?php
		require_once("w_rightpanel.php");
	?>
      </div>
      <!-- Make page fluid-->
    </div>
    <!-- Wrap all page content end -->

		<?php
		require_once("w_pubjs.php");
		?>

  <script src="each.js"></script>
  </body>
</html>
      
