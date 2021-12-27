<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Metas -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links -->
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="icofont.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/8130a4426f.js" crossorigin="anonymous"></script>
    <link href="css/slick.css" rel="stylesheet" />
    
    <link href="css/main.css" rel="stylesheet" />
    <!-- Document Title -->
    <title>Matthew McColm | Design, Web, Video</title>
</head>
<body>
<header>
  <?php 
  include_once 'header.php';
  var_dump($_SESSION);
  ?>
    <!-- HERO SECTION -->    
    <div class="container-fluid hero">
      <img src="images/hero.svg" alt="">
      <div class="container">
        <!-- Hero Title -->
        <h1>The Spirit of<br>Design.</h1>
        <!-- Hero Title Info -->
        <p>If you want a custom built website or maybe it's a <br> logo for your business, Your Covered!</p>
        <div class="hero-btns">
          <!-- Hero Btn First -->
          <a data-scroll href="#about-us">More About me</a>
          <!-- Hero Btn Second -->
          <a data-scroll href="#contact-us">Get in Touch.</a>
        </div>
      </div>
    </div>
  </header>
  <!-- SERVICES SECTION -->  
  <section id="about-us" class="services">
    <div class="container-fluid">
      <div class="side-img"> 
        <img src="images/aside.svg" alt="">
      </div>
      <div class="side2-img"> 
        <img src="images/aside2.svg" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-4 service-txt">
            <h2>Anything you need, i’ve got you covered</h2>
            <div class="hero-btns service-btn">
              <a data-scroll href="#contact-us">Get in Touch</a>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="service-box">
              <img src="images/service-icon1.svg" alt="">
              <!-- Service Title -->
              <h3>Web & Graphic<br>Design</h3>
              <!-- Replace Patch to Image Under -->
              <p>A strong brand is what helps set your business apart from the rest. I can help you with developing a brand and website</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="service-box">
              <img src="images/service-icon2.svg" alt="">
              <!-- Service Title -->
              <h3>Video Editing / Colour Grading</h3>
              <!-- Service Info -->
              <p>Whether its a feature film or an advert, I can help you with editing your video to hold it to the highest industry standards.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ABOUT SECTION -->
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-6">
          <img src="images/aboutimg.svg" alt="">
        </div>
        <div class="col-12 col-sm-12 col-lg-6">
          <h5>ABOUT ME</h5>
          <h2>Some Fine<br>Words About Me</h2>
          <!-- Replace About Us Text Under -->
          <p>WEB // GRAPHICS // VIDEO <br> Im a Designer/Developer from Scotland. Im qualified in Adobe Photoshop, Illustrator, Premiere Pro aswell as HTML5 and CSS3.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- PORTFOLIO SECTION -->
  <section id="portfolio" class="portfolio">
    <div class="container-fluid">
      <div class="portfolio-aside">
        <img src="images/aside3.svg" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>See some of my<br>Creative work.</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-4 work-box">
            <div class="photobox photobox_type10">
              <a href="https://www.behance.net/gallery/131543029/The-Classic-Collection">
                <div class="photobox__previewbox">
                  <!-- Replace Patch to Image Under -->
                  <img src="images/1.png" class="photobox__preview" alt="Preview">
                  <!-- Replace Image Title Under -->
                  <span class="photobox__label">The Classic <br> Collection</span>
                </div>
              </a>
              </div>
          </div>
          <div class="col-12 col-lg-4 work-box">
            <div class="photobox photobox_type10">
              <a href="https://www.behance.net/gallery/131706117/Luscious-Landscapes">
                <div class="photobox__previewbox">
                  <!-- Replace Patch to Image Under -->
                  <img src="images/2.png" class="photobox__preview" alt="Preview">
                  <!-- Replace Image Title Under -->
                  <span class="photobox__label">Luscious <br>Landscapes</span>
                </div>
              </a>
              </div>
          </div>
          <div class="col-12 col-lg-4 work-box">
            <div class="photobox photobox_type10">
              <a href="https://www.behance.net/gallery/131707977/Dash-Technologies-Web-Project">
                <div class="photobox__previewbox">
                  <!-- Replace Patch to Image Under -->
                  <img src="images/3.png" class="photobox__preview" alt="Preview">
                  <!-- Replace Image Title Under -->
                  <span class="photobox__label">Dash <br>Technologies</span>
                </div>
                </a>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-4 work-box">
            <div class="photobox photobox_type10">
                <div class="photobox__previewbox">
                  <!-- Replace Patch to Image Under -->
                  <img src="images/4.png" class="photobox__preview" alt="Preview">
                  <!-- Replace Image Title Under -->
                  <span class="photobox__label">Awesome Work</span>
                </div>
              </div>
          </div>
          <div class="col-12 col-lg-4 work-box">
            <div class="photobox photobox_type10">
                <div class="photobox__previewbox">
                  <!-- Replace Patch to Image Under -->
                  <img src="images/5.png" class="photobox__preview" alt="Preview">
                  <!-- Replace Image Title Under -->
                  <span class="photobox__label">Awesome Work</span>
                </div>
              </div>
          </div>
          <div class="col-12 col-lg-4 work-box">
            <div class="photobox photobox_type10">
                <div class="photobox__previewbox">
                  <!-- Replace Patch to Image Under -->
                  <img src="images/6.png" class="photobox__preview" alt="Preview">
                  <!-- Replace Image Title Under -->
                  <span class="photobox__label">Awesome Work</span>
                </div>
              </div>
          </div>
        </div>
        <br>
        <br>
 
  <!-- CONTACT SECTION -->
  <section id="contact-us" class="contact">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h5>CONTACT US</h5>
          <h2>Get in Touch</h2>
        </div>
      </div>
        <form action="contactform.php" method="post">

        <div class="row">

        <div class="col-12 col-lg-6 email">
          <input name="mail" placeholder="Your email" type="email" id="email" pattern=".+@globex.com" size="30" required>
        </div>

        <div class="col-12 col-lg-6 email">
          <input name="subject" placeholder="Subject" type="subject" id="subject"  size="30" required>
        </div>

      </div>

      <div class="row">

        <div class="col-12 message">
          <textarea id="message" name="message" rows="5" cols="1" placeholder="Message here..."></textarea>
        </div>

        <div class="col-12">

        <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LcAYs4dAAAAAI6oZnN1T6urQpXGeRcnkLUcLXha"></div>

          <div class="hero-btns contact-btn">
            <!-- Send Message Btn -->
            <button type="submit" name="submit">Submit</button>
          </div>
        </div>

        </form>
    </div>
  </section>
  <br><br>
  <?php 
  include_once 'footer.php'
  ?>
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/smooth-scroll.min.js"></script>
  <script src="js/main.js"></script>
  <!-- Scripts Ends -->
</body>
</html>