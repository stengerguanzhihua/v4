<?php require_once("pubshow.php");?>
<!DOCTYPE html>
<html>
  <head>
   <?php 
   require_once 'html_header.php';
   
   showcss("./assets/css/minpage.css");
   ?>
	
		
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
		require_once("html_navbar.php");
		?>
        
	<?php
		require_once("e_buycontent.php");
	?>

	<?php
		require_once("html_rightpanel.php");
	?>
      </div>
      <!-- Make page fluid-->
    </div>
    <!-- Wrap all page content end -->
	<?php
	    $ArrCfgNeedJs=array("BASIC"=>true,"SCROLL"=>true);
		LoadJs($ArrCfgNeedJs);
		
		?>
  </body>
</html>
      
