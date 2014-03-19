<html>
<head>
	<title><?php echo $title ?> </title>
	<? 
		echo link_tag('css/foundation.css'); 	
		echo script_tag('css/normalize.css');
		echo script_tag('js/vendor/jquery.js');
		echo script_tag('js/vendor/fastclick.js');
		echo script_tag('js/vendor/modernizr.js');
		echo script_tag('js/vendor/placeholder.js');
		echo script_tag('js/foundation/foundation.js');
		echo script_tag('js/foundation/foundation.topbar.js')
	?>
</head>
<body>

<div class="contain-to-grid sticky" data-options="sticky_on: large">
  <nav class="top-bar" data-topbar>
  	<ul class = "title-area">
    <li class = "name">
    	<h1><a href="#">FAM</a></h1>
    </li>

    	<section class = "top-bar-section">
    		<ul class = "right">
    			<li class =  "has-dropdown"
    			<a href="#" FAMILY & MONEY </a>
    			<ul class = "drowpdown"> <a href = "#"> Events </a>
    			</ul>
    			<ul class = "dropdown"><a href = "#"> Bio </a>
    			</ul>
    			<ul class = "dropdown"<a href = "#">Tickets </a> </ul>
    	</li>

  </nav>
</div>

 
