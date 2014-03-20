<html>
<head>
	<title><?php echo $title ?> </title>
	<? 
		echo link_tag('css/foundation.css'); 	
		echo link_tag('css/normalize.css');
		echo link_tag('css/custom.css');
		echo script_tag('js/vendor/jquery.js');
		echo script_tag('js/vendor/fastclick.js');
		echo script_tag('js/vendor/modernizr.js');
		echo script_tag('js/vendor/placeholder.js');
		echo script_tag('js/foundation/foundation.js');
		echo script_tag('js/foundation/foundation.offcanvas.js');
		echo script_tag('js/foundation/foundation.topbar.js');
		echo script_tag('js/foundation/foundation.orbit.js');

		$header = array('src' =>'img/FAM_logo.jpeg', 'alt' => 'FAM Logo', 'width' => '1385px', 'height' => '150px');
	?>
</head>
<body>
<div class = "row">
	<div class = "small-12 column">
	<? //echo img($header); ?>
	<h1> Family & money </h1>
	</div>
</div>




 
 