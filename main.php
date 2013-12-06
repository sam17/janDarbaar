<html>
<head>
	<title>janDarbaar</title>
	<link rel="icon" type="image/png" href="images/jd-fav.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		.navbar{
			margin-bottom: 0px;
			-webkit-box-shadow: 0px 4px 12px rgba(50, 50, 50, 0.45);
			-moz-box-shadow:    0px 4px 12px rgba(50, 50, 50, 0.45);
			box-shadow:         0px 4px 12px rgba(50, 50, 50, 0.45);
		}
		.navbar.navbar-inverse.navbar-fixed-top{
			background: #323B44;
		}
		.navbar-inverse .navbar-nav>li>a{
			color: #ccc;
			font-weight: 100;
			font-size: 15px;
			font-family: calibri;
		}
		.navbar-inverse .navbar-nav>.active>a {
			color: #ccc;
			background-color: #252c34;
		}
		.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus {
			color: #fff;
			background-color: #252c34;
		}
		.navbar-wrapper{
			margin-top: 10px;
		}
		.navbar-collapse.collapse{
			float: right;
		}
		.nav li a .glyphicon{
			margin-right: 7px;
		}
		.container .navbar-header{
			margin-left: 13px;
		}
		body{
			background: url('images/brickwall.png');
			overflow: auto;
		}
		.thumb{
			width: 261px;
			padding-right: 15px;
			padding-left: 15px;
			display:inline-block;
			margin-right: auto;
			margin-left: auto;
			margin-top: 20px;
		}
		.thumbnail{
			-webkit-box-shadow: 3px 3px 14px rgba(50, 50, 50, 0.20);
			-moz-box-shadow:    3px 3px 14px rgba(50, 50, 50, 0.20);
			box-shadow:         3px 3px 14px rgba(50, 50, 50, 0.20);
		}
		.carousel-caption{
			font-family: lato;
		}
		.carousel-inner .item{
			text-align: center;
		}
		.carousel-control.left{
			background-image: linear-gradient(to right,rgba(0,0,0,0.0005) 0,rgba(0,0,0,0.0001) 100%) !important;
		}
		.carousel-control.right{
			background-image: linear-gradient(to right,rgba(0,0,0,0.0005) 0,rgba(0,0,0,0.0001) 100%) !important;
		}
		@font-face{font-family:'FontAwesome';src:url('fonts/fontawesome-webfont.eot?v=4.0.3');src:url('fonts/fontawesome-webfont.eot?#iefix&v=4.0.3') format('embedded-opentype'),url('fonts/fontawesome-webfont.woff?v=4.0.3') format('woff'),url('fonts/fontawesome-webfont.ttf?v=4.0.3') format('truetype'),url('fonts/fontawesome-webfont.svg?v=4.0.3#fontawesomeregular') format('svg');font-weight:normal;font-style:normal}.fa{display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
		.social_buttons .btn{
			color: #777;
		}
		.social_buttons .btn:hover{
			color: #333;
		}
		.social_buttons .btn-info{
			color: #fff;
		}
		.social_buttons .btn-info:hover{
			color: #fff;
		}
		.social_buttons .btn{
			padding:6px 9px;
		}
		.fa{
			margin-right:10px;
		}
	</style>
</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      	<div class="container">
            <div class="navbar-header">
              	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
              	</button>
              	<a class="navbar-brand" href="http://gcdc2013-jan-darbaar.appspot.com/" style="padding: 4;" title="janDarbaar"><img src="/images/jandarbaar-logo.png" style="width: 47;"></a>
            </div>
            <div class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	                <li class="active"><a href="/"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
	                <li><a href="/browse"><span class="glyphicon glyphicon-th"></span>  Browse</a></li>
	                <li><a href="/complaint"><span class="glyphicon glyphicon-edit"></span>  Complaint</a></li>
	                <li><a href="/profile"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
	                <li><a href="/howItWorks"><span class="glyphicon glyphicon-info-sign"></span>  How-It-Works</a></li>
	                <li style="margin-top: 8px;">
	                	<span id="signinButton">
						  <span
						    class="g-signin"
						    data-callback="signinCallback"
						    data-clientid="1009473923694-fm7mj1pqavpc5nnjbhc9cj1eo3a7bb8i.apps.googleusercontent.com"
						    data-cookiepolicy="single_host_origin"
						    data-requestvisibleactions="http://schemas.google.com/AddActivity"
						    data-scope="https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/userinfo.email">
						  </span>
						</span>
					</li>
					<li style="display:none" id="user"> <a href="#" id="username" style="padding:0px;"></a> </li>
	            </ul>
	            <ul>

	            </ul>
            </div>
      	</div>
    </div>

    <div class="mainBody">
    	<img src="images/room1.jpg" style="width:100%;">
    	<div class="container">
    		<div class="row" style="margin-top: 20px;margin-bottom: 20px;">
    			<h1 style="text-align:center;font-family:lato;margin-top:30px;">
    				<img src="images/quote-start.png" width="100">
    				<w style="margin-left: -66px;position: relative;top: 8px;">
    					Be the change that you wish to see in the world
    				</w>
    			</h1>
    			<h4 style="text-align:right;margin-right: 87px;font-family:lato;">- Mahatma Gandhi</h4>
    		</div>
    		<div class="row">
    			<h3 style="font-family:lato;color: #555;"><i class="fa fa-map-marker"></i > Location</h3>
    			<div class="locationBlock" style="width:100%;text-align:center;">

    			</div>
    		</div>
    		<div class="row">
    			<h3 style="font-family:lato;color: #555;"><i class="fa fa-thumbs-o-up"></i > Popularity</h3>
    			<div class="popularityBlock" style="width:100%;text-align:center;">

    			</div>
    		</div>
    		<div class="row" style="margin-bottom: 50px;">
    			<h3 style="font-family:lato;color: #555;"><i class="fa fa-calendar"></i > Recent</h3>
    			<div class="recentBlock" style="width:100%;text-align:center;">

    			</div>
    		</div>
    	</div>
    </div>
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/isotope.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  

	<script type="text/javascript">
		$(function(){

			

	        for (var i = 0; i < 4; i++) {
				$('.locationBlock').append('<div class="thumb location"><div class="thumbnail"><div style="width: 100%; height: 170px;background:#eee"><img width="221" height="170" src="img/problem_1.jpg"></div><h3 style="text-align:center;font-size:21px;padding-bottom: 7px;padding-top: 7px;margin: 0px;width: 100%;background: #ddd;">Main Title</h3><div class="caption"><p style="font-size: 12px;text-align: justify;">Description of the problem in breif. This will be a small portion of the total problem, just like a small description.....</p></div><p style="color: #aaa;text-align: left;margin-left: 9px;margin-bottom: 11px;font-family: lato;"><span class="fa fa-map-marker" style="margin-right: 7px;"></span> Kharagpur, India</p><p class="social_buttons" style="background: #eee;margin: 0px;padding: 4;"><a href="#" class="btn btn-facebook" cat_id="#" role="button"><i class="fa fa-facebook fa-lg"></i></a><a href="#" class="btn btn-google" cat_id="#" role="button"><i class="fa fa-google-plus fa-lg"></i></a><a href="#" class="btn btn-vote" role="button"><i class="fa fa-thumbs-up fa-lg"></i></a><a class="btn btn-info">Details</a></p></div></div>');
			};

			for (var i = 0; i < 4; i++) {
				$('.recentBlock').append('<div class="thumb location"><div class="thumbnail"><div style="width: 100%; height: 170px;background:#eee"><img width="221" height="170" src="img/problem_1.jpg"></div><h3 style="text-align:center;font-size:21px;padding-bottom: 7px;padding-top: 7px;margin: 0px;width: 100%;background: #ddd;">Main Title</h3><div class="caption"><p style="font-size: 12px;text-align: justify;">Description of the problem in breif. This will be a small portion of the total problem, just like a small description.....</p></div><p style="color: #aaa;text-align: left;margin-left: 9px;margin-bottom: 11px;font-family: lato;"><span class="fa fa-map-marker" style="margin-right: 7px;"></span> Kharagpur, India</p><p class="social_buttons" style="background: #eee;margin: 0px;padding: 4;"><a href="#" class="btn btn-facebook" cat_id="#" role="button"><i class="fa fa-facebook fa-lg"></i></a><a href="#" class="btn btn-google" cat_id="#" role="button"><i class="fa fa-google-plus fa-lg"></i></a><a href="#" class="btn btn-vote" role="button"><i class="fa fa-thumbs-up fa-lg"></i></a><a class="btn btn-info">Details</a></p></div></div>');
			};

			 for (var i = 0; i < 4; i++) {
				$('.popularityBlock').append('<div class="thumb location"><div class="thumbnail"><div style="width: 100%; height: 170px;background:#eee"><img width="221" height="170" src="img/problem_1.jpg"></div><div class="caption"><h3 style="text-align:center;margin: 5px;font-size:21px;">Main Title</h3><p style="font-size: 12px;text-align: justify;">Description of the problem in breif. This will be a small portion of the total problem, just like a small description.....</p></div><p style="color: #aaa;text-align: left;margin-left: 9px;margin-bottom: 11px;font-family: lato;"><span class="fa fa-map-marker" style="margin-right: 7px;"></span> Kharagpur, India</p><p class="social_buttons" style="background: #eee;margin: 0px;padding: 4;"><a href="#" class="btn btn-facebook" cat_id="#" role="button" ><i class="fa fa-facebook fa-lg"></i></a><a href="#" class="btn btn-google" cat_id="#" role="button" ><i class="fa fa-google-plus fa-lg"></i></a><a href="#" class="btn btn-vote" role="button" ><i class="fa fa-thumbs-up fa-lg"></i></a><a class="btn btn-info">Details</a></p></div></div>');
			};


		});

	    var po = document.createElement('script');
	    po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/client:plusone.js?onload=render';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(po, s);
		
		function signinCallback(authResult) {
		  
		  var email_id;
		  
		  if (authResult['access_token']) {
		    // Update the app to reflect a signed in user
		    // Hide the sign-in button now that the user is authorized, for example:
		    document.getElementById('signinButton').setAttribute('style', 'display: none');

		    gapi.client.load('oauth2', 'v2', function() {
			  gapi.client.oauth2.userinfo.get().execute(function(resp) {
			    // Shows user email
			    email_id = resp.email;
			  })
			});
		    
			gapi.client.load('plus','v1', function(){
		        if (authResult['access_token']) {
				    var request = gapi.client.plus.people.get( {'userId' : 'me'} );
				    request.execute( function(profile) {
				        if (profile.error) {
				          alert(profile.error);
				          return;
				        }
				        // console.log(profile);
				        $('#user').show();
				        $('#username').append(
				            $('<p style="display:inline;margin-right:10px;"><img src=\"' + profile.image.url + '\"></p>'));
				        $('#username').append(profile.displayName);
				    });
		        } else if (authResult['error']) {
		          // There was an error, which means the user is not signed in.
		          // As an example, you can handle by writing to the console:
		          console.log('There was an error: ' + authResult['error']);
		          
		        }
		        console.log('authResult', authResult);
	      	});

		  } else if (authResult['error']) {
		    // Update the app to reflect a signed out user
		    // Possible error values:
		    //   "user_signed_out" - User is signed-out
		    //   "access_denied" - User denied access to your app
		    //   "immediate_failed" - Could not automatically log in the user
		    console.log('Sign-in state: ' + authResult['error']);
		  }
		}
	</script>
</body>
</html>