<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Get in Touch | Lyndsey Lewis</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/main.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?Scope+One" rel="stylesheet">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <header class="light">
    <div class="content-wrapper">
      <div class="navigation">
        <figure>
          <a href="../index.html">
            <img src="../img/icons/leaves.png" alt="Lyndsey Lewis logo" />
          </a>
        </figure>
        <span class="navbar-toggle" id="js-navbar-toggle">
          <i class="fas fa-bars"></i>
        </span>
      </div>
      <nav class="menu">
        <ul class="main-nav" id="nav-menu">
          <li class="nav-link"><a href="../index.html">Home</a></li>
          <li class="nav-link"><a href="../portfolio/index.html">Portfolio</a></li>
          <li class="nav-link"><a href="../journal/index.html">Journal</a></li>
          <li class="nav-link"><a href="../about/index.html">About</a></li>
          <li class="nav-link"><a href="../contact/index.html">Contact</a></li>
        </ul>
      </nav> <!-- nav ends -->
    </div> <!-- header content wrapper ends -->
  </header>

  <section class="page-title light">
    <div class="content-wrapper">
        <h1>Get in Touch</h1>
    </div> <!-- skills content wrapper ends -->
  </section> <!-- skills section ends -->

  <section class="contact-page light">
    <div class="content-wrapper">
      <p>Let’s connect and see how we could work together!</p>
      <div class="contact-content">
        <figure>
          <img src="../img/contact.jpg" alt="Project Image" />
        </figure>
        <div class="contact-form">
          <form method="post" action="send-mail.php">
            <h3>Drop me a line</h3>
            <input type="text" name="name" placeholder="name" required />
            <input type="email" name="email" placeholder="name@email.com" required />
            <textarea name="comments" rows="3" placeholder="message"></textarea>
            <button>Send</button>
          </form>

					<?php
					/* ---------------------------------------------
		   		EMAIL FORM by Josh Hughes (josh@deaghean.com)
		   		Free to use and adjust as needed
		   		--------------------------------------------- */

					/* Load form field data into variables. */
					$to = "lyndsey.a.lewis@gmail.com";
					$from = $_POST['name'] ;
					$email = $_POST['email'] ;
					$subject = "Email Form" /*$from . "would like to connect"*/
					$message = $_POST['message'] ;

					/* Assign  required fields */
					$requiredFields = "";

					/* Make sure a form was submitted */

					if (!$_POST)
						$missingFields = true;
					else
						$missingFields = false;

					/* Check required fields */

					if ((trim($requiredFields) != '') and ($missingFields != true))
					{
						$checkFields = explode(',', $requiredFields);
						for ($i = 0; $i < count($checkFields); $i++)
						{
							if (trim($_POST[trim($checkFields[$i])]) == '')
								$missingFields = true;
						}
					}

					/* If there are missing fields, print an error */

					if ($missingFields)
					{
							print "<p>Please fill out all of the form fields</p>";
					}

					else
					{
						$email = sprintf("From: %s <%s>",$from,$email);
					  $subject = sprintf($subject);

						/* Send the message */

						$success = mail($to, $subject, $message, $email);

						/* Print a success or error message */

						if ($success)
							print "<p>Thanks for your email! I'll get back to you just as soon as I can. My goal is to respond within a day.</p>";
						else
							print "<p>Unfortunately, your email was NOT sent due to a technical malfunction. Please try again.</p>";
					}
					?>


        </div>
      </div>
    </div> <!-- portfolio content wrapper ends -->
  </section> <!-- portfolio section ends -->

  <footer>
    <div class="content-wrapper">
      <div class="copyright">
        <p>Handcrafted with 💖 in Toronto </p>
        <p>© 2019</p>
      </div>
      <div class="social-icons">
        <p><a href="https://instagram.com" target="_blank"><img src="../img/social-icons/instagram.png" alt="instagram logo" /></i></a></p>
        <p><a href="https://facebook.com" target="_blank"><img src="../img/social-icons/facebook.png" alt="facebook logo" /></a></p>
        <p><a href="https://twitter.com" target="_blank"><img src="../img/social-icons/twitter.png" alt="twitter logo" /></a></p>
        <p><a href="https://linkedin.com" target="_blank"><img src="../img/social-icons/linkedin.png" alt="linkedin logo" /></a></p>
        <p><a href="https://github.com" target="_blank"><img src="../img/social-icons/github.png" alt="github logo" /></a></p>
      </div> <!-- social icons ends -->
    </div> <!-- footer content wrapper ends -->
  </footer>


  <script src="../js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="../js/plugins.js"></script>
  <script src="../js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
