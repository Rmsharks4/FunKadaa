<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout Item(s)</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Outline" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="../css/impactlabelsheet.css">
  	<link rel="stylesheet" type="text/css" href="../css/brushersheet.css">
  	<link rel="stylesheet" type="text/css" href="../css/css_checkout.css">
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
              <span id="notificationsBadge" class="badge badge-danger" style="visibility: hidden;">1</span>
            </a></li>
            <li class="nav-item"><a class="nav-link top-marks bag" href="#">
              <img src="../css/bag.png">
              <span id="cartBadge" class="badge badge-danger" style="visibility: hidden;"><?=$data['cart']?></span>
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
      <div class="py-5 text-center">
        <h2 class="chk-out-hdr">Checkout Item(s)</h2>
        <p class="lead">Please fill out the form below so we can get your art home!</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="cart-hdr d-flex justify-content-between align-items-center mb-3">
            <span class="ur-cart text-muted">Order Details</span>
            <span class="three-bdg badge badge-secondary badge-pill"><?=$data['cart']?></span>
          </h4>
          <ul class="list-group mb-3">
            <?php
            $itemids = $data['itemids'];
            $quantities = $data['quantities'];
            $prices = $data['prices'];
            $total = $data['total'];
          $i = 0;
         while($i<count($itemids)){
          $itemid = $itemids[$i];
          $quantity = $quantities[$i];
          $price = $prices[$i];?>
            <li class="pro-dets list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="dets-name my-0"><?php echo $itemid; ?></h6>
                <small class="dets-desc text-muted"><?php echo 'Amount: x' . $quantity; ?></small>
              </div>
              <span class="moneys text-muted"><?php echo $price; ?></span>
            </li>
          <?php $i++; } ?>
            <li class="pro-dets total list-group-item d-flex justify-content-between">
              <span class="dets-name t-name">Total (PKR)</span>
              <strong class="moneys "><?php echo $total; ?></strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control enter-promo" placeholder="Promo Code">
              <div class="input-group-append">
                <button type="submit" class="redeem btn btn-secondary">Redeem</button>
              </div>
            </div>
          </form>
        </div>

        <div class="billing col-md-8 order-md-1">
          <hr class="mb-4">
          <h4 class="ur-cart mb-3">Billing address</h4>
          <form class="needs-validation" novalidate method="post" action="checkout.php">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="bill-labels"  for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="John" name="firstName" required>
                <div class="invalid-feedback">
                  Recipient's first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label class="bill-labels" for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Doe" name="lastName" required>
                <div class="invalid-feedback">
                  Recipient's last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label class="bill-labels" for="phonenumber">Phone No.</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="at-class input-group-text">+92</span>
                </div>
                <input type="text" class="form-control" id="phonenumber" placeholder="XXX-XXXX-XXX" name="phone" required>
                <div class="invalid-feedback">
                  Recipient's contact is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label class="bill-labels"  for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" required>
              <div class="invalid-feedback">
                Recipient's email address is required.
              </div>
            </div>

            <div class="mb-3">
              <label class="bill-labels"  for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required>
              <div class="invalid-feedback">
                Recipient's shipping address is required.
              </div>
            </div>

            <div class="mb-3">
              <label class="bill-labels"  for="address2">City</label>
              <input type="text" class="form-control" id="address2" placeholder="City" name="city" required>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label class="bill-labels"  for="country">Country</label>
                <select class="sel-class custom-select d-block w-100" id="country" name="country" required>
                  <option value="">Choose...</option>
                  <option>Pakistan</option>
                  <option>Other</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label class="bill-labels"  for="state">State / Province</label>
                <select class="sel-class custom-select d-block w-100" id="state" name="province" required>
                  <option value="">Choose...</option>
                  <option>Punjab</option>
                  <option>Sindh</option>
                  <option>Balochistan</option>
                  <option>KPK</option>
                  <option>FATA</option>
                  <option>Azad Kashmir</option>
                  <option>Northern Areas</option>
                  <option>Other</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state / province.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label class="bill-labels"  for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="XXXXX" name="zip" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info" name="save">
              <label class="cci custom-control-label bill-labels" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="ur-cart mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" type="radio" class="custom-control-input" checked name="bill" value="Credit/Debit card" required>
                <label class="ccl custom-control-label bill-labels" for="credit">Credit/Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" type="radio" class="custom-control-input" name="bill" value="Cash on Delivery (COD)" required>
                <label class="ccl custom-control-label bill-labels" for="paypal">Cash on Delivery (COD)</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="bill-labels"  for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" name="name">
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label class="bill-labels" for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" name="cardnum">
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label class="bill-labels" for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" name="expiration">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label class="bill-labels" for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" name="cvv">
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="redeem btn btn-primary btn-block" type="submit" name="checkoutorder">Continue to checkout</button>
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
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
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
