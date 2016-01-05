<?php
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phoneNumber = strip_tags($_POST['phoneNumber']);
$message = strip_tags($_POST['message']);
$headers = "From: www.kbsoftwaresolutions.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$emailMessage = 
  "<table class='form-email-message'>
      <tr>
        <td>KB Software Solutions</td>
      </tr>
      <tr>
        <td>$message</td>
      </tr>
      <tr>
        <td>From: $name</td>
      </tr>
      <tr>
        <td>Phone Number: $phoneNumber</td>
      </tr>
      <tr>
        <td>Email: $email</td>
      </tr>
    </table>";

$result = mail("jjohnson@ambrosiatc.com", "KB Software Solutions", $emailMessage, $headers);
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KB Software Solutions - Thank you for your message, we appreciate your business.">
    <meta name="author" content="KB Software Solutions">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/kb-favicon.png" />
    <title>KB Software Solutions | Message Received</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/small-business.css" rel="stylesheet">
  </head>

  <body>
    <?php require_once('../template/navbar.html'); ?>
    <a  name="services"></a>
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-sm-6">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h1 class="section-heading text-center">Message Received</h1>
            <hr class="paragraph-divider">
            <h3 class="text-center">Thank you for your interest in KB Software Solutions</h3>
            <h3 class="text-center"><a href="../index.php">Return to Home Page</a></h3>
          </div>
          <div class="col-lg-5 col-lg-offset-2 col-sm-6">
            <img class="img-responsive" src="../img/mail-received.png" alt="">
          </div>
        </div>
        <hr class="paragraph-divider">
      </div>

     <section class="section" id="mail-received">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 half bg">
            <div class="zoom" data-image="img/business-consult-at-your-service.jpg" 
                 data-title="CAM Health Professionals to help your business grow and succeed" 
                 data-caption="Our experienced staff is available to guide any new or existing drug and alcohol facilities to success">
            </div>
          </div>
          <div class="col-lg-6 half">
            <div class="content">
              <div class="section-header">
                <h2 class="section-title">Connect With Us</h2>
              </div>
              <ul class="share-buttons">
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.camhealthpro.com&t=Substance%20Abuse%20Business%20Consulting%20Services" title="Share on Facebook" target="_blank"><img src="img/social/Facebook.png"></a></li>
                <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fwww.camhealthpro.com&text=Substance%20Abuse%20Business%20Consulting%20Services:%20http%3A%2F%2Fwww.camhealthpro.com" target="_blank" title="Tweet"><img src="img/social/Twitter.png"></a></li>
                <li><a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.camhealthpro.com" target="_blank" title="Share on Google+"><img src="img/social/Google+.png"></a></li>
                <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fwww.camhealthpro.com&title=Substance%20Abuse%20Business%20Consulting%20Services&summary=With%20over%2020%20years%20experience%20in%20substance%20abuse%20and%20rehabilitation%2C%20CAM%20Health%20is%20here%20to%20guide%20prospective%20businesses%20to%20success.&source=http%3A%2F%2Fwww.camhealthpro.com" target="_blank" title="Share on LinkedIn"><img src="img/social/LinkedIn.png"></a></li>
                <li><a href="mailto:?subject=Substance%20Abuse%20Business%20Consulting%20Services&body=With%20over%2020%20years%20experience%20in%20substance%20abuse%20and%20rehabilitation%2C%20CAM%20Health%20is%20here%20to%20guide%20prospective%20businesses%20to%20success.:%20http%3A%2F%2Fwww.camhealthpro.com" target="_blank" title="Email"><img src="img/social/Email.png"></a></li>
              </ul>         
              <div class="section-header">
                <h2 class="section-title">Site Directory</h2>
              </div>
              <ul class="list-inline">
                <li>
                  <a href="/index.html">Home</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a href="/index.html#introduction">Our Mission</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a href="/index.html#services">Services</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a href="/index.html#portfolio">Portfolio</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a href="/index.html#about">About</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a href="/index.html#contact">Contact Us</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
              </ul>
              <p class="copyright text-muted medium text-center">Copyright &copy; CAM Health, All Rights Reserved</p>
              <p class="text-center">
                <a href="http://www.kbsoftwaresolutions.com"><img src="img/kb-logo-150x75.png" alt="KB Software Solutions Web Design"/></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /#about -->
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/slide-toggle-nav.js"></script>
  </body>
</html>
