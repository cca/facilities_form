<?php include_once "includes/helpers.php"; ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <!--
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        -->
        <link href="/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    </head>
    <body>

	    <nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <a class="navbar-brand" href="#">FACILITIES SERVICES</a>
	        </div>
	        <div class="cca-logo">
				    <i class="icon-c-logo"></i><i class="icon-c-logo"></i><i class="icon-a-logo"></i>
	        </div>
	      </div>
	    </nav>

      <div class="main-container container">
        <div class="row">

          <aside class="region region-sidebar-first col-sm-4" role="complementary">

            <div class="well">
              <h2>About Our Services</h2>
              <div class="about">The Facilities Department provides maintenance, repair, and ancillary services to support teaching, learning, and working within CCA’s built environment. </div>

              <div class="contact">
                <div>
                SUBMIT A SERVICE REQUEST:<br />
								<a href="">facilities.cca.edu</a>
								</div>
								<div>
								EMAIL COMMENTS OR QUESTIONS:<br />
								<a href="">facilities@cca.edu</a>
								</div>
								<div>
								CALL DURING BUSINESS HOURS:<br />
								<a href="">415.551.9300</a>
								</div>
								<div>
								REQUEST EVENT SUPPORT:<br />
								<a href="">https://virtualems.cca.edu</a>
								</div>
								<div>
								LEARN MORE:<br />
								<a href="">cca.edu/facilities</a>
								</div>
							</div>

          </aside>

          <div class="region region-content col-sm-8">

            <h1>Submit a Facilities Service Request</h1>

            <p>To request service or report a maintenance or repair issue, please fill out this form. Provide a clear and concise description. This information will help us in prioritizing our responses. Thank you for contacting the Facilities Department at CCA.</p>

		        <form>
		          <?php 

		          print input("First Name", "text"); 
		          print input("Last Name", "text"); 
		          print input("Email", "email"); 
		          print input("Phone", "text"); 

		          $user_group_array = array("Faculty", "Staff", "Student", "Other");
		          print radio("User Group", $user_group_array);

		          $campus_array = array("Oakland", "San Francisco");
		          print radio("Campus", $campus_array);

		          $oakland_array = array("Avenue Apartments", "B Building", "Barclay Simpson Sculpture Studio", "Blattner Print Studio", "Cafe", "CAPL/ET (5275 Broadway)", "Carriage House", "Clifton Hall", "Counseling Services (5299 College)", "Facilities", "First Year Studios (5288 College)", "Founder's Hall", "Founder's Hall (Meyer Library)", "Irwin Student Center", "Macky Hall", "Martinez Annex", "Martinez Hall", "North/South Galleries", "Oliver Art Center", "Ralls Studio", "Shaklee Building", "Terrace Apartments (4Plex)", "Textiles / L1 - L4 Classrooms (5301 Broadway)", "Treadwell Hall", "Webster Hall");
		          print radio("Oakland Building", $oakland_array);

		          $sf_array = array("Communications", "Hooper I", "Hooper II", "Hooper III", "Kansas 350", "Kansas 360", "Main Building", "Orientations (DeHaro)", "Student Center (80 Carolina)");
		          print radio("San Francisco Building", $sf_array);

		          print input("Area", "text");
		          print input("Title", "text");
		          print textarea("Description");

		          ?>
							<div class="form-actions">
							  <button class="webform-submit button-primary btn btn-primary form-submit" name="op" value="Submit" type="submit">Submit</button>
							</div>
						</form>

        </div><!-- /region-content -->
		  </div><!-- /row -->
		</div><!-- /main-container -->

		<footer class="container">
	    <i class="icon-c-logo"></i><i class="icon-c-logo"></i><i class="icon-a-logo"></i>
		</footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <!--
        <script src="js/plugins.js"></script>
        -->
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        -->
    </body>
</html>
