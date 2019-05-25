<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-signin-client_id" content="229171415018-1mfi349jth3s777a61pj4ri8e3p9lcki.apps.googleusercontent.com">
	<title>Sign-In</title>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Londrina+Outline" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
  
  	<link rel="stylesheet" href="../css/impactlabelsheet.css">
  	<link rel="stylesheet" href="../css/brushersheet.css">
  	<link rel="stylesheet" href="../css/css_signin.css">
  	<script src="https://apis.google.com/js/platform.js" async defer></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
  	<script>
		function onSignIn(googleUser) 
		{
			var profile = googleUser.getBasicProfile();
			window.open("newsfeed","_self");
		}

		function statusChangeCallback(response) {
			if (response.status === 'connected') {
				window.open("newsfeed","_self");
    		} 
  		}

  		function checkLoginState() {
  		  FB.getLoginStatus(function(response) {
  		    statusChangeCallback(response);
  		  });
  		}

  		window.fbAsyncInit = function() {
  		  FB.init({
  		    appId      : '642883899464273',
  		    cookie     : false,
  		    xfbml      : false,
  		    version    : 'v3.3'
  		  });

    	FB.getLoginStatus(function(response) {
    	  statusChangeCallback(response);
    	});

  		};

  		(function(d, s, id) {
  		  var js, fjs = d.getElementsByTagName(s)[0];
  		  if (d.getElementById(id)) return;
  		  js = d.createElement(s); js.id = id;
  		  js.src = "https://connect.facebook.net/en_US/sdk.js";
  		  fjs.parentNode.insertBefore(js, fjs);
  		}(document, 'script', 'facebook-jssdk'));

  		function testAPI() {
  		  FB.api('/me', function(response) {
  		    window.open("newsfeed","_self");
  		  });
  		}

	</script>
</head>
<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=642883899464273&autoLogAppEvents=1"></script>
	<div id="page-content-wrapper">
		<nav class="navbar navbar-default fixed-top top-header" role="navigation">
				<a class="navbar-brand top-logo" href="#">
					<span class="logo-fun">FUN</span>
					<span class="logo-kadaa">kadaa</span>
				</a>
		</nav>
	<div class="container">
		<div class="py-5 text-center">
        <h2 class="chk-out-hdr">SIGN-IN SCREEN</h2>
        <p class="lead"><?=$data['error']?></p>
      </div>
		<div class="row">
			<div class="col-sm others">
  				<div class="item-hldr">
  				<div class="item two signing">
  					<div class="polaroid" onclick="showsignup()">
  						<div class="signin">Sign Up</div>
  						<div class="showcasing">Are you</div>
  						<div class="caption">&nbsp;NEW TO FUNKADAA?&nbsp;</div>
  					</div>
  				</div>
  				</div>
  				<div  class="item-hldr">
  				<div class="item one logging">
  					<div class="polaroid" onclick="showlogin()">
  						<div class="signin">Login</div>
  						<div class="showcasing">Or a</div>
  						<div class="caption">&nbsp;REGULAR USER?&nbsp;</div>
  					</div>
  				</div>
  				</div>
  				<div class="item-hldr">
  				<div class="item two nothing">
  					<div class="polaroid" onclick="continueon()">
  						<div class="signin">Skip & Continue</div>
  						<div class="showcasing">Or just a</div>
  						<div class="caption">&nbsp;CURIOUS BROWSER?&nbsp;</div>
  					</div>
				</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col order-md-1">
				<div class="signup-form">
					<div class="card">
						<div class="ad-divide"></div>
						<article class="card-body mx-auto" style="max-width: 400px;">
							<p class="text-center">Get started with your free account</p>
	<p>
	<div class="g-signin2" data-onsuccess="onSignIn" data-width="315" data-height="40" data-longtitle="true" data-theme="dark" style="border: 1px solid black; margin-bottom: 10px;"></div>
		<div class="fb-login-button" data-width="315" data-size="large" data-button-type="login_with" data-auto-logout-link="false" data-use-continue-as="true"  scope="public_profile,email" onlogin="checkLoginState();"></div>
	</p>
	<p class="or-sep">
        <span>OR</span>
    </p>
	<form class="needs-validation" method="post" action="signin.php">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input class="form-control" placeholder="Full Name" name="fullname" type="text" required>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input class="form-control" placeholder="Email Address" name="email" type="email" required>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 70px;">
		    <option selected="">+92</option>
		</select>
    	<input class="form-control" placeholder="Phone number" name="phone" type="text" required>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control" name="role" required>
			<option selected> Select Role Type</option>
			<option>Seller</option>
			<option>Buyer</option>
			<option>Both</option>
		</select>
	</div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" name="password" type="password" required>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Confirm password" type="password" required>
    </div>                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary  btn-lg btn-block" name="signup"> Create Account  </button>
    </div>      
</form>
</article>
</div>
				</div>
				<div class="login-form">
					<div class="card">
						<div class="ad-divide"></div>
						
						<article class="card-body mx-auto" style="max-width: 400px;">
							<p class="text-center">Welcome back!</p>
	<p>
		<div class="g-signin2" data-onsuccess="onSignIn" data-width="300" data-height="40" data-longtitle="true" data-theme="dark" style="border: 1px solid black; margin-bottom: 10px;"></div>
		<div class="fb-login-button" data-width="300" data-size="large" data-button-type="login_with" data-auto-logout-link="false" data-use-continue-as="true"  scope="public_profile,email" onlogin="checkLoginState();"></div>
	</p>
	<p class="or-sep">
        <span>OR</span>
    </p>
	<form class="needs-validation" method="post" action="signin.php">
	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input class="form-control" placeholder="Email" name="email" type="email" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Password" name="password" type="password" required>
    </div> <!-- form-group// -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="login">  Login   </button>
    </div> <!-- form-group// -->      
</form>
</article>
</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript">
		function showsignup() {
			var x = document.getElementsByClassName("signup-form")[0];
			var y = document.getElementsByClassName("login-form")[0];
			
			x.style.display = "block";
			y.style.display = "none";

			x.scrollIntoView();
		}
		function showlogin() {
			var x = document.getElementsByClassName("signup-form")[0];
			var y = document.getElementsByClassName("login-form")[0];
			
			x.style.display = "none";
			y.style.display = "block";

			y.scrollIntoView();
		}
		function continueon() {
			var x = document.getElementsByClassName("signup-form")[0];
			var y = document.getElementsByClassName("login-form")[0];			
			x.style.display = "none";
			y.style.display = "none";
		}
	</script>
</body>
</html>