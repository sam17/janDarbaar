<html>
<head>
	<title>janDarbaar</title>
	<link rel="icon" type="image/png" href="/images/jd-fav.png">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link href="/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
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
			background: url('/images/brickwall.png');
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
              	<a class="navbar-brand" href="http://gcdc2013-jan-darbaar.appspot.com/" style="padding: 4;" title="janDarbaar"><img src="/images/jandarbaar-logo.png" style="width: 47;"></a>
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
		    	<div class="col-xs-1 col-md-1 col-lg-1">
		    		<!--<span class="sideTitle">Categories</span>
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
		    		</ul>-->
		    	</div>
	    		<div class="middle col-xs-10 col-md-10 col-lg-10">
		    		<div class="center">
		    			<div class="container">
		    				<div class="row">
		    					<h1 style="text-align:center;text-align: center;margin-bottom: 25px;font-family: lato;">{{ complaint.title }}</h1>
		    				</div>
		    				<h4 class="upvotes" style="font-family:lato;margin-bottom:5px;display:inline;"><span class="glyphicon glyphicon-thumbs-up"></span> {{ complaint.votes }}</h4>
		    				<h4 class="upvotes" style="font-family:lato;margin-bottom:5px;"><span class="glyphicon glyphicon-minus-sign"></span> <a href="#" id="report_abuse_button" catid="{{ complaint.key.id() }}">Report Abuse</a></h4>
		    				<div class="row detailData">
		    					<div class="leftDetails col-xs-6 col-md-8 col-lg-8">
		    						<div class="row img-thumbnail" style="width:100%;">
								        <div class="titleMedia">
								        	<img src="{{ complaint.img_links[0] }}" style="height:440px !important;display: block;margin-left: auto;margin-right: auto;">
								        </div>
		    						</div>
		    						<div class="row img-thumbnail">
								        <div class="content" style="text-align:justify;width:95%;margin: 15px;">
								        	<h2 style="font-family:lato;"> {{ complaint.subtitle }} </h2>
								        	<div class="description" style="font-family:tahoma;">
								        		{{ complaint.content|safe }}
								        	</div>
								        </div>
		    						</div>
		    					</div>
		    					<div class="rightDetails col-xs-6 col-md-4 col-lg-4">
		    						<div class="row">
								        <div class="ownerDetails img-thumbnail">
								        	<div class="matter" >
									        	<div class="ownername" style="font-size:20px;">{{ user.name }}</div>
									        	<div class="owneremail" style="font-size:16px;">{{ user.email }}</div><br>
									        	<div class="ownerrating label label-success" style="font-size: 14px;position: relative;top: 5px;font-family:tahoma">100</div>
								        	</div>
								        	<img data-src="holder.js/100x100" class="profileImg img-circle" alt="100x100" style="width: 100px; height: 100px;" src="{{ user.pic }}">
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
		    								{% for tag in complaint.tags %}
			    								<span class="label label-success tag" data-filter=".{{ tag }}">{{ tag }}</span>
							          		{% endfor %}
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
												<a href="http://www.facebook.com/sharer.php?u=http://gcdc2013-jan-darbaar.appspot.com/details/?={{ complaint.key.id() }}" target="_blank"><img width="40" src="http://www.simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a>

												<!-- Twitter -->
												<a href="http://twitter.com/share?url=http://gcdc2013-jan-darbaar.appspot.com/details/?={{ complaint.key.id() }}&text={{ complaint.title }}" target="_blank"><img width="40" src="http://www.simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>

												<!-- Google+ -->
												<a href="https://plus.google.com/share?url=http://gcdc2013-jan-darbaar.appspot.com/details/?={{ complaint.key.id() }}" target="_blank"><img width="40" src="http://www.simplesharebuttons.com/images/somacro/google.png" alt="Google" /></a>

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
	
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/isotope.min.js"></script>
	<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript">
	var po = document.createElement('script');
    po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/client:plusone.js?onload=render';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);

    var email, user;

	function signinCallback(authResult) {
	  if (authResult['access_token']) {

	    document.getElementById('signinButton').setAttribute('style', 'display: none');
	    
	    gapi.client.load('oauth2', 'v2', function() {
		  gapi.client.oauth2.userinfo.get().execute(function(resp) {
		    // Shows user email
		    email = resp.email;
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
			        user = profile;
			        $('#user').show();
			        $('#username').append(
			            $('<p style="display:inline;margin-right:10px;"><img src=\"' + profile.image.url + '\"></p>'));
			        $('#username').append(profile.displayName);
			    });
	        } else if (authResult['error']) {
	          console.log('There was an error: ' + authResult['error']);			          
	        }
	        console.log('authResult', authResult);
      	});

	  } else if (authResult['error']) {
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

		$('#report_abuse_button').click(function () {
			var catid = $(this).attr('catid');
			$.ajax({
		        type: 'GET',
		        url: '/report',
		        async: false,
		        dataType: 'html',
		        data: { email:email, name: user.displayName, user_id:user.id, complaint_id: catid, pic: user.image.url },
		        success: function(result) {
		          console.log(result);
		        },
		        error: function(e) {
		          console.log(e);
		        }
	    	});
		});

		function loadMap() {
		  	var myLatlng = new google.maps.LatLng({{ complaint.location.lat }}, {{ complaint.location.lon }});
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