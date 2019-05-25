<!DOCTYPE html>
<html>
<head>
	<title>ITEM</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Londrina+Outline" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../css/impactlabelsheet.css" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/brushersheet.css" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/css_item.css">
  <link rel="stylesheet" type="text/css" href="../css/sidebar.css">

  <style>
    .artist {
      font-size: 2.8rem;
    }
  </style>

</head>
<body>
		<div class="page-wrapper wrapper">
	<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
        </div>
        <div class="user-info">
          <span class="user-name">John Doe</span>
          <span class="user-role">Administrator</span>
        </div>
      </div>
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text" onclick="Search()">
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>Filters</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#submens1">
              <span>CATEGORIES</span>
              <span class="expand-this">&#10095</span>
            </a>
            <div id="submens1" class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">JEWELRY & ACCESSORIES</a>
                </li>
                <li>
                  <a href="#">CLOTHING & SHOES</a>
                </li>
                <li>
                  <a href="#">HOME & LIVING</a>
                </li>
                <li>
                  <a href="#">WEDDING & PARTY</a>
                </li>
                <li>
                  <a href="#">TOYS & ENTERTAINMENT</a>
                </li>
                <li>
                  <a href="#">ARTS & COLLECTIBLES</a>
                </li>
                <li>
                  <a href="#">CRAFT SUPPLIES & TOOLS</a>
                </li>
                <li>
                  <a href="#">VINTAGE & TRADITIONAL</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#submens2">
              <span>SORT BY</span>
              <span class="expand-this">&#10095</span>
            </a>
            <div id="submens2" class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">TIME</a>
                </li>
                <li>
                  <a href="#">PRICE</a>
                </li>
                <li>
                  <a href="#">RELEVANCE</a>
                </li>
                <li>
                  <a href="#">RATINGS</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#submens3">
              <span>SPECIAL OFFERS</span>
              <span class="expand-this">&#10095</span>
            </a>
            <div id="submens3" class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">ON SALE</a>
                </li>
                <li>
                  <a href="#">FREE DELIVERY</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#submens4">
              <span>LOCATION</span>
              <span class="expand-this">&#10095</span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#submens5">
              <span>PRICE RANGE</span>
              <span class="expand-this">&#10095</span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#submens6">
              <span>COLOR PICKER</span>
              <span class="expand-this">&#10095</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	<div id="page-content-wrapper">
		<nav class="navbar navbar-default fixed-top top-header" role="navigation">
				<a id="show-sidebar" class="menu-tab navbar-header navbar-left" href="#" id="toggle-sidebar">
					<img id="menu-icon" src="../css/menu.png">
				</a>
				<a class="navbar-brand top-logo" href="#">
					<span class="logo-fun">FUN</span>
					<span class="logo-kadaa">kadaa</span>
				</a>
		
				<div class="navbar-header navbar-right">
					<ul class="nav">				
						<li class="nav-item"><a class="nav-link top-marks bell" href="#">
							<img src="../css/bell.png">
							<span id="notificationsBadge" class="badge badge-danger" style="visibility: hidden;">1</span>
						</a></li>
						<li class="nav-item"><a class="nav-link top-marks bag" href="#">
							<img src="../css/bag.png">
							<span id="cartBadge" class="badge badge-danger" style="visibility: hidden;">1</span>
						</a></li>
						<li class="nav-item"><a class="nav-link top-marks user" href="#">
							<img src="../css/messages.png">
							<span id="messagesBadge" class="badge badge-danger" style="visibility: hidden;">1</span>
						</a></li>								
					</ul>
		
				</div>
		</nav>
		<main class="page-content">
		<div class="container">
	<div class="row">
		<div class="col-sm">
			<div class=" row-sm scrollwrap">
			<button class="next-btn scroll-btn" id="btn-left" onclick="nextIndex(-1)">&#10094</button>
  			<button class="next-btn scroll-btn" id="btn-right" onclick="nextIndex(1)">&#10095</button>	
				<div class="one small-item">
  					<div class="polaroid">
  						<img class="minis" src="../css/images/profile.jpg"  alt="">
  					</div>
  				</div>
  				<div class="two small-item">
  					<div class="polaroid">
  						<img class="minis" src="../css/images/profile.jpg"  alt="">
  					</div>
  				</div>
  				<div class="one small-item">
  					<div class="polaroid">
  						<img class="minis" src="../css/images/profile.jpg"  alt="">
  					</div>
  				</div>
			</div>
			<div  class="row-sm">
  	<div class="item">
  		<div class="polaroid">
  			<?php echo '<img class="slides img-zoom-result" id="mainimg" src="data:image/jpeg;base64,' . base64_encode($data["images"][0]["image"]) . '"/>'; ?>     
  			<img class="img-zoom-result" id="result"  alt="">
  			<div class="showcasing">Showcasing</div>
  			<div class="caption" onclick="ItemPage()">&nbsp;<?=$data['post']["title"]?>&nbsp;</div>
  		</div>
  	</div>
  </div>
  </div>
  	<div class="col-sm">
  		<div class="description">
  		<div class="arrow"></div>
  		<div class="createdby">Created by</div>
  		<div class="artist" onclick="UserClick()"><?=$data['fullname']?></div>
  		<p class="details">This painting I drew when I was feeling a bit upset, and Mozzart is the only thing that cheers me up!</p>
  		<div class="actions">
  			<button class="action-btn">
  				<img class="love" src="../css/unlove.png" onclick="this.src = '../css/love.png'">
  			</button>
  			<button class="action-btn">
  				<img class="save" src="../css/unbook.png" onclick="this.src = '../css/book.png'">	
  			</button>
  			<button class="action-btn">
  				<img class="checkout" src="../css/uncart.png" onclick="this.src = '../css/cart.png'">
  			</button>
  		</div>
  		<div class="price">RS. / <?=$data['post']['price']?></div>
  		<div class="ad-divide"></div>
  		<div class="sponsored">SPONSERED</div>
  		<div class="comment">
  			<input class="input-comment" type="text" name="" placeholder="Leave a comment!...">
  		</div>
  	</div>
  	</div>
  	</div>

