<?php
include 'mail.php';
?>
<!DOCTYPE html>
<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="simple-lightbox.css?v2.4.1" />
  <link rel="stylesheet" type="text/css" href="cc/owl.carousel.min.css">
  <link type="text/css" href="cc/owl.theme.default.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>PALAIS DE LA RICHESSE</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@400;700&display=swap&family=Oswald:wght@200;300;400;500;600;700&display=swap&family=Roboto:wght@100&display=swap&family=Quicksand&display=swap&family=Old+Standard+TT:ital@1&family=Quicksand&display=swap&family=Old+Standard+TT:ital@1&display=swap');
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <style>
    * {
      box-sizing: border-box;
    }

    .container .gallery a img {
      float: left;

      width: 25%;
      height: auto;
      border: 2px solid #fff;
      -webkit-transition: -webkit-transform .15s ease;
      -moz-transition: -moz-transform .15s ease;
      -o-transition: -o-transform .15s ease;
      -ms-transition: -ms-transform .15s ease;
      transition: transform .15s ease;
      position: relative;
    }

    .clear {
      clear: both;
    }

    a {
      color: #009688;
      text-decoration: none;
    }

    a:hover {
      color: #01695f;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <script>
    function myFunction() {
      var x = document.getElementById("popup");
      x.classList.remove("popup2");

    }
  </script>
  <div class="top" id="home">
    <div class='top_content'>
      <div class="social_icons">
      <a href="https://www.facebook.com/Palais-de-la-Richesse-109012941335625" target="_blank"> <i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/palaisdelarichesse/" target="_blank"> <i class="fab fa-instagram s_padding"></i></a>
        <a href="#" target="_blank"> <i class="fab fa-twitter s_padding"></i></a>
        <a href="https://www.youtube.com/channel/UC7967D1NXkyJ7gI7GaCrxbQ" target="_blank"> <i class="fab fa-youtube s_padding"></i></a>
      </div>
      <div class='mail'>
        <div class='mail_envelop'>
          <i class="far fa-envelope"></i>
        </div>

        <p class='mail_text'> <a href="mailto:sales@palaisdelarichesse.com"> sales@palaisdelarichesse.com </a></p>
      </div>
      <div class='phone'>
        <div class='mail_envelop'>
          <i class="fas fa-phone-alt"></i>
        </div>
        <p class='mail_text'><a href="tel:876-832-3918">876.809.8533 / 876.832.3918</a></p>
      </div>
      <div class='phone'>
        <div class='mail_envelop'>
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <p class='mail_text'>INNSWOOD, Old Stony Hill Road, St Andrew</p>
      </div>
    </div>
  </div>
  <div class="hero_area_contact">
    <div class="hero_overlay">
      <section class='navigation_section'>
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
          <a href="/"> <img src="./images/logo.png" alt="logo" "></a> 
                    <button class=" navbar-toggler" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">HOME</a>
                  
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./index.php#about">ABOUT</a>
                  <div class="underlin"></div>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./index.php#appartments">APARTMENTS</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./index.php#penthouses">PENTHOUSES</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./index.php#townhouses">TOWNHOUSES</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./faqs.php">FAQs</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./contact.php">CONTACT</a>
                  <div class="underline"></div>
                </li>



              </ul>
              <button class="btn visit_btn c_nav">SCHEDULE A VISIT</button>

            </div>
        </nav>
      </section>

     
      <?php
include 'popup_form.php';
?>
                <section class="hero_content">
                    <h1 class="hero_text2">Contact Us</h1>
                </section>
            </div>
            </div>     



   <!-- faqs start here -->
   <?php
include 'contact_mail.php';
?>
   <section class="contact_section">
  <div class="contact_main">
<div class="left_contact">
<img src="./images/c_logo.png" alt="logo" class="c_logo">
<img src="./images/Vector Smart Object.png" alt="logo" class="c_img">
</div>
<div class="right_contact">


<form action="" class="contact_page_form" method="post">

  <input type="text" name="name" placeholder="Name" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="text" name="phone" placeholder="Phone Number" required>

<textarea name="message" id="" cols="30" rows="10" class="c_area" placeholder="Message" required> Message</textarea>
<input type="submit" class="c_submit" value="SUBMIT" name="contact_action">

<?php if(isset($sucess) && !empty($sucess)) { ?>
            <div class="alert alert-success" role="alert">
              <?php echo $sucess; ?>
            </div>
            <?php } ?>
            <?php if(isset($error) && !empty($error)) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $error; ?>
            </div>
            <?php } ?>
