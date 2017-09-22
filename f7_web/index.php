<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Virtubox</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="css/framework7.ios.min.css">
    <link rel="stylesheet" href="css/framework7.ios.colors.min.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="css/my-app.css">
    <link rel="shortcut icon" href="/virtubox.ico">
    <link rel="icon" type="image/png" sizes="152x152" href="/virtubox-152.png">    
  </head>
  <body>
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
        <p>Left panel content goes here</p>
      </div>
    </div>
    <!-- Right panel with cover effect-->
    <div class="panel panel-right panel-cover">
      <div class="content-block">
        <p>Right panel content goes here</p>
      </div>
    </div>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <!-- We have home navbar without left link-->
            <div class="center sliding">Virtubox</div>
            <div class="right">
              <!-- Right link contains only icon - additional "icon-only" class--><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
            </div>
          </div>
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content">
              <div class="content-block-title">Step 1</div>
              <div class="content-block">
                <div class="content-block-inner">
                <h1>What's in your mind ?</h1>
	              <div class="list-block">
	                <ul>
	                  <li><a class="item-link click-makewish">
	                      <div class="item-content">
	                        <div class="item-inner"> 
	                          <div class="item-title">Make A Wish</div>
	                        </div>
	                      </div></a></li>
	                  <li><a class="item-link click-support">
	                      <div class="item-content"> 
	                        <div class="item-inner">
	                          <div class="item-title">Do Support</div>
	                        </div>
	                      </div></a></li>
	                </ul>
	              </div>                  
                </div>
              </div>
              <div class="content-block">
              	<a class="item-link click-dashboard">Dashboard</a>
              </div>
              <div class="content-block-title">Side panels</div>
              <div class="content-block">
                <div class="row">
                  <div class="col-50"><a href="#" data-panel="left" class="button open-panel">Left Panel</a></div>
                  <div class="col-50"><a href="#" data-panel="right" class="button open-panel">Right Panel</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner"><a href="#" class="link">Link 1</a><a href="#" class="link">Link 2</a></div>
        </div>
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="js/my-app.js"></script>
  </body>
</html>