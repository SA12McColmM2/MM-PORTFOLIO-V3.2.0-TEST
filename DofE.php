<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="icofont.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/slick.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/8130a4426f.js" crossorigin="anonymous"></script>
    
    <link href="css/main.css" rel="stylesheet" />
    <title> Matthew McColm | Design, Web, Video</title>
</head>
<body>
<?php
  include_once "header.php";
?>
<br><br><br>
<div class="container-fluid hero">
  <img src="images/DofEhero.svg" alt="">
  <div class="container">
    <h1>DofE Bronze:<br>Skills Section.</h1>
    <p class="dofedesc">This page contains work for my Skills Section <br> of the Bronze DofE. Use Get in Touch to contact me.</p>
    <div class="hero-btns">
    <a data-scroll href="index.html#portfolio">Non DofE Work</a>
      <!-- Hero Btn Second -->
      <a data-scroll href="mailto:SA12McColmM2@glow.sch.uk?Subject=DofE Enquiry">Get in Touch.</a>
    </div>
  </div>
</div>
<div class="dofeheader">
<h2>Summary</h2>
<p>For my Skills Section I have set myself the following goals: Create Branding for a mockup company called Camerashack (Responsive Logo, Brand Colours, Typogoraphy, Slogan(s), Products); Create a website for the brand (Responsive Website in English, French and Spanish); Create an eCommerce App Prototype; Create Promotional Advert; and Create Marketing Materials. Sounds like alot of work but this is the stuff that builds a brand, A brand isnt just a logo you know, It is what helps customers identify and relate to a brand.</p>
<br>
<h2>My Work</h2>
<div class="dropdowndofe">
<details>
  <summary>Persona</summary>
     <img src="camerashack/1. Persona/persona.png" alt="Persona"  >
     <br>
</details>
<br>
<details>
  <summary>Branding</summary>
  <br>
  <div class="dofe-subbtns">
    <a data-scroll href="camerashack/2. Branding/Brand identity guidelines.pdf">View Brand Guidlines</a>
  </div>
</details>
<br>
<details>
  <summary>Website</summary>
  <br>
  <div class="dofe-subbtns">
    <a data-scroll href="camerashack/website/index.html">View Website</a>
  </div>
</details>
<br>
<details>
  <summary>App Prototype Embed</summary>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ut soluta, consequatur sit, voluptatem iure saepe eveniet placeat eos, quos vero magnam aut quaerat vitae autem quisquam. Cum, excepturi reiciendis.</p>
</details>
<br>
<details>
  <summary>Promotional Advert</summary>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ut soluta, consequatur sit, voluptatem iure saepe eveniet placeat eos, quos vero magnam aut quaerat vitae autem quisquam. Cum, excepturi reiciendis.</p>
</details>
<br>
<details>
  <summary>Marketing Materials</summary>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ut soluta, consequatur sit, voluptatem iure saepe eveniet placeat eos, quos vero magnam aut quaerat vitae autem quisquam. Cum, excepturi reiciendis.</p>
</details>
</div>
</div>
<br>
<?php
  include_once "footer.php";
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
