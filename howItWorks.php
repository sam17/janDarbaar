<html>
<head>
	<title>janDarbaar</title>
	<link rel="icon" type="image/png" href="images/jd-fav.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
	<link href="css/dropzone.css" rel="stylesheet" type="text/css" />
	<link href="css/typeahead.css" rel="stylesheet" type="text/css" />
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
		.leftSideBar .row{
			margin-left: 0px;
			margin-right: 0px;
		}
		.navList{
			list-style: none;
			width: 100%;
			-webkit-padding-start: 20px;
			position: relative;
			margin-top: 36px;
			max-height: 400px;
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
			overflow-y: hidden;
			height: 95% !important; /* fallback if needed */
  			height: calc(100% - 65px) !important;
		}
		.detailData{

		}
		#containerBody{
			height: 100% !important; /* fallback if needed */
  			/*height: calc(100% - 5px) !important;*/
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
			background: #ccc;
			cursor: pointer;
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
	    }
	    .content{
	    	width: 100%;
	    	margin-top: 20px;
	    }
	    .tag{
	    	text-align: left;
	    }
	    .row{
	    	margin-right: 0px;
	    	margin-left: 0px;	 
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
	                <li><a href="/browse"><span class="glyphicon glyphicon-th"></span>  Browse</a></li>
	                <li><a href="/complaint"><span class="glyphicon glyphicon-edit"></span>  Complaint</a></li>
	                <li><a href="/profile"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
	                <li class="active"><a href="/howItWorks"><span class="glyphicon glyphicon-info-sign"></span>  How-It-Works</a></li>
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
		    	<div class=" col-xs-2 col-md-1 col-lg-1">
		    		
		    	</div>
	    		<div class="middle col-xs-10 col-md-10 col-lg-10">
		    		<div class="center">
		    			<div class="container" style="margin-bottom:20px;">
		    				<div class="row">
		    					<div class="col-xs-1 col-md-1 col-lg-1">

		    					</div>
		    					<div class="col-xs-10 col-md-10 col-lg-10">
		    						<h2 style="text-align:center;margin-bottom: 26px;">How It Works</h2>
		    						<h4>What is Jan-Darbaar?</h4>
									<p style="margin-bottom:20px;">Jan Darbaar will change how problems in an Indian society are perceived by the concerned authorities speeding up the process of action taken against them bringing them to the eyes of general public through social media.</p>

									<h4 style="margin-bottom: 25px;">7 things to know about Jan-Darbaar:</h4>

				    					<div style="margin-left:30px;">
											<p><b>1. Jan-Darbaar is a new way to lodge complaints.</b><br><br>
											We are a pool of all problems across the country with geographical tagging on everything in an Indian society ranging from child welfare, backward class welfare, public works, law and order, Disaster management and environment.</p>

											<p><b>2. Each complaint is authentic.</b><br><br>
											Each complaint lodged on Jan darbaar has to be supported by videos or photos along with a proper description of the problem giving the geographical location and </p>

											<p><b>3. Together people make complaints Stronger.</b><br><br>
											Each complaint can be shared using social medias like google+, Facebook and Twitter where people can upvote the complaints supporting it making the problem more popular and giving them more priority.</p>

											<p><b>4. Public Activism have solved many problems in the past.</b><br><br>
											Indian public has often shown activism on social media which have popularized problems of the society which were often neglected causing the problems to be solved at a faster pace than usual.</p>

											<p><b>5.Claimants can mark the Problem as Solved.</b><br><br>
											The claimant of a complaint has the power to mark as a problem solved if he/she thinks it has been corrected and no longer needs to be shared or popularised.</p>

											<p><b>6. Upvoting Complaints is more than just supporting a problem.</b><br><br>
											More number of upvotes bring the problem to public attention so that they catch the eyes of more number of people making you a responsible citizen of the society whose fundamental duty includes helping the authorities to work for the well being of the society.</p>

											<p><b>7. Our mission is to help bring problems to the Public Eye.</b><br><br>
											We are an independent group of 3 students who only want to generate awareness among people on the problems of the society and to inculcate the habit of being an active citizen of the society. This is a completely non-profit initiative.
											We believe that it is the fundamental duty of a person to help the authorities to know the problems in a society and sharing the problem generates an awareness bringing quick solutions to the problems.</p>
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
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript">
	$(window).load(function(){
        $(".center").mCustomScrollbar({
            scrollInertia: 150
        });
    });
	</script>
</body>
</html>