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
		echo script_tag('js/foundation/foundation.offcanvas.js');
		echo script_tag('js/foundation/foundation.topbar.js');
	?>
</head>
<body>


<div class="off-canvas-wrap">
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">Family & Money</h1>
      </section>

    </nav>


 <section class="main-section">
          
     <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>The Family</label></li>
        <li><a href="#">Person 1</a></li>
        <li><a href ="#"> Person 2 </a></li>
        <li><a href = "#"> Person 3 </a></li>
        <li><label>Events</label></li>
        <li>Calendar</li>
        <li><label>Tickets</label></li>
      </ul>
    </aside>
    </section>

  <a class="exit-off-canvas"></a>

  </div>



 
 