 
  <?php 

  function showcss($strf){
	  echoln('<style>');
	  $lines = file($strf);
	 // ��������ѭ��
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
			echoln('<!-- ���϶��Զ��嵯���� -->
				<script type="text/javascript" src="assets/js/vendor/blockui/jquery.blockUI.js"></script>');
			echoln( '<!-- jquery ����select�ķ�װ -->
				<script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>');
			echoln( '	<!-- �������Զ���js -->
				<script src="assets/js/minimal.min.js"></script>');
				echoln( '<!-- ��״ͼ��� -->
    <script type="text/javascript" src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>');
	  }

	  if (isset($ARRNEEDJs["SCROLL"])&&$ARRNEEDJs["SCROLL"]==true || isset($ARRNEEDJs["ALL"]) )
	  {
			echoln( '<!-- �Զ����������jq��� -->
				 <script type="text/javascript" src="assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>');
	  }


	  	 if (isset($ARRNEEDJs["CHART"])&&$ARRNEEDJs["CHART"]==true || isset($ARRNEEDJs["ALL"]) )
	  {
			
			echoln( '	<!-- ͼ�����1 -->
					<script src="assets/js/vendor/flot/jquery.flot.min.js"></script>
					<!-- ͼ�����1 -->
					<script src="assets/js/vendor/flot/jquery.flot.time.min.js"></script>
					<!-- ͼ�����1 -->
					<script src="assets/js/vendor/flot/jquery.flot.selection.min.js"></script>
					<!-- ͼ�����1 -->
					<script src="assets/js/vendor/flot/jquery.flot.animator.min.js"></script>
					<!-- ͼ�����1 -->
					<script src="assets/js/vendor/flot/jquery.flot.orderBars.js"></script>
					<!-- ͼ�����1 -->
					<script src="assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>
					<!-- ����ͼ�� -->
					<script src="assets/js/vendor/rickshaw/raphael-min.js"></script> 
					<!-- ʱ��ͼ����� -->
					<script src="assets/js/vendor/rickshaw/d3.v2.js"></script>
					<!-- ʱ��ͼ����� -->
					<script src="assets/js/vendor/rickshaw/rickshaw.min.js"></script>
					<!-- ͼ�� -->
					<script src="assets/js/vendor/morris/morris.min.js"></script>');
	  }

	  	 if (isset($ARRNEEDJs["ANIMATENUMBER"])&&$ARRNEEDJs["ANIMATENUMBER"]==true || isset($ARRNEEDJs["ALL"]))
	  {
			echoln( '<!-- ���ֶ������ -->
    <script type="text/javascript" src="assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>');
	  }

	  if (isset($ARRNEEDJs["VEDIO"])&&$ARRNEEDJs["VEDIO"]==true || isset($ARRNEEDJs["ALL"]))
	  {
			echoln( '<!-- ��Ƶ������� -->
    <script type="text/javascript" src="assets/js/vendor/videobackground/jquery.videobackground.js"></script>');
	  }

	  if (isset($ARRNEEDJs["EDITOR"])&&$ARRNEEDJs["EDITOR"]==true || isset($ARRNEEDJs["ALL"]))
	  {
			echoln( '<!-- Bootstrap  �ı��༭�� -->
    <script src="assets/js/vendor/summernote/summernote.min.js"></script>');
	  }	 

	  if (isset($ARRNEEDJs["TAB"])&&$ARRNEEDJs["TAB"]==true || isset($ARRNEEDJs["ALL"]))
	  {
			echoln( '<!-- Bootstrapѡ� -->
    <script src="assets/js/vendor/tabdrop/bootstrap-tabdrop.min.js"></script>');
	  }	 

	  
	  
  }
  
  ?>



	