<br><br><br>
  	<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">COMMENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">RATINGS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">MORE</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  	<!-- ADD COMMENTS HEREEE -->
  	<div class="tab-pane active" id="comments-logout">                
                    <div class="media-list">
                      <div class="grid media level1">
                        <div class="insidemedia">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="../css/images/profile.jpg" alt="profile">
                        </a>
                               	<h4 class="media-heading text-uppercase reviews">Marco </h4>
                              	<span class="media-date text-uppercase reviews list-inline">
                                <span class="dd">22</span>
                                <span class="mm">09</span>
                                <span class="aaaa">2014</span>
                              </span>
                       
                       </div>
                        <div class="media-body">
                          <div class="well well-lg">
                              <p class="media-comment">
                                Great snippet! Thanks for sharing. I love how this looks and would personally like to buy it whenever it re-stocks! In the meantime, I'd suggest it to everyone that PLEASE ADD IT TO YOUR WISHLISTTT...
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                          </div>              
                        </div>
                      </div>
                      <div class="grid media level2">
                        <div class="insidemedia">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="../css/images/profile.jpg" alt="profile">
                        </a>
                               	<h4 class="media-heading text-uppercase reviews">Marco </h4>
                              	<span class="media-date text-uppercase reviews list-inline">
                                <span class="dd">22</span>
                                <span class="mm">09</span>
                                <span class="aaaa">2014</span>
                              </span>
                       
                       </div>
                        <div class="media-body">
                          <div class="well well-lg">
                              <p class="media-comment">
                                Great snippet! Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                          </div>              
                        </div>
                      </div>
                      <div class="grid media level3">
                        <div class="insidemedia">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="../css/images/profile.jpg" alt="profile">
                        </a>
                               	<h4 class="media-heading text-uppercase reviews">Marco </h4>
                              	<span class="media-date text-uppercase reviews list-inline">
                                <span class="dd">22</span>
                                <span class="mm">09</span>
                                <span class="aaaa">2014</span>
                              </span>
                       
                       </div>
                        <div class="media-body">
                          <div class="well well-lg">
                              <p class="media-comment">
                                Great snippet! Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                          </div>              
                        </div>
                      </div>
                      <div class="grid media level1">
                        <div class="insidemedia">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="../css/images/profile.jpg" alt="profile">
                        </a>
                               	<h4 class="media-heading text-uppercase reviews">Marco </h4>
                              	<span class="media-date text-uppercase reviews list-inline">
                                <span class="dd">22</span>
                                <span class="mm">09</span>
                                <span class="aaaa">2014</span>
                              </span>
                       
                       </div>
                        <div class="media-body">
                          <div class="well well-lg">
                              <p class="media-comment">
                                Great snippet! Thanks for sharing. I love how this looks and would personally like to buy it whenever it re-stocks! In the meantime, I'd suggest it to everyone that PLEASE ADD IT TO YOUR WISHLISTTT...
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                          </div>              
                        </div>
                      </div>
                      <div class="grid media level2">
                        <div class="insidemedia">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="../css/images/profile.jpg" alt="profile">
                        </a>
                               	<h4 class="media-heading text-uppercase reviews">Marco </h4>
                              	<span class="media-date text-uppercase reviews list-inline">
                                <span class="dd">22</span>
                                <span class="mm">09</span>
                                <span class="aaaa">2014</span>
                              </span>
                       
                       </div>
                        <div class="media-body">
                          <div class="well well-lg">
                              <p class="media-comment">
                                Great snippet! Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                          </div>              
                        </div>
                      </div>
                      <div class="grid media level3">
                        <div class="insidemedia">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="../css/images/profile.jpg" alt="profile">
                        </a>
                               	<h4 class="media-heading text-uppercase reviews">Marco </h4>
                              	<span class="media-date text-uppercase reviews list-inline">
                                <span class="dd">22</span>
                                <span class="mm">09</span>
                                <span class="aaaa">2014</span>
                              </span>
                       
                       </div>
                        <div class="media-body">
                          <div class="well well-lg">
                              <p class="media-comment">
                                Great snippet! Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                          </div>              
                        </div>
                      </div>
                      <div class="grid media level1">
                        <div class="insidemedia">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="../css/images/profile.jpg" alt="profile">
                        </a>
                               	<h4 class="media-heading text-uppercase reviews">Marco </h4>
                              	<span class="media-date text-uppercase reviews list-inline">
                                <span class="dd">22</span>
                                <span class="mm">09</span>
                                <span class="aaaa">2014</span>
                              </span>
                       
                       </div>
                        <div class="media-body">
                          <div class="well well-lg">
                              <p class="media-comment">
                                Great snippet! Thanks for sharing. I love how this looks and would personally like to buy it whenever it re-stocks! In the meantime, I'd suggest it to everyone that PLEASE ADD IT TO YOUR WISHLISTTT...
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                          </div>              
                        </div>
                      </div>
                      <div class="grid media level2">
                        <div class="insidemedia">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="../css/images/profile.jpg" alt="profile">
                        </a>
                               	<h4 class="media-heading text-uppercase reviews">Marco </h4>
                              	<span class="media-date text-uppercase reviews list-inline">
                                <span class="dd">22</span>
                                <span class="mm">09</span>
                                <span class="aaaa">2014</span>
                              </span>
                       
                       </div>
                        <div class="media-body">
                          <div class="well well-lg">
                              <p class="media-comment">
                                Great snippet! Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                          </div>              
                        </div>
                      </div>
                      <div class="grid media level3">
                        <div class="insidemedia">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="../css/images/profile.jpg" alt="profile">
                        </a>
                               	<h4 class="media-heading text-uppercase reviews">Marco </h4>
                              	<span class="media-date text-uppercase reviews list-inline">
                                <span class="dd">22</span>
                                <span class="mm">09</span>
                                <span class="aaaa">2014</span>
                              </span>
                       
                       </div>
                        <div class="media-body">
                          <div class="well well-lg">
                              <p class="media-comment">
                                Great snippet! Thanks for sharing.
                              </p>
                              <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                          </div>              
                        </div>
                      </div>          
                    </div> 
                </div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  	  	<div class="row rating-item">
        <div class="col order-md-1 mb-3">
            <div class="well well-sm">
                <div class="row">
                    <div class="col col-sm mb-3 text-center">
                    	<div class="hellocard">
                        <h2 class="chk-out-hdr">Average User Rating(s)</h2>
                        <h1 id="rateval" class="rating-num">5.0
                            </h1>
                        <div class="rating">
                            <span class="glyphicon glyphicon-star">
                            	<img class="small-icon" src="../css/star.png" onclick='
                                var rate = document.getElementById("rateval");
                                rate.innerHTML = "1.0";
                                this.src = "../css/stary.png";
                              '>
                            </span>
                            <span class="glyphicon glyphicon-star">
                            	<img class="small-icon" src="../css/star.png" onclick='
                                var rate = document.getElementById("rateval");
                                rate.innerHTML = "2.0";
                                this.src = "../css/stary.png";
                              '>
                            </span>
                            <span class="glyphicon glyphicon-star">
                            	<img class="small-icon" src="../css/star.png" onclick='
                                var rate = document.getElementById("rateval");
                                rate.innerHTML = "3.0";
                                this.src = "../css/stary.png";
                              '>
                            </span>
                            <span class="glyphicon glyphicon-star">
                            	<img class="small-icon" src="../css/star.png" onclick='
                                var rate = document.getElementById("rateval");
                                rate.innerHTML = "4.0";
                                this.src = "../css/stary.png";
                              '>
                            </span>
                            <span class="glyphicon glyphicon-star-empty">
                            	<img class="small-icon" src="../css/star.png" onclick='
                                var rate = document.getElementById("rateval");
                                rate.innerHTML = "5.0";
                                this.src = "../css/stary.png";
                              '>
                            </span>
                        </div>
                        <div>
                            <span class="glyphicon glyphicon-user">Consumer Trends</span>
                        </div>
                    </div>
                    </div>
                    <div class="col col-sm mb-3">
                        <div class="row rating-desc">
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star fivetoone">
                                	  <span class="numbo">5</span>
                                	<img src="../css/star.png" class="smallstar">
                              </span>
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">0%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star fivetoone">
                                	  <span class="numbo">4</span>
                                	<img src="../css/star.png" class="smallstar">
                                </span>
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">0%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 4 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star fivetoone">
                                	  <span class="numbo">3</span>
                                	<img src="../css/star.png" class="smallstar">
          
                                </span>
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">0%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 3 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star fivetoone">
                                	  <span class="numbo">2</span>
                                	<img src="../css/star.png" class="smallstar">
          
                                </span>
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">0%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 2 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <span class="glyphicon glyphicon-star fivetoone">
                                	  <span class="numbo">1</span>
                                	<img src="../css/star.png" class="smallstar">
          
                                </span>
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                                        <span class="sr-only">0%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 1 -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
        </div>
    </div>
