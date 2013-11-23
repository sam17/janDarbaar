<html>
<head>
	<title>janDarbaar</title>
	<link rel="icon" type="image/png" href="images/jd-fav.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
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
			overflow-y: auto;
			height: calc(100% - 20px) !important;
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
		.detailData{
			height: 95% !important; /* fallback if needed */
  			height: calc(100% - 115px) !important;
		}
		.center{
			height: 100% !important;
		}
		.thumbnail:hover{
			cursor: pointer;
		}
		.btn-facebook{
			background-color: #4e69a2;
			border-color: #435a8b #3c5488 #334c83;
			color: white;
		}
		.sideTitle{
			position: relative;
			top: 30px;
			left: 10px;
			color: #333;
			font-size: 20px;
		}
		.titleMedia{
			float: left;
			height: 440px;
			width: 100%;
		}
		.ownerDetails{
			background: #fff;
			width: 310px;
			height: 130px;
		}
		.prolemDetails{

		}
		#map-canvas {
			background: #fff;
	        height: 300px;
	        width: 300px;
	        margin: 0px;
	        padding: 0px
	    }
	    .profileImg{
	    	float: right;
			width: 100px;
			height: 100px;
			margin-right: 8px;
			margin-top: 14px;
	    }
	    .matter{
	    	float: left;
			margin-top: 17px;
			margin-left: 9px;
			font-family: lato;
	    }
	    .content{
	    	width: 100%;
	    	margin-top: 20px;
	    }
	    .tag{
	    	text-align: left;
	    }
	    .rightDetails .row{
	    	margin-top: 10px;
	    }
	    .leftDetails .row{
	    	margin-top: 10px;
	    }
	    .nav li a .glyphicon{
			margin-right: 7px;
		}
		.upvotes{
			display: inline;
			margin-right: 10px;
			color: #444;
		}
		.mCSB_scrollTools{
			margin-right: 20px;
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
	            <ul>

	            </ul>
            </div>
      	</div>
    </div>

    <div class="mainBody">

	    	<div class="row">
		    	<div class="leftSideBar col-xs-2 col-md-2 col-lg-2">
		    		<span class="sideTitle">Categories</span>
		    		<ul class="navList">
		    			<li class="tags" tag-val="*">
		    				<span>All</span><span class="num-tag label label-primary">116</span>
		    			</li>
		    			<li class="tags" tag-val="water">
		    				<span>Water</span><span class="num-tag label label-primary">26</span>
		    			</li>
		    			<li class="tags" tag-val="electricity">
		    				<span>Electricity</span><span class="num-tag label label-primary">66</span>
		    			</li>
		    			<li class="tags" tag-val="transportation">
		    				<span>Transportation</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val="telecom">
		    				<span>Telecom</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val="sanitation">
		    				<span>Sanitation</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val="recreation">
		    				<span>Recreational Facility</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val="civicAdministration">
		    				<span>Civic Administration</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val="judicial">
		    				<span>Judicial</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val="police">
		    				<span>Police</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val="municipal">
		    				<span>Municipality</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val="healthAndMedicine">
		    				<span>Health and Medicine</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    			<li class="tags" tag-val="food">
		    				<span>Food</span><span class="num-tag label label-primary">40</span>
		    			</li>
		    		</ul>
		    	</div>
	    		<div class="middle col-xs-10 col-md-10 col-lg-10">
		    		<div class="center">
		    			<div class="container">
		    				<div class="row">
		    					<h1 style="text-align:center;text-align: center;margin-bottom: 25px;font-family: lato;">Main title of the page</h1>
		    				</div>
		    				<h4 class="upvotes" style="font-family:lato;margin-bottom:5px;display:inline;"><span class="glyphicon glyphicon-thumbs-up"></span> 4153</h4>
		    				<h4 class="upvotes" style="font-family:lato;margin-bottom:5px;"><span class="glyphicon glyphicon-minus-sign"></span> Report Abuse</h4>
		    				<div class="row detailData">
		    					<div class="leftDetails col-xs-6 col-md-8 col-lg-8">
		    						<div class="row img-thumbnail" style="width:100%;">
								        <div class="titleMedia">
								        	<img src="https://s3.amazonaws.com/ksr/projects/687549/photo-main.jpg?1380036872" style="height:440px !important;display: block;margin-left: auto;margin-right: auto;">
								        </div>
		    						</div>
		    						<div class="row img-thumbnail">
								        <div class="content" style="text-align:justify;width:95%;margin: 15px;">
								        	<h2 style="font-family:lato;">Big and descriptive title of this particular problem</h2>
								        	<div class="description" style="font-family:tahoma;">
								        		<p>
								        			VIT University sets a dangerous precedent by dismissing two female students for the very act of asking their peers' opinions concerning gender discrimination and safety on campus.  Moreover, gender-specific restrictions at VIT and other private universities put Indian women at an educational disadvantage relative to those at more egalitarian universities, which may limit their career opportunities and pose disadvantages when applying to graduate schools. 
								        		</p>
								        		<p>
								        			VIT University (Tamil Nadu, India) has more than 20,000 students and ranks high among private Indian universities.  In committing publicly to the principles and practice of gender equality, VIT could well drive a progressive shift in policies and attitudes toward women across Indian universities, and ultimately, Indian society. 
								        		</p>
								        		<p>
								        			[UPDATE, 21 October 2013: VIT University has fired Professor Ted Moallem, author of this petition. Students who met with him recently have been interrogated by VIT administrators. Most VIT students are too afraid to speak out.  Please, let us take heed and address this now.  India deserves better!]
								        		</p>
								        		<p>
								        			[UPDATE, 24 October 2013:  I am required to meet with Vellore police for the third day running. My movement is restricted, my plan to attend an event in Hyderabad tomorrow is "not permitted".  The police have visited the homes and questioned the families of my co-worker, one of my students, and the owner of the house where I am staying.  All are terrified.] 
								        		</p>
								        		<p>
								        			[UPDATE, 8 November 2013:  Both women have now returned to campus, though VIT officials have yet to provide any written indication of the basis for their dismissal or the conditions for their return.  Ted Moallem has returned to the U.S. following VIT's annulment of his work visa.  In response to recent public attention, VIT announced that Hostel ID cards, currently carried by female students only, will soon be replaced by electronic equivalent. However, the University has made no move to reduce discrimination against female students or to encourage/tolerate public discussion of university policies.] 
								        		</p>
								        		<p>
								        			Female VIT students only, upon exiting VIT campus (e.g., to visit street vendors) must undergo fingerprint scanning and submit to security guards a special "hostel ID card", issued to women only. Upon re-entry to campus, their fingerprint is scanned again as they collect their hostel ID.  These measures serve as a general deterrent, discouraging females from exiting the campus for any reason, and in complying with them, female students must queue at the campus gates, abasing themselves before their male peers, who can simply show standard ID and walk freely in and out of campus.
													Female VIT students are, by default, not allowed to leave the campus during weekends, holidays, or campus festivals, but must formally request permission of hostel officials, who may grant or deny permission at their discretion.  Male students have no such regulations.
													These rules are but two examples, and we are not advocating changes to individual rules. Rather, we strongly encourage VIT University to commit publicly to guiding principles of gender equality and gender-neutral governance. We recognize that this will constitute a great step forward for a private university in southern India today. In the process, VIT stands to gain the genuine respect and public admiration of top-rated, forward-thinking academic institutions and prospective employers worldwide.
								        		</p>
								        	</div>
								        </div>
		    						</div>
		    					</div>
		    					<div class="rightDetails col-xs-6 col-md-4 col-lg-4">
		    						<div class="row">
								        <div class="ownerDetails img-thumbnail">
								        	<div class="matter" >
									        	<div class="ownername" style="font-size:20px;"></div>
									        	<div class="owneremail" style="font-size:16px;"></div><br>
									        	<div class="ownerrating label label-success" style="font-size: 14px;position: relative;top: 5px;font-family:tahoma">100</div>
								        	</div>
								        	<img data-src="holder.js/100x100" class="profileImg img-circle" alt="100x100" style="width: 100px; height: 100px;" src="">
								        </div>
		    						</div>
		    						<div class="row">
								        <div class="prolemDetails">
								        	<div class="problemlocation  img-thumbnail">
								        		<div id="map-canvas"></div>
								        	</div>
								        </div>
		    						</div>
		    						<div class="row img-thumbnail" style="width:310px;">
		    							<div class="tagBox" style="/*margin: 10px 5px 15px 6px;*/margin-bottom:15px;text-align: center;">
		    								<div style="width:100%;background:#323b44;opacity:0.91;height: 35px;color: #fff;">
		    									<span style="font-size:20px;font-family: lato;">Categories</span>
		    								</div>
		    								<br><br>
		    								<span class="label label-success tag" data-filter=".funny">Funny</span>
							          		<span class="label label-success tag" data-filter=".motivational">Motivational</span>
							          		<span class="label label-success tag" data-filter=".javascript">Javascript</span>
							          		<span class="label label-success tag" data-filter=".javascript">Javascript</span>
							          		<span class="label label-success tag" data-filter=".startup">StartUp</span>
							          		<span class="label label-success tag" data-filter="*">All</span>
		    							</div>
		    						</div>
		    						<div class="row img-thumbnail" style="width: 310px;">
		    							<div class="statusBox" style="/*margin: 10px 5px 15px 6px;*/margin-bottom:15px;text-align:center">
		    								<div style="width:100%;background:#323b44;opacity:0.91;height: 35px;color: #fff;">
		    									<span style="font-size:20px;font-family: lato;">Status</span>
		    								</div>
		    								<br><br>
		    								<button class="btn btn-danger btn-lg">Not Solved Yet</button>
		    							</div>
		    						</div>
		    						<div class="row img-thumbnail" style="width: 310px;">
		    							<div class="shareBox" style="/*margin: 10px 5px 15px 6px;*/margin-bottom:15px;text-align:center">
		    								<div style="width:100%;background:#323b44;opacity:0.91;height: 35px;color: #fff;">
		    									<span style="font-size:20px;font-family: lato;">Share</span>
		    								</div>
		    								<br><br>
		    								<!--<a href="#" class="btn btn-facebook" role="button">f Share</a> <a href="#" class="btn btn-google" role="button"><img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/></a>-->
		    								<!-- I got these buttons from simplesharebuttons.com -->
											<div id="share-buttons">

												<!-- Facebook -->
												<a href="http://www.facebook.com/sharer.php?u=http://css3gen.com/text-shadow/" target="_blank"><img width="40" src="http://www.simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a>

												<!-- Twitter -->
												<a href="http://twitter.com/share?url=http://www.simplesharebuttons.com&text=Simple Share Buttons" target="_blank"><img width="40" src="http://www.simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>

												<!-- Google+ -->
												<a href="https://plus.google.com/share?url=http://www.simplesharebuttons.com" target="_blank"><img width="40" src="http://www.simplesharebuttons.com/images/somacro/google.png" alt="Google" /></a>

											</div>
		    							</div>
		    						</div>
		    					</div>
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
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
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
		    $('.owneremail').html(email_id);
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
			        $('.ownername').html(profile.displayName);
			        $('.profileImg').attr('src',profile.image.url);
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
		$(window).load(function(){
            $(".navList").mCustomScrollbar({
	            scrollInertia: 150
	        });
            $(".detailData").mCustomScrollbar({
	            scrollInertia: 150
	        });
        });


		function loadMap() {
		  	var myLatlng = new google.maps.LatLng(-34.397, 150.644);
		  	var mapOptions = {
		    	zoom: 8,
		    	center: myLatlng,
		    	mapTypeId: google.maps.MapTypeId.ROADMAP
		  	};
		  	var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
		  	var marker = new google.maps.Marker({
			    position: myLatlng,
			    map: map,
			    title:"Problem Location!"
			});
		}

		google.maps.event.addDomListener(window, 'load', loadMap);
	});
</script>
</body>
</html>