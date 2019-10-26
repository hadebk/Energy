
<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Contact Form';
		$to = 'hade.bk.1998@gmail.com';
		$subject = 'Message from website ';

		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Energy | Social Media Agency</title>
  <!-- important metas -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- other metas -->
  <meta http-equiv="cache-control" content="cache" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="title" content="hazzy merch">
  <meta name="description" content="We can change the whole world - Shop with our products and order your product easily">
  <meta name="keywords" content="hazzy,merch,shop,order,t-shirt,hazzy shop,hazzy merch, hazzy merch shop, hazzy shop merch">
  <meta name="robots" content="index, follow">
  <meta name="language" content="English">

  <!-- favicons -->
  <link rel="icon" href="" type="image/x-icon">
  <link rel="shortcut icon" href="" type="image/x-icon">
  <link rel="apple-touch-icon" href="" type="image/x-icon">
  <link rel="apple-touch-icon-precomposed" href="" type="image/x-icon">

  <!-- liberaries and frameworks -->
  <!--==========================================================================================-->
  <link rel="stylesheet" href="OwlCarousel2-2.3.4/owl.carousel.min.css" />
  <!--==========================================================================================-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <!--==========================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!--==========================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--==========================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <!--==========================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--[if lt IE 9]>-->
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
  <!------------->
</head>

