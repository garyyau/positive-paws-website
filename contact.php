<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Positive Paws - We're Positive Your Paws Will Be Happy With Us!</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/css-overload.css" rel="stylesheet">
  </head>

  <body>
		
		<!-- Navigation Menu
		================================================== -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			
      <div class="container">
				
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="img/brand_logo-header.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="about.html">About</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
              <ul class="dropdown-menu">
								<li><a href="services.html">How It Works</a></li>
								<li class="divider"></li>
                <li><a href="dogwalking.html">Dog Walking</a></li>
                <li><a href="petsitting.html">Pet Sitting</a></li>
              </ul>
            </li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
				
      </div>
			
    </nav>
		<!-- End Navigation Menu -->
		

    <!-- Page Content -->

    <!-- Container: Main Content
		================================================== -->
    <div class="container">

			<!-- Row: Page Header/Breadcrumb -->
      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">Contact <small>We'd Love to Hear From You!</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact</li>
          </ol>
        </div>

      </div>
			
			
			<!-- Row: Google Map -->
			<div class="row">
        
        <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Positive+Paws,+Gaston+Street,+Vancouver,+BC&amp;aq=0&amp;oq=Positive+Paws+&amp;sll=54.112352,-126.555646&amp;sspn=22.711901,57.084961&amp;ie=UTF8&amp;hq=Positive+Paws,&amp;hnear=Gaston+St,+Vancouver,+Greater+Vancouver,+British+Columbia+V5R+6G4&amp;t=m&amp;ll=49.236976,-123.030474&amp;spn=0.006295,0.006295&amp;output=embed"></iframe>
        </div>

      </div>
      
			
			<!-- Row: Contact Form -->
      <div class="row">

        <div class="col-sm-8">
          <h3>Let's Get In Touch!</h3>
          <p>We're happy to answer any questions or concerns you have about any of our services, as well as book you in for you and your pet's first free consultation! Already like the services you've seen? Then contact us through email or phone to book your appointment now! We'll get back to each and everyone of our customers with efficiency so that you can begin planning out a schedule for both you and your loving pet.</p>
					<?php  
		
										// check for a successful form post  
										if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
							
										// check for a form error  
										elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  
		
					?>
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Name</label>
	                <input type="text" name="contact_name" class="form-control" id="input1">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email Address</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Phone Number</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Message</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">Submit</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Positive Paws</h3>
          <h4>Dog Walking & Pet Sitting</h4>
          <p>
            5189 Gaston Street. Suite 413<br>
            Vancouver, British Columbia<br>
						V5R 6C7, Canada<br>
          </p>
          <p><i class="fa fa-phone"></i> <strong>Phone:</strong> (778) 861-2248</p>
          <p><i class="fa fa-envelope-o"></i> <strong>Email:</strong> info@positivepaws.ca</p>
          <p><i class="fa fa-clock-o"></i> <strong>Hours:</strong> Everyday: 9:00 AM - 9:00 PM</p>
					<p><strong>Service Area:</strong> Renfrew-Collingwood</p>
        </div>

      </div>

    </div>
		<!-- End Container: Main Content -->

		
    <!-- Container: Copyright & Social -->
    <div class="container">

      <footer>
        <div class="row">
					<div class="col-lg-9 col-md-9 copyright-col">
							<span class="copyright">Copyright &copy; 2014 <a href="http://www.positivepaws.ca/">Positive Paws</a> / All rights reserved.</span>
					</div>
					<div class="col-lg-3 col-md-3">
						<a href="https://www.facebook.com/positivepawsvancouver" class="tooltip-footer" target="_blank"><img src="img/icon_mini-facebook.png" class="social-icon" data-toggle="tooltip" data-placement="top" title="Find us on Facebook!"></a>
						<a href="https://twitter.com/PositivePawsVan" class="tooltip-footer" target="_blank"><img src="img/icon_mini-twitter.png" class="social-icon" data-toggle="tooltip" data-placement="top" title="Find us on Twitter!"></a>
						<a href="http://www.positive-paws.blogspot.ca/" class="tooltip-footer" target="_blank"><img src="img/icon_mini-blogger.png" class="social-icon" data-toggle="tooltip" data-placement="top" title="Find us on BLogger!"></a>
						<a href="http://www.yelp.com/biz/positive-paws-vancouver-2" class="tooltip-footer" target="_blank"><img src="img/icon_mini-yelp.png" class="social-icon" data-toggle="tooltip" data-placement="top" title="Find us on Yelp!"></a>
					</div>
				</div>
      </footer>

    </div>
		<!-- End Container: Copyright & Social -->
		

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

  </body>
</html>
