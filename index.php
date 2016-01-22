<?php
$feedback = "";

if(isset($_POST['submit'])){
  $name = strip_tags($_POST['name']);
  $email = strip_tags($_POST['email']);
  $telephone = strip_tags($_POST['telephone']);
  $subject = strip_tags($_POST['subject']);
  $message = strip_tags($_POST['message']);
  $headers = "From: www.camhealthpro.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $feedback = "<p class='text-center feedback'>Your message has been received. A CAM Health agent will contact you shortly.</p>";

  $emailMessage = 
    "<table class='form-email-message'>
      <tr>
        <td>New www.camhealthpro.com Message</td>
      </tr>
      <tr>
        <td>Subject: $subject</td>
      </tr>
      <tr>
        <td>Message: $message</td>
      </tr>
      <tr>
        <td>From: $name</td>
      </tr>
      <tr>
        <td>Email: $email</td>
      </tr>
      <tr>
        <td>Telephone: $telephone</td>
      </tr>
    </table>";

  $result = mail("allyson@thelillypad.org", "CAM HEALTH Message", $emailMessage, $headers);
  

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Experienced business consultants providing sound advice to entrepenaurs in the
                                      healthcare and medical industries">
    <meta name="author" content="CAM HEALTH, Palm Beach County">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>CAM HEALTH</title>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
  </head>
  <body class="pt-sans light">
    <div class="loading">
      <span class="fa fa-refresh fa-spin"></span>
    </div>
    <nav class="navbar navbar-abel navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">CAM HEALTH</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <div id="hamburger" class="bg-check navbar-right dark">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="hidden-xs" href="#introduction">Introduction</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#footer">Connect</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section id="intro" class="section color">
      <div class="container-fluid">
        <div class="boxed">
          <?php echo $feedback; ?>
          <div class="header intro">
            <img src="img/cam-logo-1000x400.jpg" alt="Providing professional consultation services to medical suppliers, physicians,
                                                      and entrepreneurs in the healthcare industry" />
          </div>
          <div class="slogan-div" id="slogan">
            <img src="img/cam-slogan-500x100.jpg" class="slogan-img"
                 alt="Specializing in physicians offices and clinics, pharmaceuticals, and medical supplies - guiding new and 
                      existing businesses to success"/>
          </div>
          <a class="discover" href="#introduction">
            <i class="fa fa-angle-double-down"></i>
          </a>
        </div>
      </div>
    </section><!-- /#intro -->
    <section class="section" id="introduction">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 half bg">
            <div  data-image="img/business-plan-consulting-development-2.jpg" data-title="Healthcare and medical industry business consulting
                                                                                        professionals" 
                 data-caption="Consulting for physicians, pharmacies, medical clinics, and substance abuse facilities">
            </div>
          </div>
          <div class="col-lg-6 half">
            <div class="content">
              <div class="section-header">
                <h2 class="section-title">Our Mission</h2>
                <h2 class="section-subtitle">Navigating Healthcare Business</h2>
              </div>
              <p class="text-muted">
                With over 15 years experience in strategic business development, operations management, and marketing tactics, our team has 
                the knowledge and networking skills needed to succeed in  today’s competitive healthcare industry. CAM Health has proven 
                itself unparalleled in establishing new organizations and refining existing businesses. We specialize in 
                healthcare facilities and resources including medical supplies, pharmacy relations, physician's offices and urgent
                care clinics. We also have  
                extensive experience in the mental health and substance abuse industries, helping many new businesses to strengthen 
                their networks and reach their goals. Our vision in navigating business development in the fields of patient care and 
                medical treatment is to convert your potential business ideas into a reality of success. Now is the time to make your mark. 
                Let us help you. 
              </p>
              <p>&nbsp;</p>
              <!-- Button Goes Here -->
            </div>
          </div>
        </div>
      </div>
    </section><!-- /#introduction -->
    <section class="section" id="services">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 half bg">
            <div data-image="img/substance-abuse-business-consultant-2.jpg" 
                 data-title="One on one professional business consultation" data-caption="Receive guidance on opening a new medical
                                                                                 facility or enhancing current healthcare organization.">
            </div>
          </div>
          <div class="col-lg-6 half">
            <div class="content">
              <div class="section-header">
                <h1 class="section-title">Business Consulting Services</h1>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <h2 class="section-subtitle"><i class="fa fa-tasks"></i>Business Planning</h2>
                  <p class="text-muted">
                    According to <a href="https://www.bloomberg.com" target="_blank">Bloomberg</a>, 8 out of 10 entrepreneurs who start businesses fail within the first 18 months. Our team at CAM Health has the professional experience to help prospective businesses overcome the many challenges faced in starting and operating medical and rehabilitation facilities. We are here to walk you through your business agenda and steer you towards success.
                  </p>
                </div>
                <div class="col-sm-6">
                  <h2 class="section-subtitle"><i class="fa fa-video-camera"></i>Branding</h2>
                  <p class="text-muted">
                    An effective brand strategy will establish your identity and set you apart from the competition. Captivating your audience’s attention will attract consumers and build your business. Investing in our services builds a successful business for you.
                    We understand what methods work and what methods don’t. 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /#services -->
    <section class="section" id="services-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 half bg">
            <div data-image="img/networking-and-marketing-2.jpg" 
                 data-title="Networking with healthcare industry leaders and connecting physician's with vital resources" 
                 data-caption="Connect with healthcare leaders, medical suppliers, and pharmaceutical company's to expand your network and
                               increase business">
            </div>
          </div>
          <div class="col-lg-6 half">
            <div class="content">
              <div class="section-header">
                <h1 class="section-title">Business Consulting Services</h1>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <h2 class="section-subtitle"><i class="fa fa-line-chart"></i>Networking</h2>
                  <p class="text-muted">
                    In order for your business to grow rapidly and profitably, you need to master marketing. Our team will lay out the marketing strategies that will benefit your business and produce results. CAM Health will help develop a blueprint for your company as well as network with other physicians, clinics, and pharmacy providers in order to gain a positive rapport and maximize commerce. We have a solid network of  industry leaders to connect with your business.
                  </p>
                </div>
                <div class="col-sm-6">
                  <h2 class="section-subtitle"><i class="fa fa-shield"></i>Legalities &amp; Compliance</h2>
                  <p class="text-muted">
                    Many businesses unknowingly put themselves at risk due to lack of research and understanding of the laws that govern their industry. There are many state and county regulations to consider as an owner of a medical facility or healthcare establishment. Maintaining compliance is crucial. Don’t dive into the deep end without a life preserver – speak to our staff for professional guidance.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section" id="about">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 half bg">
            <div data-image="img/business-consult-at-your-service-2.jpg" 
                 data-title="CAM Health Professionals to help your business grow and succeed in healthcare and medical provider
                             industries" 
                 data-caption="Our experienced staff is available to guide any new or existing medical facility to success">
            </div>
          </div>
          <div class="col-lg-6 half">
            <div class="content">
              <div class="section-header">
                <h1 class="section-title">About Us</h1>
                <h2 class="section-subtitle">Healthcare Business and Marketing Consultants</h2>
              </div>
              <p class="text-muted">
                The CAM Health team has specialized in the fields of substance abuse, medical treatment, and pharmaceuticals for
                a combined 20+ years. We operate in Palm Beach County, Florida and Asheville, North Carolina. We've succeeded
                in starting numerous healthcare and pharmaceutical organizations of our own, and we have an outstanding reputation of 
                guiding other
                businesses to success. We're here to help anyone interested in expanding their medical practice or strengthening their network
                of healthcare professionals. If you enjoy working in the healthcare industry and want to strenghten your business
                efforts, <a href="#contact">Contact CAM Health</a> to see how we can help!<br /><br />
              </p>
              <!-- Photos Go Here -->
            </div>
          </div>
        </div>
      </div>
    </section><!-- /#about -->
    <section class="section" id="contact">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 half maps">
            <div class="map-container">
              <div id="maps"></div>
            </div>
          </div>
          <div class="col-lg-6 half">
            <div class="content">
              <div class="section-header">
                <h1 class="section-title">Contact</h1>
                <h3 class="section-subtitle">For More Information</h3>                
              </div>
              <form method="post" class="form" action="#">
                <div class="form-group">
                  <input class="form-control"  name="name" placeholder="Name" type="text" required/>
                </div>
                <div class="form-group">
                  <input class="form-control"  id="email" name="email" placeholder="Email" type="text" required/>
                </div>
                <div class="form-group">
                  <input class="form-control"  id="telephone" name="telephone" placeholder="Telephone" type="tel" required />
                </div>
                <div class="form-group">
                  <input class="form-control"  id="subject" name="subject" placeholder="Subject" type="text" required/>
                </div>
                <textarea class="form-control"  id="message" name="message" placeholder="Message" rows="6" required></textarea>
                <br />
                <button class="btn btn-dark" name="submit" type="submit">Send message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /#contact -->
    <section class="section" id="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 half bg">
            <div class="zoom" data-image="img/cam-logo-1400x1240.jpg" 
                 data-title="CAM Health Professionals Social Media - Help spread the message of recovery and click to share" 
                 data-caption="Share our services with a friend or family member working in the substance abuse industry">
            </div>
          </div>
          <div class="col-lg-6 half">
            <div class="content">
              <div class="section-header">
                <h2 class="section-title">Share With A Friend</h2>
              </div>
              <ul class="share-buttons">
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.camhealthpro.com&t=Healthcare%20Industry%20Business%20Consulting%20Services" title="Share on Facebook" target="_blank"><img src="img/social/Facebook.png" alt="Professional business consulting team specializing in healthcare and medical"></a></li>
                <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fwww.camhealthpro.com&text=Substance%20Abuse%20Business%20Consulting%20Services:%20http%3A%2F%2Fwww.camhealthpro.com" target="_blank" title="Tweet"><img src="img/social/Twitter.png" alt="Guiding new and existing medical practices to success"></a></li>
                <li><a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.camhealthpro.com" target="_blank" title="Share on Google+"><img src="img/social/Google+.png" alt="Let us guide your new medical organization to success"></a></li>
                <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fwww.camhealthpro.com&title=Healthcare%20Industry%20Business%20Consulting%20Services&summary=With%20over%2020%20years%20experience%20in%20medical%20field%20and%20rehabilitation%2C%20CAM%20Health%20is%20here%20to%20guide%20prospective%20businesses%20to%20success.&source=http%3A%2F%2Fwww.camhealthpro.com" target="_blank" title="Share on LinkedIn"><img src="img/social/LinkedIn.png" alt="Networking
                  with physicians, pharmacies, and clinics to increase business"></a></li>
                <li><a href="mailto:?subject=Substance%20Abuse%20Business%20Consulting%20Services&body=With%20over%2020%20years%20experience%20in%20medical%20field%20and%20rehabilitation%2C%20CAM%20Health%20is%20here%20to%20guide%20prospective%20businesses%20to%20success.:%20http%3A%2F%2Fwww.camhealthpro.com" target="_blank" title="Email"><img src="img/social/Email.png" alt="Healthcare and medical industry business consultants"></a></li>
              </ul>         
              <div class="section-header">
                <h2 class="section-title">Site Directory</h2>
              </div>
              <ul class="list-inline">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a href="#introduction">Our Mission</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a href="#services">Services</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a href="#about">About</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a href="#contact">Contact Us</a>
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
    <nav id="vertical-nav">
      <ul>
        <li><a class="prev inactive"><i class="fa fa-arrow-long-up"></i></a></li>
        <li><a class="next inactive"></a></li>
      </ul>
    </nav><!-- /#vertical-nav -->
    <!-- Scripts -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slippry.min.js"></script>
    <script src="js/background-check.min.js"></script>
    <script src="js/combined.min.js"></script>
  </body>
</html>