<body class="animated fadeIn delay-5s">
  <!-- start main container -->
  <div id="main-box" class="container-fluid">

    <!-- start landing box -->
    <div id="landing-box" class="container-fluid">

      <!-- start navbar -->
      <nav id="navbar-box">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6" id="nav-logo">
              <a><img alt="logo" src="https://www.pmg.com/wp-content/themes/pmg-2018/img/pmg_logo.svg"></a>
            </div>
            <div class="col-lg-10 col-md-10 hidden-sm hidden-xs" id="nav-menu">
              <ul class="nav navbar-nav">
                <li><a class="hvr-underline-from-left" href="#main-box" data-value="main-box">Home</a></li>
                <li><a class="hvr-underline-from-left" href="#profile-box" data-value="profile-box">company profile</a></li>
                <li><a class="hvr-underline-from-left" href="#services-box" data-value="services-box">services</a></li>
                <li><a class="hvr-underline-from-left" href="#clients-box" data-value="clients-box">clients</a></li>
                <li><a class="hvr-underline-from-left" href="#portifilo-box" data-value="portifilo-box">portifilo</a></li>
                <li><a class="hvr-underline-from-left" href="#contactus-box" data-value="contactus-box">contact us</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-xs-6 hidden-lg hidden-md" id="nav-hamburger">
              <img src="images/icons/double-left-chevron.svg"/>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-xs-12 hidden-lg hidden-md" id="nav-menu-mob">
              <ul class="nav">
                <li><a class="hvr-underline-from-left" href="#main-box" data-value="main-box">Home</a></li>
                <li><a class="hvr-underline-from-left" href="#profile-box" data-value="profile-box">company profile</a></li>
                <li><a class="hvr-underline-from-left" href="#services-box" data-value="services-box">services</a></li>
                <li><a class="hvr-underline-from-left" href="#clients-box" data-value="clients-box">clients</a></li>
                <li><a class="hvr-underline-from-left" href="#portifilo-box" data-value="portifilo-box">portifilo</a></li>
                <li><a class="hvr-underline-from-left" href="#contactus-box" data-value="contactus-box">contact us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <!-- start header -->
      <header id="header-box" class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" id="header-text">
            <h1 class="animated fadeInDown delay-5s">SOCIAL MEDIA MARKETING</h1>
            <p class="animated fadeInDown delay-5s">help in market and other place to be on of the must common in the world, help in market and other place to be on</p>
            <button class="hvr-icon-down animated fadeInLeft delay-5s" id="button-more">
              Learn More
              <i class="fa fa-chevron-down hvr-icon" style="margin-left: 5px"></i>
            </button>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" id="header-photo">
            <img src="images/landing-image.png" alt="header image" class="animated fadeInRight delay-5s">
          </div>
        </div>
      </header>

    </div>

    <!-- start profile company -->
    <div id="profile-box" class="container">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" id="profile-photo">
          <img src="images/company-pro.svg" alt="profile image">
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" id="profile-text">
          <h1>PROFILE COMPANY</h1>
          <p>help in market and other place to be on of the must common in the world, help in market and other place to be on help in market and other place to be on of the must common in the world, help in market and other place to be on help in
            market and other place to be on of the must common in the world, help in market and other place to be on help in market and other place to be on of the must common in the world, help in market and other place to be on</p>
        </div>
      </div>
    </div>

    <!-- start services -->
    <div id="services-box" class="container">
      <div class="row">
        <div class="col-lg-12" id="services-titel">
          <h1>SERVICES</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 services-sm-box">
          <div class="services hvr-float-shadow">
            <img src="images/svg/008-social-media.svg" />
            <h3>Digital Marketing</h3>
            <p>help in market and other place to be on of the must common in the world</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 services-sm-box">
          <div class="services hvr-float-shadow">
            <img src="images/svg/009-megaphone.svg" />
            <h3>Digital Marketing</h3>
            <p>help in market and other place to be on of the must common in the world</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 services-sm-box">
          <div class="services hvr-float-shadow">
            <img src="images/svg/010-stadistics.svg" />
            <h3>Digital Marketing</h3>
            <p>help in market and other place to be on of the must common in the world</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 services-sm-box">
          <div class="services hvr-float-shadow">
            <img src="images/svg/006-tags.svg" />
            <h3>Digital Marketing</h3>
            <p>help in market and other place to be on of the must common in the world</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 services-sm-box">
          <div class="services hvr-float-shadow">
            <img src="images/svg/003-digital-marketing.svg" />
            <h3>Digital Marketing</h3>
            <p>help in market and other place to be on of the must common in the world</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 services-sm-box">
          <div class="services hvr-float-shadow">
            <img src="images/svg/004-facebook.svg" />
            <h3>Digital Marketing</h3>
            <p>help in market and other place to be on of the must common in the world</p>
          </div>
        </div>
      </div>
    </div>

    <!-- start get started -->
    <div id="get-started-box" class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" id="get-started-text">
          <h1>GET STARTED NOW AND GROW YOUR BUESSNIS</h1>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" id="get-started-photo">
          <img src="images/undraw_Outer_space_drqu.svg" alt="get started image">
        </div>
      </div>
    </div>

    <!-- start clients -->
    <div id="clients-box" class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" id="clients-titel">
            <h1>CLEINTS</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="hvr-float-shadow cleint-img">
              <img src="images/cleints.png" alt="cleint" />
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="hvr-float-shadow cleint-img">
              <img src="images/cleints.png" alt="cleint" />
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="hvr-float-shadow cleint-img">
              <img src="images/cleints.png" alt="cleint" />
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="hvr-float-shadow cleint-img">
              <img src="images/cleints.png" alt="cleint" />
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="hvr-float-shadow cleint-img">
              <img src="images/cleints.png" alt="cleint" />
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <div class="hvr-float-shadow cleint-img">
              <img src="images/cleints.png" alt="cleint" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- start portifilo -->
    <div id="portifilo-box" class="container">
      <div class="row">
        <div class="col-lg-12" id="portifilo-titel">
          <h1>PORTIFILO</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="portifilo">
            <div class="img"><img src="images/modal.png" /></div>
            <p>STREO</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="portifilo">
            <div class="img"><img src="images/modal.png" /></div>
            <p>STREO</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="portifilo">
            <div class="img"><img src="images/modal.png" /></div>
            <p>STREO</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="portifilo">
            <div class="img"><img src="images/modal.png" /></div>
            <p>STREO</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="portifilo">
            <div class="img"><img src="images/modal.png" /></div>
            <p>STREO</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="portifilo">
            <div class="img"><img src="images/modal.png" /></div>
            <p>STREO</p>
          </div>
        </div>
      </div>
    </div>

    <!-- start contactus -->
    <div id="contactus-box" class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" id="contactus-titel">
            <h1>CONTACT US</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="left">
            <h4>About Company</h4>
            <P>help in market and other place to be on of the must common in the world, help in market and other place to be on help in market and other place to be on of the must common in the world</P>
            <div id="contact">
              <div><span><img src='./images/icons/006-placeholder.svg' alt='location'/></span>Egypt - Tanta</div>
              <div><span><img src='./images/icons/004-email.svg' alt='email'/></span>info@energy.com</div>
              <div><span><img src='./images/icons/005-call.svg' alt='phone'/></span>01022222222</div>
            </div>
            <div id="social-icons">
              <div>
                <div>
                  <a href=""><img src="./images/icons/facebook-logo.svg" alt="facebook"/></a>
                </div>
                <div>
                  <a href=""><img src="./images/icons/003-instagram.svg" alt="instagram"/></a>
                </div>
                <div>
                  <a href=""><img src="./images/icons/001-twitter-logo-button.svg" alt="twittwr"/></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="mid">
            <h4>Useful Link</h4>
            <div id="links">
              <div><a>Profile Company</a></div>
              <div><a>services</a></div>
              <div><a>cleint</a></div>
              <div><a>portifilo</a></div>
            </div>
            <img alt="logo" src="https://www.pmg.com/wp-content/themes/pmg-2018/img/pmg_logo.svg">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="right">
            <h4>Send Us a Message</h4>
            <form role="form" method="post" action="index.php">
              <div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
              </div>
              <div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
              </div>
              <div class="form-group">
								<textarea class="form-control" rows="8" name="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
              </div>
              <button class="lead" type="submit" id="submit" name="submit">
                Send
                <i class="fa fa-chevron-right hvr-icon" style="margin-left: 5px"></i>
              </button>
							<div class="form-group">
								<div>
									<?php echo $result; ?>
								</div>
					    </div>
            </form>
          </div>
        </div><!-- end of 2 row-->
      </div><!-- end of container-->
    </div><!-- end of contactus-box-->
    <div id="copyright" class="container-fluid">
      Copyright Energy<i class="fa fa-copyright"></i><span> 2019. All rights reserved</span>
    </div>

  </div>
  <!-- end main container -->

  <!-- portiflio image modal -->
  <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <img src="" class="imagepreview" style="width: 100%;">
        </div>
      </div>
    </div>
  </div>

  <!--==========================================================================================-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <!--==========================================================================================-->
  <script src="OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
  <!--==========================================================================================-->
  <script src="js/bootstrap.min.js"></script>
  <!--==========================================================================================-->
  <script src="js/jquery.nicescroll.min.js"></script>
  <!--==========================================================================================-->
  <script src="js/main.js"></script>
  <!--==========================================================================================-->
</body>

</html>