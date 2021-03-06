<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet">			
	<link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Londrina+Outline" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
	
  <link rel="stylesheet" type="text/css" href="../css/brushersheet.css" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/impactlabelsheet.css" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/css_searchresults.css">	
	<link rel="stylesheet" type="text/css" href="../css/sidebar.css">

</head>

<body>
	<div class="page-wrapper wrapper">
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-header">
        <a onclick="UserClick(328)"><div class="user-pic">
          <img class="media-object img-circle" src="../css/images/profile.jpg" alt="profile">
        </div></a>
        <a onclick="UserClick(328)"><div class="user-info">
          <span class="user-name"><?=$data['fullname']?></span>
          <span class="user-role"><?=$data['role']?></span>
        </div></a>
      </div>
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search..." id="searchtext">
            <div class="input-group-append">
              <a onclick="Search()"><span class="input-group-text">
              </span></a>
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
            <li class="nav-item"><a class="nav-link top-marks bag" onclick="Checkout()">
              <img src="../css/bag.png">
              <span id="cartBadge" class="badge badge-danger" style="visibility: hidden;">1</span>
            </a></li>
            <li class="nav-item"><a class="nav-link top-marks user" href="#">
              <img src="../css/messages.png">
              <span id="messagesBadge" class="badge badge-danger"  style="visibility: hidden;">1</span>
            </a></li>               
          </ul>
    
        </div>
    </nav>
		<main class="page-content">
		<div class="container">

				<div class="py-5">
        <h2 class="chk-out-hdr">Search Results</h2>
        <p class="lead">Based on your filter selection, browse through the categories below...</p>
      </div>

			<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">ALL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="people-tab" data-toggle="tab" href="#people" role="tab" aria-controls="people" aria-selected="false">PEOPLE & POSTS</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
    <?php include "posts.php" ?>
  </div>
  <div class="tab-pane fade show" id="people" role="tabpanel" aria-labelledby="people-tab">
    <?php include "people.php" ?>
  </div>
</div>
</div>
</main>
</div>
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://www.gstatic.com/charts/loader.js"></script>

  <script>
    function Search() {
      var q = document.getElementById('searchtext').value;
      $.ajax({
          url: 'searchresults/index',
          type: 'get', // get method
          data: "search="+q, // download get name + value go
            success: function(data) {
              window.open("searchresults","_self");
            },
            error: function(data) {
            }
      });
    }

    function ItemPage(itemid) {
        $.ajax({
          url: 'searchresults/index',
          type: 'get', // get method
          data: "listing="+itemid, // download get name + value go
            success: function(data) {
              window.open("listing","_self");
            },
            error: function(data) {
            }
      });
    }

    function UserClick(userid) {
      $.ajax({
          url: 'searchresults/index',
          type: 'get', // get method
          data: "profile="+userid, // download get name + value go
            success: function(data) {
              window.open("profile","_self");
            },
            error: function(data) {
            }
      });   
    }

  </script>

  <script>
        jQuery(function ($) {
      var x = 0;
$("#show-sidebar").click(function() {
  if(x===0) {
  $(".page-wrapper").addClass("toggled");
  $(".top-header").css('margin-left','300px');
  x=1;
} else {
  $(".page-wrapper").removeClass("toggled");
  $(".top-header").css('margin-left','0px');
  x=0;
}
});
});
  </script>
</body>
</html>