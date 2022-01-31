<!DOCTYPE html>
<html lang="en">

  <!--=================== Head & Title ===================-->
  <head>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.00"/>

    <!-- Assets -->
    <link rel="stylesheet" href="assets/css/header-footer.css" />   
    <link rel="stylesheet" href="assets/css/contact.css" />   
    <script src="assets/js/mobile-menu-open.js"></script>
    <script src="assets/js/toggle-light-mode.js"></script>
    <script src="assets/js/contact.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" 
      rel="stylesheet">
    
    <!-- Title -->
    <title>TRANSition NI | Contact</title> 
  </head>


<!--============================================================================================-->
<!---------------------------------------- Body Content ------------------------------------------>
<!--============================================================================================-->

  <!--============================================================--> 
  <!------------------------ Header Content ------------------------> 
  <!--============================================================-->


  <body id="body">
    <div name=top></div>
    <header class="header">

      <!------------------ Navigation Bar ------------------> 

      <div class="nav-box">
        <ul class="navigation">
          <li><a href="assets/html/home.html" class="active" class="home">Home</a></li>
          <li><a href="assets/html/resources.html" class="resources">Resources</a></li>
          <li><a href="assets/html/articles.html" class="articles">Articles</a></li>
          <li><a href="assets/html/gallery.html" class="gallery">Gallery</a></li>
          <li><a href="about.html" class="about">About</a></li>
          <li><a href="contact.php" class="contact">Contact</a></li>        
        </ul>
      </div>

        <!------------------ Logo And Header ------------------> 

      <a href="index.html"><h1>TRANSition NI</h1></a>
      <a href="index.html"></a><img id="logo-img" src="assets/images/logo/logo.png" 
      alt="Logo: A raised fist holding a transgender flag"></a>
        
      <div class="social-media">
        <li><a href="mailto:admin@transition-ni.com" target="_blank">
          <img src="assets/images/icons/social-media/gmail.svg" id="gmail"></a></li>          
        <li><a href="http://facebook.com/transition.ni" target="_blank">
          <img src="assets/images/icons/social-media/facebook.svg" id="facebook"></a></li>
        <li><a href="http://instagram.com/transition.ni" target="_blank">
          <img src="assets/images/icons/social-media/instagram.svg" id="instagram"></a></li>
        <li><a href="http://github.com/orionstarfallen/orionstarfallen.github.io" target="_blank">
          <img src="assets/images/icons/social-media/github.svg" id="github"></a></li>
        <li><a href="https://gofund.me/848a57e2" target="_blank">
          <img src="assets/images/icons/social-media/donate.svg" id="coin"></a></li>
      </div>

        <!------------------ Mobile Menu ------------------> 

      <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <ul class="mobile-menu">
          <li><a href="assets/html/home.html" class="active" class="home">Home</a></li>
          <li><a href="assets/html/resources.html" class="resources">Resources</a></li>
          <li><a href="assets/html/articles.html" class="articles">Articles</a></li>
          <li><a href="assets/html/gallery.html" class="gallery">Gallery</a></li>
          <li><a href="about.html" class="about">About</a></li>
          <li><a href="contact.php" class="contact">Contact</a></li>
        </ul>
      </div>  
    </header>


  <!--============================================================--> 
  <!------------------------- Page Content -------------------------> 
  <!--============================================================--> 

    <div class="page-content">
      <div id="page-content">

        <div class="text">
          <h2>Contact Us</h2>
          <br>
          <p><b>We'd love to hear from you!</b></p>
          <br><br>
          <p>Whether it's a question, some feedback, or you'd just like a chat, 
            we'd be happy to hear what's on your mind!</p>
          <br>
          <p>Simply fill out the message form and one of our team will get 
            back to you ASAP &#128150;</p>
          <br><br>
          <p><a href="mailto:admin@transition-ni.com" target="_blank"  class="mail">
            <img src="assets/images/icons/social-media/gmail.svg" id="mail">admin@transition-ni.com</a></p>
          <br><br>
          <p>Don't forget to check us out on social media!</p>
          <br>
          <div class="social-media">
            <li><a href="http://facebook.com/transition.ni" target="_blank">
              <img src="assets/images/icons/social-media/facebook.svg" id="facebook"></a></li>
            <li><a href="http://instagram.com/transition.ni" target="_blank">
              <img src="assets/images/icons/social-media/instagram.svg" id="instagram"></a></li>
            <li><a href="http://github.com/orionstarfallen/orionstarfallen.github.io" target="_blank">
              <img src="assets/images/icons/social-media/github.svg" id="github"></a></li>
          </div>
        </div>
        
        <form id="form">
          <input type="text" id="first-name" name="first-name" placeholder="Name *" required>
          <input type="text" id="pronouns" name="pronouns" placeholder="Pronouns">
          <input type="text" id="email" name="email" placeholder="Email *" required>
          <textarea name="message" id="message" form="form" 
            placeholder="What would you like to chat about? *" required></textarea>
          <input type="submit" value="send" id="send" action="assets/php/contact-form-email.php"
            method="POST" enctype="multipart/form-data" onclick="invalidInput(this)">
        </form>     
      </div>
    </div>


  <!--============================================================--> 
  <!------------------------ Footer Content ------------------------> 
  <!--============================================================-->

    <footer>
      <div class="top">
        <a href="#top"><img src="assets/images/icons/arrow.svg" id="arrow"></a>
      </div>
      <ul class="social-media">
        <li><a href="mailto:admin@transition-ni.com" target="_blank">
          <img src="assets/images/icons/social-media/gmail.svg" class="gmail"></a></li>
        <li><a href="http://facebook.com/transition.ni" target="_blank">
          <img src="assets/images/icons/social-media/facebook.svg" class="facebook"></a></li>
        <li><a href="http://instagram.com/transition.ni" target="_blank">
          <img src="assets/images/icons/social-media/instagram.svg" class="instagram"></a></li>
        <li><a href="http://github.com/orionstarfallen/orionstarfallen.github.io" target="_blank">
          <img src="assets/images/icons/social-media/github.svg" class="github"></a></li>
        <li><a href="https://gofund.me/848a57e2" target="_blank">
          <img src="assets/images/icons/social-media/donate.svg" class="gmail"></a></li>
      </ul>
      <ul class="toggle-color">
        <li id="sun" onclick="toggleLightMode(this)"><img src="assets/images/icons/sun.svg"></li>
        <li id="moon" onclick="toggleDarkMode(this)"><img src="assets/images/icons/moon.svg"></li>
      </ul>
      <img src="assets/images/banners/footer-sticker.png" id="footer-sticker">
    </footer>
    
  </body>
</html>


<!--============================================================================================-->
<!----------------------------------------- End of File ------------------------------------------>
<!--============================================================================================-->