<html>
<head>
	<title>janDarbaar</title>
	<link rel="icon" type="image/png" href="images/jd-fav.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		.navbar.navbar-inverse.navbar-static-top{
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
		.container .navbar-header{
			margin-left: 13px;
		}
		body{
			background: url('images/brickwall.png');
			overflow: hidden;
		}
		.leftSideBar{
			background: #fff;
			-webkit-box-shadow: 4px 0px 12px rgba(50, 50, 50, 0.25);
			-moz-box-shadow:    4px 0px 12px rgba(50, 50, 50, 0.25);
			box-shadow:         4px 0px 12px rgba(50, 50, 50, 0.25);
			height: 100%;
		}
		.navList{
			list-style: none;
			width: 100%;
			-webkit-padding-start: 20px;
			position: relative;
			margin-top: 36px;
			height : calc(100% - 365px) !important;
			overflow-y: auto;
		}
		.navList li{
			width: 100%;
			height: 40px;
			background: #eee;
			font-size: 15px;
			font-weight: bold;
			margin-top: 7px;
			padding-top: 7px;
			padding-left: 10px;
			border: 1px solid #ccc;
			cursor: pointer;
			color: #333;
		}
		.navbar{
			margin-bottom: 0px;
			-webkit-box-shadow: 0px 4px 12px rgba(50, 50, 50, 0.45);
			-moz-box-shadow:    0px 4px 12px rgba(50, 50, 50, 0.45);
			box-shadow:         0px 4px 12px rgba(50, 50, 50, 0.45);
		}
		.num-tag{
			float: right;
			margin-right: 10px;
			font-size: 14px;
		}
		.panel{
			border-radius: 0px;
		}
		.panel-heading{
			border-radius: 0px;
		}
		.middle{
			margin-top: 30px;
			height: 95% !important; /* fallback if needed */
  			height: calc(100% - 65px) !important;
		}
		.thumbnail:hover{
			cursor: pointer;
		}
		.sideTitle{
			position: relative;
			top: 30px;
			left: 10px;
			color: #333;
			font-size: 20px;
		}
		.thumb{
			width: 261px;
			padding-right: 15px;
			padding-left: 15px;
		}
		.nav li a .glyphicon{
			margin-right: 7px;
		}
		.leftSideBar .row{
			margin-left: 0px;
			margin-right: 0px;
		}
		.desc{
			margin-top: 10px;
		}
		/*Donot remove */
		@font-face{font-family:'Glyphicons Halflings';src:url('fonts/glyphicons-halflings-regular.eot');src:url('fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),url('fonts/glyphicons-halflings-regular.woff') format('woff'),url('fonts/glyphicons-halflings-regular.ttf') format('truetype'),url('fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg')}
		
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
		.social_buttons .btn-danger{
			color: #fff;
		}
		.social_buttons .btn-primary{
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

		/**** Isotope Filtering ****/

		.isotope-item {
		  z-index: 2;
		}

		.isotope-hidden.isotope-item {
		  pointer-events: none;
		  z-index: 1;
		}

		/**** Isotope CSS3 transitions ****/

		.isotope,
		.isotope .isotope-item {
		  -webkit-transition-duration: 0.8s;
		     -moz-transition-duration: 0.8s;
		      -ms-transition-duration: 0.8s;
		       -o-transition-duration: 0.8s;
		          transition-duration: 0.8s;
		}

		.isotope {
		  -webkit-transition-property: height, width;
		     -moz-transition-property: height, width;
		      -ms-transition-property: height, width;
		       -o-transition-property: height, width;
		          transition-property: height, width;
		}

		.isotope .isotope-item {
		  -webkit-transition-property: -webkit-transform, opacity;
		     -moz-transition-property:    -moz-transform, opacity;
		      -ms-transition-property:     -ms-transform, opacity;
		       -o-transition-property:      -o-transform, opacity;
		          transition-property:         transform, opacity;
		}

		/**** disabling Isotope CSS3 transitions ****/

		.isotope.no-transition,
		.isotope.no-transition .isotope-item,
		.isotope .isotope-item.no-transition {
		  -webkit-transition-duration: 0s;
		     -moz-transition-duration: 0s;
		      -ms-transition-duration: 0s;
		       -o-transition-duration: 0s;
		          transition-duration: 0s;
		}
	</style>
</head>
<body>

    <div class="navbar navbar-inverse navbar-static-top">
      	<div class="container">
            <div class="navbar-header">
              	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
              	</button>
              	<a class="navbar-brand" href="#">janDarbaar</a>
            </div>
            <div class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	                <li><a href="/"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
	                <li class="active"><a href="/browse"><span class="glyphicon glyphicon-th"></span>  Browse</a></li>
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
            </div>
      	</div>
    </div>

    <div class="mainBody">

	    	<div class="row">
		    	<div class="leftSideBar col-xs-2 col-md-3 col-lg-3">
		    		<span class="sideTitle">Categories</span>
		    		<ul class="navList">
		    			<li class="tags" tag-val="*">
		    				<span>All</span><span class="num-tag label label-primary">116</span>
		    			</li>
		    			<li class="tags" tag-val=".water">
		    				<span>Water</span><span class="num-tag label label-primary">26</span>
		    			</li>
		    			<li class="tags" tag-val=".electricity">
		    				<span>Electricity</span><span class="num-tag label label-primary">66</span>
		    			</li>
		    			<li class="tags" tag-val=".transportation">
		    				<span>Transportation</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val=".telecom">
		    				<span>Telecom</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val=".sanitation">
		    				<span>Sanitation</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val=".recreation">
		    				<span>Recreational Facility</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val=".civicAdministration">
		    				<span>Civic Administration</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val=".judicial">
		    				<span>Judicial</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val=".police">
		    				<span>Police</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val=".municipal">
		    				<span>Municipality</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val=".healthAndMedicine">
		    				<span>Health and Medicine</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val=".food">
		    				<span>Food</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    		</ul>
		    		<div class="row" style="margin-top: 20px;">
			    		<div class="panel panel-primary">
				        	<div class="panel-heading">
				          		<h3 class="panel-title" style="margin-left:10px;">Description</h3>
				        	</div>
				        	<div class="panel-body" style="margin-left:10px;">
				          		<h4>Main Title</h4>
				          		<a href="#" target="_blank" class="btn btn-danger">Link</a>
				          		<div class="desc">
					          		<p>Description of the bookmark...if any....</p>
					          		<span class="label label-success tag canSelect" data-filter=".funny">Funny</span>
					          		<span class="label label-success tag canSelect" data-filter=".motivational">Motivational</span>
					          		<span class="label label-success tag canSelect" data-filter=".javascript">Javascript</span>
					          		<span class="label label-success tag canSelect" data-filter=".startup">StartUp</span>
					          		<span class="label label-success tag canSelect" data-filter="*">All</span>
				          		</div>
				        	</div>
				      	</div>
		    		</div>
		    	</div>
	    		<div class="middle col-xs-10 col-md-9 col-lg-9">
	    			<div class="row">
	    				<div class="col-xs-1 col-md-1 col-lg-1"></div>
	    				<div class="middleInner col-xs-10 col-md-10 col-lg-10">
				    		<div class="center">
						        
					      	</div>
	    				</div>
	    			</div>
	    		</div>
		    	<div class="rightSideBar">

		    	</div>
	    	</div>
    </div>
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/isotope.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript">
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

	$(function(){
		for (var i = 0; i < 5; i++) {
			$('.center').append('<div class="thumb water"><div class="thumbnail"><div style="width: 100%; height: 170px;background:#eee"><img width="221" height="170" src="img/problem_1.jpg"></div><h3 style="text-align:center;font-size:21px;padding-bottom: 7px;padding-top: 7px;margin: 0px;width: 100%;background: #ddd;">Main Title</h3><div class="caption"><p style="font-size: 12px;text-align: justify;">Description of the problem in breif. This will be a small portion of the total problem, just like a small description.....</p></div><p style="color: #aaa;text-align: left;margin-left: 9px;margin-bottom: 11px;font-family: lato;"><span class="fa fa-map-marker" style="margin-right: 7px;"></span> Kharagpur, India</p><p class="social_buttons" style="background: #eee;margin: 0px;padding: 4;"><a href="#" class="btn btn-facebook" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Share on Facebook" cat_id="#" role="button"><i class="fa fa-facebook fa-lg"></i></a><a href="#" class="btn btn-google" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Share on Google+" cat_id="#" role="button"><i class="fa fa-google-plus fa-lg"></i></a><a href="#" class="btn btn-vote" role="button"><i class="fa fa-thumbs-up fa-lg"></i></a><a class="btn btn-danger">Details</a></p></div></div>');
		};

		for (var i = 0; i < 6; i++) {
			$('.center').append('<div class="thumb electricity"><div class="thumbnail"><div style="width: 100%; height: 170px;background:#eee"><img width="221" height="170" src="img/problem_1.jpg"></div><h3 style="text-align:center;font-size:21px;padding-bottom: 7px;padding-top: 7px;margin: 0px;width: 100%;background: #ddd;">Main Title</h3><div class="caption"><p style="font-size: 12px;text-align: justify;">Description of the problem in breif. This will be a small portion of the total problem, just like a small description.....</p></div><p style="color: #aaa;text-align: left;margin-left: 9px;margin-bottom: 11px;font-family: lato;"><span class="fa fa-map-marker" style="margin-right: 7px;"></span> Kharagpur, India</p><p class="social_buttons" style="background: #eee;margin: 0px;padding: 4;"><a href="#" class="btn btn-facebook" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Share on Facebook" cat_id="#" role="button"><i class="fa fa-facebook fa-lg"></i></a><a href="#" class="btn btn-google" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Share on Google+" cat_id="#" role="button"><i class="fa fa-google-plus fa-lg"></i></a><a href="#" class="btn btn-vote" role="button"><i class="fa fa-thumbs-up fa-lg"></i></a><a class="btn btn-info">Details</a></p></div></div>');
		};

		for (var i = 0; i < 14; i++) {
			$('.center').append('<div class="thumb transportation"><div class="thumbnail"><div style="width: 100%; height: 170px;background:#eee"><img width="221" height="170" src="img/problem_1.jpg"></div><h3 style="text-align:center;font-size:21px;padding-bottom: 7px;padding-top: 7px;margin: 0px;width: 100%;background: #ddd;">Main Title</h3><div class="caption"><p style="font-size: 12px;text-align: justify;">Description of the problem in breif. This will be a small portion of the total problem, just like a small description.....</p></div><p style="color: #aaa;text-align: left;margin-left: 9px;margin-bottom: 11px;font-family: lato;"><span class="fa fa-map-marker" style="margin-right: 7px;"></span> Kharagpur, India</p><p class="social_buttons" style="background: #eee;margin: 0px;padding: 4;"><a href="#" class="btn btn-facebook" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Share on Facebook" cat_id="#" role="button"><i class="fa fa-facebook fa-lg"></i></a><a href="#" class="btn btn-google" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Share on Google+" cat_id="#" role="button"><i class="fa fa-google-plus fa-lg"></i></a><a href="#" class="btn btn-vote" role="button"><i class="fa fa-thumbs-up fa-lg"></i></a><a class="btn btn-primary">Details</a></p></div></div>');
		};

		var $container = $('.center');
	    $container.isotope({
	        filter: '*',
	        animationOptions: {
	            duration: 1750,
	            easing: 'linear',
	            queue: false
	        }
	    });

	 
	    /*$('.tag.canSelect').click(function(){
	        var selector = $(this).attr('data-filter');
	        $container.isotope({
	            filter: selector,
	            animationOptions: {
	                duration: 750,
	                easing: 'linear',
	                queue: false
	            }
	         });
	         return false;
	    });*/

		$(window).load(function(){
            $(".navList").mCustomScrollbar({
	            scrollInertia: 150
	        });
            $(".middleInner").mCustomScrollbar({
	            scrollInertia: 150,
	            advanced:{
				        updateOnContentResize: true
				    }
	        });
        });

	    $('.tags').click(function(){
	        $('.tags.active').removeClass('active');
	        $(this).addClass('active');
	 	
	        var selector = $(this).attr('tag-val');
	        $container.isotope({
	            filter: selector,
	            animationOptions: {
	                duration: 1750,
	                easing: 'linear',
	                queue: false
	            }
	         });

	         return false;
	    });

	});
</script>
</body>
</html>