</form>
  
</div>


  </div>
</section>


<section class="footer">
    <div class="footer_content">
      <div class="footer_left">

        <div class="footer_text">
          <img class="footer_logo" src="./images/footerlogo.png" alt="footer logo">
          <br><br>

          Our community combines elegance with refinement and offers a mix of Apartments, Penthouses and Townhouses
          ranging from 1080 to 4848 square feet.</div>
        <div class="address">INNSWOOD, <br>
          Old Stony Hill Road, St. Andrew,<br>
          Jamaica<br>
          Sales@palaisdelarichesse.com<br>
          Telephone: 876.832.3918</div>
      </div>
      <!-- right side -->
      <div class="right_side">
        <h3>Project information</h3>
        <div class="categories">
          <div class="name">Developer</div>
          <div class="nameinfo">DCL Developmemt LTD.</div>
        </div>
        <div class="categories">
          <div class="name">Architect</div>
          <div class="nameinfo">Virtuoso Architect</div>
        </div>
        <div class="categories">
          <div class="name">Civil/Structural Engineer</div>
          <div class="nameinfo">Tyrone Graham</div>
        </div>
        <div class="categories">
          <div class="name">Mechanical/Electrical/Plumbing Engineer </div>
          <div class="nameinfo">Synergy Engineering LTD</div>
        </div>
        <div class="categories">
          <div class="name">Commissioned Land Surveyor </div>
          <div class="nameinfo">Andrea Gordon</div>
        </div>
       
        <div class="categories">
          <div class="name">Quantity Surveyor </div>
          <div class="nameinfo">Geecho Consultants & Construction LTD</div>
        </div>
        
      </div>
    </div>
    <div class="bottom">
      <div class="copyrights">© Copyright 2021 by Palais de la Richesse</div>
      <div class="copyrights2"> <a href="./privacy.php">Privacy Policy</a> | <a href="terms.php">Terms & Conditions</a></div>
      <div class="footer_social">
      <a href="https://www.facebook.com/Palais-de-la-Richesse-109012941335625" target="_blank"> <i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/palaisdelarichesse/" target="_blank"> <i class="fab fa-instagram s_padding"></i></a>
        <a href="#"> <i class="fab fa-twitter s_padding"></i></a>
        <a href="https://www.youtube.com/channel/UC7967D1NXkyJ7gI7GaCrxbQ" target="_blank"> <i class="fab fa-youtube s_padding"></i></a>
      </div>
    </div>



  </section>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="cc/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="simple-lightbox.js?v2.4.1"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script>
  $(document).ready(function () {
    $(".nav-link").hover(
      function () {
        $('underlin').addClass("underline");
      },
      function () {
        $('underlin').removeClass("underline");
      }
    );
  });
</script>


<script>
  (function () {
    var $gallery = new SimpleLightbox('.gallery a', {});
  })();
  (function () {
    var $gallery = new SimpleLightbox('.gallery2 a', {});
  })();
  (function () {
    var $gallery = new SimpleLightbox('.gallery3 a', {});
  })();
  $(".visit_btn").on("click", function () {
    $(".popup").addClass("popup2");
  });
  $('.counter').counterUp({
    delay: 10,
    time: 1000
  });
  (function ($) {

    $(document).ready(function () {

      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 5
          },
          1900: {
            items: 6

          }
        }
      });
    });


  })(jQuery);
</script>

</html>