</div>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>

  	<hr class="mb-4">
           


	</div>
</main>
</div>
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>

	<script>
		function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /* Create lens: */
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /* Insert lens: */
  img.parentElement.insertBefore(lens, img);
  /* Calculate the ratio between result DIV and lens: */
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /* Set background properties for the result DIV */
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /* Execute a function when someone moves the cursor over the image, or the lens: */
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /* And also for touch screens: */
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /* Prevent any other actions that may occur when moving over the image */
    result.style.backgroundImage = "url('" + img.src + "')";
  	result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  	e.preventDefault();
    /* Get the cursor's x and y positions: */
    pos = getCursorPos(e);
    /* Calculate the position of the lens: */
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /* Prevent the lens from being positioned outside the image: */
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /* Set the position of the lens: */
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /* Display what the lens "sees": */
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /* Get the x and y positions of the image: */
    a = img.getBoundingClientRect();
    /* Calculate the cursor's x and y coordinates, relative to the image: */
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /* Consider any page scrolling: */
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
	imageZoom("mainimg","result");

	$(document).ready(function(){
		$("#result").attr('style','background-image: url("../css/images/1.jpg"); background: fixed');
		$("#mainimg").mouseleave(function(){
			$("#result").attr('style','background-image: url("../css/images/1.jpg"); background: fixed');
		});
	});

	</script>
	<script type="text/javascript">
		 function ItemPage() {
      window.open("item.html","_self");     
    }

    function UserClick() {
      window.open("user.html","_self"); 
    }			
	</script>
</body>
</html>