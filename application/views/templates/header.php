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
<div class="off-canvas-wrap">
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">Family & Money</h1>
      </section>

      <section class="right-small">
        <a class="right-off-canvas-toggle menu-icon" ><span></span></a>
      </section>
    </nav>

    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Family</label></li>
        <li><a href="#">Person 1</a></li>
        ...
      </ul>
    </aside>

    <aside class="right-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Users</label></li>
        <li><a href="#">Hari Seldon</a></li>
        ...
      </ul>
    </aside>

    <section class="main-section">
      <!-- content goes here -->
    </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>
</div>

 
