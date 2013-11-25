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
	    /*Leave this here*/
	    .dropzone .dz-default.dz-message{
	    	background-image: url("images/spritemap.png");
	    }
	    @media all and (-webkit-min-device-pixel-ratio:1.5),(min--moz-device-pixel-ratio:1.5),(-o-min-device-pixel-ratio:1.5/1),(min-device-pixel-ratio:1.5),(min-resolution:138dpi),(min-resolution:1.5dppx) {
		  .dropzone .dz-default.dz-message {
		    background-image: url("images/spritemap@2x.png");
		  }
		}
		.dropzone .dz-preview .dz-error-mark,
		.dropzone-previews .dz-preview .dz-error-mark,
		.dropzone .dz-preview .dz-success-mark,
		.dropzone-previews .dz-preview .dz-success-mark {
		  background-image: url("images/spritemap.png");
		}
		@media all and (-webkit-min-device-pixel-ratio:1.5),(min--moz-device-pixel-ratio:1.5),(-o-min-device-pixel-ratio:1.5/1),(min-device-pixel-ratio:1.5),(min-resolution:138dpi),(min-resolution:1.5dppx) {
		  .dropzone .dz-preview .dz-error-mark,
		  .dropzone-previews .dz-preview .dz-error-mark,
		  .dropzone .dz-preview .dz-success-mark,
		  .dropzone-previews .dz-preview .dz-success-mark {
		    background-image: url("images/spritemap@2x.png");
		  }
		}
		.dropzone .dz-preview .dz-progress .dz-upload,
		.dropzone-previews .dz-preview .dz-progress .dz-upload {
		  background-image: url("images/spritemap.png");
		}
		@media all and (-webkit-min-device-pixel-ratio:1.5),(min--moz-device-pixel-ratio:1.5),(-o-min-device-pixel-ratio:1.5/1),(min-device-pixel-ratio:1.5),(min-resolution:138dpi),(min-resolution:1.5dppx) {
		  .dropzone .dz-preview .dz-progress .dz-upload,
		  .dropzone-previews .dz-preview .dz-progress .dz-upload {
		    background-image: url("images/spritemap@2x.png");
		  }
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
	                <li><a href="/browse"><span class="glyphicon glyphicon-th"></span>  Browse</a></li>
	                <li class="active"><a href="/complaint"><span class="glyphicon glyphicon-edit"></span>  Complaint</a></li>
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
    	<div class="row" style="margin-top:10px;">
    		<div class="col-xs-2 col-md-1 col-lg-1">

    		</div>
    		<div class="alert-row col-xs-10 col-md-10 col-lg-10">

    		</div>
    	</div>
	    	<div class="row">
		    	<div class=" col-xs-2 col-md-1 col-lg-1">
		    		
		    	</div>
	    		<div class="middle col-xs-10 col-md-10 col-lg-10">
		    		<div class="center">
		    			<div class="container" id="containerBody">
		    				<div class="row">
		    					<h1 style="text-align:center;text-align: center;margin-bottom: 25px;padding-left: 15px;padding-right: 45px;">
		    						<input type="text" class="form-control input-lg" name="mainTitile" placeholder="Main title of the page">
		    					</h1>
		    				</div>
		    				<div class="row detailData">
		    					<div class="leftDetails col-xs-6 col-md-8 col-lg-8">
		    						<div class="row img-thumbnail" style="width:100%;">
								        <div class="titleMedia" title="Click to Upload Image">
								        	
								        </div>
								        <input type="file" id="mediaInput" style="display:none">
		    						</div>
		    						<div class="row img-thumbnail">
								        <div class="content" style="text-align:justify;width:95%;margin: 15px;">
								        	<h2><input type="text" class="form-control input-lg" name="descTitile" placeholder="Big and descriptive title of this particular problem...."></h2>
								        	<div class="description">
								        		<textarea id="editorContent"></textarea>
								        	</div>
								        </div>
		    						</div>
		    					</div>
		    					<div class="rightDetails col-xs-6 col-md-4 col-lg-4">
		    						<div class="row">
								        <div class="ownerDetails img-thumbnail">
								        	<div class="matter" >
									        	<div class="ownername" style="font-size:20px;">Nadeem Shaik</div>
									        	<div class="owneremail" style="font-size:16px;">nadeemskv@gmail.com</div><br>
									        	<div class="ownerrating label label-success" style="font-size: 14px;position: relative;top: 5px;">100</div>
								        	</div>
								        	<img data-src="holder.js/100x100" class="profileImg img-circle" alt="100x100" style="width: 100px; height: 100px;" src="https://lh5.googleusercontent.com/-Anve75wcvEk/AAAAAAAAAAI/AAAAAAAAAEc/ZB-_6lnVw2o/s120-c/photo.jpg">
								        </div>
		    						</div>
		    						<div class="row">
								        <div class="prolemDetails">
								        	<div class="problemlocation  img-thumbnail">
								        		<input id="pac-input" class="controls" type="text" placeholder="Search Box">
								        		<div id="map-canvas"></div>
								        	</div>
								        </div>
		    						</div>
		    						<div class="row img-thumbnail" style="width:310px;">
		    							<div class="tagBox" style="/*margin: 10px 5px 10px 6px;*/margin-bottom: 15px;text-align: center;">
		    								<div style="width:100%;background:#344;height: 35px;color: #fff;">
		    									<span style="font-size:20px;font-family: lato;">Categories</span>
		    								</div>
		    								<br><br>
		    								<div id="tags_list" style="padding: 20px;text-align: center;width: 300px;">

							          		</div>
		    								<input type="text" name="tags" class="form-control input-lg typeahead categories" placeholder="Type in the categories" autocomplete="off" >
		    							</div>
		    						</div>
		    					</div>
		    				</div>
		    				<div class="row" style="margin-top:20px;margin-bottom:20px;text-align:center">
		    					<button class="btn btn-danger btn-lg" style="width:40%;margin-bottom:20px;" id="submit_complaint">Submit Complain</button>
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
	<script src="js/dropzone.js"></script>
	<script src="js/ckeditor.js"></script>
	<script src="js/typeahead.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
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

		$('.titleMedia').click(function () {
			$('#mediaInput').click();
		});

		var evtData = null, img_links= [];

		$("#mediaInput").change(function(){
		    showFIle(this);
		});

		function showFIle(input){
	        var file = input.files[0];
	        var reader = new FileReader();
	        reader.onload = function(e){
	          $('.titleMedia').html('<img class="img-thumbnail" width="200" style="margin:10px;position: relative;left: 50%;margin-left: -100px;top: 25%;"  src="'+e.target.result+'">');
	        }
	        evtData = input;
	        reader.readAsDataURL(input.files[0]);
      	}

		function uploadFile(evt, callback) {
	        gapi.client.load('drive', 'v2', function() {
	          var file = evt.files[0];
	          insertFile(file, callback);
	        });
	    }

	      /**
	       * Insert new file.
	       *
	       * @param {File} fileData File object to read data from.
	       * @param {Function} callback Function to call when the request is complete.
	       */
	      function insertFile(fileData, callback) {
	        const boundary = '-------314159265358979323846';
	        const delimiter = "\r\n--" + boundary + "\r\n";
	        const close_delim = "\r\n--" + boundary + "--";

	        var reader = new FileReader();
	        reader.readAsBinaryString(fileData);
	        reader.onload = function(e) {
	          var contentType = fileData.type || 'application/octet-stream';
	          var metadata = {
	            'title': fileData.name,
	            'mimeType': contentType
	          };

	          var base64Data = btoa(reader.result);
	          var multipartRequestBody =
	              delimiter +
	              'Content-Type: application/json\r\n\r\n' +
	              JSON.stringify(metadata) +
	              delimiter +
	              'Content-Type: ' + contentType + '\r\n' +
	              'Content-Transfer-Encoding: base64\r\n' +
	              '\r\n' +
	              base64Data +
	              close_delim;

	          var request = gapi.client.request({
	              'path': '/upload/drive/v2/files',
	              'method': 'POST',
	              'params': {'uploadType': 'multipart'},
	              'headers': {
	                'Content-Type': 'multipart/mixed; boundary="' + boundary + '"'
	              },
	              'body': multipartRequestBody});
	          var cb = function(file){
	          		 img_links.push(file.webContentLink);
	               console.log(file);
	               console.log('just added file name: ' + file.webContentLink);
	               if(callback)
	               	callback();	               
	          };
	          request.execute(cb);
	          // if (!callback) {
	          //   callback = function(file) {
	          //     img_links.push(file.webContentLink);
	          //     console.log(file)
	          //   };
	          // }
	          // request.execute(callback);
	        }
	      }

		$(function(){

			$(window).load(function(){
	            $(".navList").mCustomScrollbar({
	            	scrollInertia: 150
	            });
	            $("#containerBody").mCustomScrollbar({
	            	scrollInertia: 150,
				    advanced:{
				        updateOnContentResize: true
				    }
				});
	        });

	        var positionLL = "";
	        var tags = [],tag;

	        $(document).keypress(function(e) {
			    if(e.which == 13  && $('input[name="tags"]').val() != "") {
			    	tag = $('input[name="tags"]').val();
			    	tags.push(tag);
			    	$('#tags_list').append('<span class="label label-success tag canSelect" data-filter="'+tag+'">'+tag+'</span>');
			    }
			});

	        $('#submit_complaint').click(function () {

		        var title = $('input[name="mainTitile"]').val();
		        // if(title == ""){
		        // 	$('.alert-row').html('<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Alert! </strong> Fill in the Main title</div>');
		        // 	return;
		        // }
		        var sub_title = $('input[name="descTitile"]').val();
		        // if(sub_title == ""){
		        // 	$('.alert-row').html('<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Alert! </strong> Fill in the Sub title</div>');
		        // 	return;
		        // }
	        	var location = positionLL;
	        	if(location == ""){
		        	$('.alert-row').html('<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Alert! </strong> Please select the problem location on the map</div>');
		        	return;
		        }
		        var content = CKEDITOR.instances.editorContent.getData();
		        // alert(content);
		        if(content == "" || content.length < 150){
		        	$('.alert-row').html('<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Alert! </strong> Complaint description is too short</div>');
		        	return;
		        }

				if(tags == []){
		        	$('.alert-row').html('<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Alert! </strong> Please specify the category of the complaint</div>');
		        	return;
		        }

		        if(evtData == null){
		        	$('.alert-row').html('<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Alert! </strong> Please provide some pictures.</div>');
		        	return;
		        }
		        uploadFile(evtData, function(){
			        var tags_json = JSON.stringify(tags);
			        var img_links_json = JSON.stringify(img_links);
		        	// var loc = [location.ob, location.pb]
		        	$.ajax({
				        type: 'GET',
				        url: '/post_complaint',
				        async: false,
				        dataType: 'html',
				        data: { email:email, name: user.displayName, user_id:user.id, title: title, lat: location.ob, lon: location.pb, subtitle: sub_title, content: content, tags: tags_json, img_links: img_links_json },
				        success: function(result) {
				          console.log(result);
				        },
				        error: function(e) {
				          console.log('error');
				        }
				    	});
		        });
		        // var loc = [location.ob, location.pb]
	      //   	$.ajax({
			    //     type: 'GET',
			    //     url: '/post_complaint',
			    //     async: false,
			    //     dataType: 'html',
			    //     data: { user_id:user.id, title: title, glat: location.ob, glon: location.pb, subtitle: sub_title, content: content, tags: tags_json, img_links: img_links_json },
			    //     success: function(result) {
			    //       console.log(result);
			    //     },
			    //     error: function(e) {
			    //       console.log('error');
			    //     }
			    // });
	        });


	        $('.categories.typeahead').typeahead({                                   
			  name: 'categories',                                                             
			  local: ["Water","Electricity","Municipality","Transportation","Telecom","Sanitation","Judicial"],
			  limit:4
			});

	        CKEDITOR.replace( 'editorContent' , {
			    language: 'en'
			});

			// CKEDITOR.editorConfig = function( config ) {
			//     config.language = 'hi';
			// };

			function loadMap() {
			  	var myLatlng = new google.maps.LatLng(-34.397, 150.644);
			  	var markers = [];
			  	var mapOptions = {
			    	zoom: 8,
			    	mapTypeId: google.maps.MapTypeId.ROADMAP
			  	};
			  	var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
			  	var marker = new google.maps.Marker({
				    position: myLatlng,
				    map: map,
				    title:"Problem Location!"
				});
				var defaultBounds = new google.maps.LatLngBounds(
				    new google.maps.LatLng(-33.8902, 151.1759),
				    new google.maps.LatLng(-33.8474, 151.2631));
				map.fitBounds(defaultBounds);

				// Create the search box and link it to the UI element.
				var input = /** @type {HTMLInputElement} */(
				    document.getElementById('pac-input'));
				map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

				var searchBox = new google.maps.places.SearchBox(
				  /** @type {HTMLInputElement} */(input));

				// Listen for the event fired when the user selects an item from the
				// pick list. Retrieve the matching places for that item.
				google.maps.event.addListener(map, 'click', function(event) {
					marker.setMap(null);
				    marker = new google.maps.Marker({position: event.latLng, map: map});
				    positionLL = event.latLng;
				    
				});

				google.maps.event.addListener(searchBox, 'places_changed', function() {
				  	var places = searchBox.getPlaces();

				  	for (var i = 0, marker; marker = markers[i]; i++) {
				    	marker.setMap(null);
				  	}

				    // For each place, get the icon, place name, and location.
				    markers = [];
				    var bounds = new google.maps.LatLngBounds();
				    for (var i = 0, place; place = places[i]; i++) {
				      var image = {
				        url: place.icon,
				        size: new google.maps.Size(71, 71),
				        origin: new google.maps.Point(0, 0),
				        anchor: new google.maps.Point(17, 34),
				        scaledSize: new google.maps.Size(25, 25)
				      };

				      // Create a marker for each place.
				      var marker = new google.maps.Marker({
				        map: map,
				        icon: image,
				        title: place.name,
				        position: place.geometry.location
				      });

				      markers.push(marker);

				      bounds.extend(place.geometry.location);
				    }

				    map.fitBounds(bounds);
				});

				// Bias the SearchBox results towards places that are within the bounds of the
				// current map's viewport.
				google.maps.event.addListener(map, 'bounds_changed', function() {
				    var bounds = map.getBounds();
				    searchBox.setBounds(bounds);
				});
			}

			google.maps.event.addDomListener(window, 'load', loadMap);
		});
	</script>
</body>
</html>