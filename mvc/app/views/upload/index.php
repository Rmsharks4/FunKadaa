<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Upload Item</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Outline" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="../css/impactlabelsheet.css">
    <link rel="stylesheet" type="text/css" href="../css/brushersheet.css">
    <link rel="stylesheet" type="text/css" href="../css/css_upload.css">
    <link rel="stylesheet" type="text/css" href="../css/sidebar.css">

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
              <span id="notificationsBadge" class="badge badge-danger">1</span>
            </a></li>
            <li class="nav-item"><a class="nav-link top-marks bag" href="#">
              <img src="../css/bag.png">
              <span id="cartBadge" class="badge badge-danger">1</span>
            </a></li>
            <li class="nav-item"><a class="nav-link top-marks user" href="#">
              <img src="../css/messages.png">
              <span id="messagesBadge" class="badge badge-danger">1</span>
            </a></li>               
          </ul>
    
        </div>
    </nav>
    <main class="page-content">
    <div class="container">
      <div class="py-5 text-center">
        <h2 class="chk-out-hdr">Upload Item</h2>
        <p class="lead">Please fill out the form below so we can get your art online!</p>
      </div>

      <div class="row">
        <div class="billing col order-md-1">
          <hr class="mb-4">
          <h4 class="ur-cart mb-3">Information</h4>
          <form class="needs-validation" method="post" novalidate action="upload.php" enctype="multipart/form-data">
              <div class="mb-3">
                <label class="bill-labels" for="firstName">Title</label>
                <input type="text" class="form-control" id="firstName" placeholder="Mona Lisa" name="title" required>
                <div class="invalid-feedback">
                  Valid item name is required.
                </div>
              </div>
            
            <div class="mb-3">
              <label class="bill-labels" for="email">Description</label>
              <textarea class="form-control" rows="5" id="description" placeholder="Tell us what the item is ..." name="description" required></textarea>
              <div class="invalid-feedback">
                Please enter a valid description.
              </div>
            </div>

            <div class="mb-3">
              <label class="bill-labels" for="username">Price</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="at-class input-group-text">PKR</span>
                </div>
                <input type="number" class="form-control" id="username" placeholder="0" name="price" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Please enter a valid price.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label class="bill-labels" for="number">Quantity</label>
              <input type="number" class="form-control" id="address" placeholder="0" name="quantity" required>
              <div class="invalid-feedback">
                Please enter a valid quantity.
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label class="bill-labels" for="country">Category 1</label>
                <select class="sel-class custom-select d-block w-100" id="country" name="category1" required>
                  <option value="">Choose...</option>
                  <option>Fashion</option>
                  <option>Accessories</option>
                  <option>Lifestyle</option>
                  <option>Party</option>
                  <option>Entertainment</option>
                  <option>Art</option>
                  <option>Supplies</option>
                  <option>Vintage</option>
                </select>
                <div class="invalid-feedback">
                  Please select at least one category.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label class="bill-labels" for="state">Category 2 <span class="text-muted">(Optional)</span></label>
                <select class="sel-class custom-select d-block w-100" id="country" name="category2">
                  <option value="">Choose...</option>
                  <option>Fashion</option>
                  <option>Accessories</option>
                  <option>Lifestyle</option>
                  <option>Party</option>
                  <option>Entertainment</option>
                  <option>Art</option>
                  <option>Supplies</option>
                  <option>Vintage</option>
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label class="bill-labels"  for="zip">Category 3 <span class="text-muted">(Optional)</span></label>
              <select class="sel-class custom-select d-block w-100" id="country" name="category3">
                  <option value="">Choose...</option>
                  <option>Fashion</option>
                  <option>Accessories</option>
                  <option>Lifestyle</option>
                  <option>Party</option>
                  <option>Entertainment</option>
                  <option>Art</option>
                  <option>Supplies</option>
                  <option>Vintage</option>
                </select>
            </div>
            </div>
            <hr class="mb-4">
            
            <h4 class="ur-cart mb-3">Images</h4>

            <div class="row">
              <div class="form-group files col mb-3">
                          <label class="form-control file-input" for="file-upload">Add Image(s)</label>
                          <input id="file-upload" type="file" multiple name="images[]" required>
                 <div class="wuteven invalid-feedback">
                  Atleast one image is required.
                </div>       
              </div>
            </div>
            <hr class="mb-4">
            <button type="submit" class="redeem btn btn-primary btn-lg btn-block" name="uploaditem">Upload</button>
          </form>
        </div>
      </div>
    </div>
  </main>
</div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    
    <script>
      $(document).ready(function(){
        $("#file-upload").on('change',function(){
            var files = document.getElementsByClassName('file-input')[0];
            files.style.outline = "2px dashed darkgreen";
            files.style.color = "darkgreen";
            files.innerHTML = "Image(s) Uploaded";
            var label = document.getElementsByClassName('wuteven')[0];
            label.style.display = "none";
        });
      });

      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          var files = document.getElementsByClassName('file-input')[0];
                
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false || files.innerHTML==="Add Image(s)") {
                if(files.innerHTML==="Add Image(s)") {
                  files.style.outline = "2px dashed red";
                  var label = document.getElementsByClassName('wuteven')[0];
                  label.style.display = "inline-block";
                }
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
