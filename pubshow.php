 
  <?php 

  function showcss($strf){
	  echoln('<style>');
	  $lines = file($strf);
	 // 在数组中循环
	 foreach ($lines as $line_num => $line) {
		echoln($line);
	 }
	 echoln('</style>');
  }

  function echoln($str){


	  echo $str."\r\n";
  }
  
  function LoadJs($ARRNEEDJs)
  {
	  if (is_array($ARRNEEDJs)==false)
	  {
		  $ARRNEEDJs=array("BASIC"=>true);
	  }
	 if ($ARRNEEDJs["BASIC"]==true || isset($ARRNEEDJs["ALL"]))
	  {
			echoln('<script src="assets/js/jquery.js"></script>');
			echoln( '<script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>');
			echoln( '<script type="text/javascript" src="assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>');
			echoln('<!-- 可拖动自定义弹出层 -->
				<script type="text/javascript" src="assets/js/vendor/blockui/jquery.blockUI.js"></script>');
			echoln( '<!-- jquery 下拉select的封装 -->
				<script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>');
			echoln( '	<!-- 本主题自定义js -->
				<script src="assets/js/minimal.min.js"></script>');
				echoln( '<!-- 线状图插件 -->
    <script type="text/javascript" src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>');
	  }

	  if (isset($ARRNEEDJs["SCROLL"])&&$ARRNEEDJs["SCROLL"]==true || isset($ARRNEEDJs["ALL"]) )
	  {
			echoln( '<!-- 自定义滚动条的jq插件 -->
				 <script type="text/javascript" src="assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>');
	  }


	  	 if (isset($ARRNEEDJs["CHART"])&&$ARRNEEDJs["CHART"]==true || isset($ARRNEEDJs["ALL"]) )
	  {
			
			echoln( '	<!-- 图表相关1 -->
					<script src="assets/js/vendor/flot/jquery.flot.min.js"></script>
					<!-- 图表相关1 -->
					<script src="assets/js/vendor/flot/jquery.flot.time.min.js"></script>
					<!-- 图表相关1 -->
					<script src="assets/js/vendor/flot/jquery.flot.selection.min.js"></script>
					<!-- 图表相关1 -->
					<script src="assets/js/vendor/flot/jquery.flot.animator.min.js"></script>
					<!-- 图表相关1 -->
					<script src="assets/js/vendor/flot/jquery.flot.orderBars.js"></script>
					<!-- 图表相关1 -->
					<script src="assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>
					<!-- 几何图形 -->
					<script src="assets/js/vendor/rickshaw/raphael-min.js"></script> 
					<!-- 时序图标库插件 -->
					<script src="assets/js/vendor/rickshaw/d3.v2.js"></script>
					<!-- 时序图标库插件 -->
					<script src="assets/js/vendor/rickshaw/rickshaw.min.js"></script>
					<!-- 图表 -->
					<script src="assets/js/vendor/morris/morris.min.js"></script>');
	  }

	  	 if (isset($ARRNEEDJs["ANIMATENUMBER"])&&$ARRNEEDJs["ANIMATENUMBER"]==true || isset($ARRNEEDJs["ALL"]))
	  {
			echoln( '<!-- 数字动画插件 -->
    <script type="text/javascript" src="assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>');
	  }

	  if (isset($ARRNEEDJs["VEDIO"])&&$ARRNEEDJs["VEDIO"]==true || isset($ARRNEEDJs["ALL"]))
	  {
			echoln( '<!-- 视频背景插件 -->
    <script type="text/javascript" src="assets/js/vendor/videobackground/jquery.videobackground.js"></script>');
	  }

	  if (isset($ARRNEEDJs["EDITOR"])&&$ARRNEEDJs["EDITOR"]==true || isset($ARRNEEDJs["ALL"]))
	  {
			echoln( '<!-- Bootstrap  文本编辑器 -->
    <script src="assets/js/vendor/summernote/summernote.min.js"></script>');
	  }	 

	  if (isset($ARRNEEDJs["TAB"])&&$ARRNEEDJs["TAB"]==true || isset($ARRNEEDJs["ALL"]))
	  {
			echoln( '<!-- Bootstrap选项卡 -->
    <script src="assets/js/vendor/tabdrop/bootstrap-tabdrop.min.js"></script>');
	  }	 

	  
	  
  }
  
  ?>



	
