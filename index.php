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
  
  <?php
include 'popup_form.php';
?>
  
      <section class="hero_content">
     
        <img class="hero_image" src="" alt="">
        <h1 class="hero_text"></h1>

       
      </section>
  <div class="hero_area">
    <div class="video_wrapper">
      <video autoplay muted loop id="myVideo">
        <source src="./video/1.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    </div>
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
                  <div class="underline"></div>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#about">ABOUT</a>
                  <div class="underlin"></div>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#appartments">APARTMENTS</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#penthouses">PENTHOUSES</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#townhouses">TOWNHOUSES</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./faqs.php">FAQs</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="./contact.php">CONTACT</a>
                </li>



              </ul>
              <button class="btn visit_btn c_nav">SCHEDULE A VISIT</button>

            </div>
        </nav>
      </section>

     
      <div class="hero_end">
        <div class="h_text1"></div>
        <div class="h_text2"></div>
      </div>
    </div>
  </div>
  <!-- section 2  starts here    -->
  <section class="about_section" id="about">
    <div class="about_image_section">
      <img class="about_image" src="./images/about-us.jpg" alt="about image">
    </div>
    <div class="about_text_section">
      <div class="about_top">
        <div class="a_text">PROPERTY OVERVIEW</div>
        <div class="smart"><img src="./images/Smart.png" alt="smart object"></div>
      </div>
      <div class="a_h2">
        <h2><span class='about_br'> About </span> Palais De La Richesse</h2>
      </div>
      <div class="aa_text">Situated in the quiet hills of Inswood, Old Stony Hill Road, this contemporary multi-family
        development property is exclusive to 25 residences. These luxurious homes will not only boast amenities such as
        a resort style infinity swimming pool and a state of the art fitness centre, but will also integrate the use of
        green spaces and the preservation of our environment with the use of solar electricity in designated shared
        spaces. The property is designed and executed by a professional collaborative of the industry’s finest creative
        minds in ultra-modern building construction, and so, this property is considered an architectural masterpiece
        with unique visual elements that sets it apart from all else. The units each have balconies with panoramic views
        of the mountains and Kingston city along with contemporary interiors with open floor plans. Residences will be
        connected with modern cloud-based security surveillance features along with digital intercom and remote access
        control systems.
        <br>
        <br>
        <br>

        Palais de la Richesse combines elegance with refinement and offers a mix apartments, penthouses and townhouses
        ranging from 1080 to 4848 square feet.
      </div>
    </div>
  </section>
  <!-- section 3 starts here   -->
  <section class="section_three">
    <div class="section3_bg">
      <div class="section3_content">
        <div class="sec3_info1">
          <div class="info_digit"> <span class="counter">51,989</span> <br><span class="info_value">SQUARE FEET</span>
          </div>
          <div class="info_digit"><span class="counter">14</span><br><span class="info_value">2 BR APARTMENTS</span>
          </div>
          <div class="info_digit"><span class="counter">7</span><br><span class="info_value">3 BR PENTHOUSES</span>
          </div>
          <div class="info_digit"><span class="counter">4</span><br><span class="info_value">4 BR TOWNHOUSES</span>
          </div>
        </div>

      </div>
    </div>
    <!-- section 4 starts here -->
    <div class="section4">
      <div class="prop">Property Amenities</div>
      <div class="cards">
        <div class="owl-carousel owl-theme">

          <div class=" item">
            <div class="card_image">
              <img src="./images/Amenities-copy_03.png" alt="card image">
            </div>
            <div class="card_title">Fitness Centre</div>
            <div class="card_info">Get your pulse racing at our state-of-the-art fitness centre.
              Outfitted with all modern gym equipment
            </div>
          </div>
          <div class=" item item2">
            <div class="card_image">
              <img src="./images/Amenities-copy_03.jpg" alt="card image">
            </div>
            <div class="card_title">Modern Elevator</div>
            <div class="card_info">Speed, automation and unparalleled safety are the main features of our elevator
              system
            </div>
          </div>
          <div class=" item">
            <div class="card_image">
              <img src="./images/Amenities-copy_07.jpg" alt="card image">
            </div>
            <div class="card_title">Keyless Controlled Entry</div>
            <div class="card_info">Security made smarter. Modern entry systems grant authorized access to restricted
              area without requiring a physical key.
            </div>
          </div>
          <div class=" item item2">
            <div class="card_image">
              <img src="./images/Amenities-copy_09.jpg" alt="card image">
            </div>
            <div class="card_title">Gated Entry With 24hr Security</div>
            <div class="card_info">Manned 24-hour monitoring station provides residents with the peace of mind that they
              deserve.
            </div>
          </div>
          <div class=" item">
            <div class="card_image">
              <img src="./images/Amenities-copy_11.jpg" alt="card image">
            </div>
            <div class="card_title">Assigned Parking</div>
            <div class="card_info">Residents are provided with labelled parking spaces and additional parking is
              available for visitors
            </div>
          </div>
          <div class=" item item2">
            <div class="card_image">
              <img src="./images/Amenities-copy_13.jpg" alt="card image">
            </div>
            <div class="card_title">Solar Energy And Lighting</div>
            <div class="card_info">Solar Electricity systems will be deployed in shared spaces to help reduce
              maintenance costs while preserving the environment.
            </div>
          </div>
          <div class=" item">
            <div class="card_image">
              <img src="./images/Amenities-copy_15.jpg" alt="card image">
            </div>
            <div class="card_title">Beautifully Landscaped Property</div>
            <div class="card_info">Thoughtful landscape design will be key to creating a green outdoor oasis for our
              community
            </div>
          </div>
          <div class=" item item2">
            <div class="card_image">
              <img src="./images/Amenities-copy_03-08.jpg" alt="card image">
            </div>
            <div class="card_title">Water Storage Facility</div>
            <div class="card_info">Ample water reserves will be implemented for fire protection, flow equalization, and
              municipal shortfalls.
            </div>
          </div>
          <div class=" item">
            <div class="card_image">
              <img src="./images/Amenities-copy_19.jpg" alt="card image">
            </div>
            <div class="card_title">Standby Generator</div>
            <div class="card_info">Fast, automatic delivery of emergency power, in the event of JPS failure.
              Allowing residents to maintain comfort level at home during these emergencies.

            </div>
          </div>
          <div class=" item item2">
            <div class="card_image">
              <img src="./images/Amenities-copy_21.jpg" alt="card image">
            </div>
            <div class="card_title">Resort-Style Swimming Pool</div>
            <div class="card_info">A tropical ambiance and elegant outdoor furnishings are the hallmarks of our
              resort-style pool deck

            </div>
          </div>



        </div>
      </div>
    </div>
    <!-- carasual here -->


  </section>
  <!-- section 5 starts here -->



  <section class='section5'>

    <div class="video_section">
      <div class='image_text'>
        <a data-fancybox="" data-width="640" data-height="360" data-small-btn="true"
          href="https://www.youtube.com/watch?v=TkqXjB3wavM">
          <img src="./images/Group 39.png" alt="video play button">
        </a>
        <div class="video-text">
          TAKE A VIDEO TOUR <br> OF PROPERTY

        </div>
      </div>
    </div>
  </section>
  <!-- section 6 starts here -->
  <section class="section_info">

    <div class="main_wrapper" id="appartments">
      <div class="imageplus_info">
        <div class="info_about">
          <div class="starting_at">Starting at <br>USD $284,050 </div>
        </div>
      </div>
      <div class="explore_us">
        <div class="title">Explore Our Luxury Apartments</div>
        <div class="title_info">Our Apartments boast the following standard inclusions:</div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          High end floor and wall finishes
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Utra-modern kitchen cabinets with solid surface
          countertops
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Spacious flow-through open floor plans
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Large windows and Sliding doors
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Water Heating
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Private Balconies
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Adequate closets and storage
        </div>



        <div class="container">
          <div class="gallery">
            <button class="view_gallery"> <a href="./images/apartment/1.jpg">VIEW GALLERY >></a></button>
            <div class="starting_at">Starting at USD $275,000 </div>
            <a href="./images/apartment/2.jpg"></a>
            <a href="./images/apartment/3.jpg"></a>
            <a href="./images/apartment/4.jpg"></a>
            <a href="./images/apartment/5.jpg"></a>
            <a href="./images/apartment/6.jpg"></a>
            <a href="./images/apartment/7.jpg"></a>
            <div class="clear"></div>
          </div>
        </div>
      </div>
  </section>

  <!-- section 7 starts here -->

  <section class="section_info">

    <div class="main_wrapper main_wrapper2" id="penthouses">
      <div class="imageplus_info us2">
        <div class="info_about">
          <div class="starting_at">Starting at <br> USD $284,050</div>
        </div>
      </div>
      <div class="explore_us">
        <div class="title">Explore Our Luxury Penthouses</div>
        <div class="title_info">Our Penthouses boast the following standard inclusions:</div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Multi-floor flow through space
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Private Roof Terrace with Infinity Pool
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          High-end floor and wall finishes
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Utra-modern kitchen cabinets with solid surface
          countertops
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Large windows and Sliding doors
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Private Balconies
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Water Heating
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Private Balconies
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Adequate closets and storage
        </div>


        <div class="container">
          <div class="gallery2">
            <button class="view_gallery"> <a href="./images/penthouse/1.jpg">VIEW GALLERY >></a></button>
            <div class="starting_at">Starting at USD $475,000</div>
            <a href="./images/penthouse/2.jpg"></a>
            <a href="./images/penthouse/3.jpg"></a>
            <a href="./images/penthouse/4.jpg"></a>
            <a href="./images/penthouse/5.jpg"></a>
            <a href="./images/penthouse/6.jpg"></a>
            <a href="./images/penthouse/7.jpg"></a>
            <div class="clear"></div>
           
          </div>
   
        </div>

      </div>
  </section>


  <!-- section 8 starts here -->
  <section class="section_info">

    <div class="main_wrapper" id="townhouses">
      <div class="imageplus_info us3">
        <div class="info_about">
          <div class="starting_at">Starting at <br> USD$284,050</div>
        </div>
      </div>
      <div class="explore_us">
        <div class="title">Explore Our Luxury Townhouses</div>
        <div class="title_info">Our Townhouses boast the following standard inclusions:</div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          High end floor and wall finishes
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Utra-modern kitchen cabinets with solid surface
          countertops
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
         Private roof terrace with infinity pool
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Spacious flow-through open floor plans
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Large windows and Sliding doors
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Laundry Area
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Water Heating
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Private Balconies
        </div>
        <div class="all_info">
          <img src="./images/icon.png" alt="icon">
          Adequate closets and storage
        </div>


        <div class="container">
          <div class="gallery3">
            <button class="view_gallery"> <a href="./images/townhouse/1.jpg">VIEW GALLERY >></a></button>
            <div class="starting_at">Starting at USD $998,000</div>
            <a href="./images/townhouse/2.jpg"></a>
            <a href="./images/townhouse/3.jpg"></a>
            <a href="./images/townhouse/4.jpg"></a>
            <a href="./images/townhouse/5.jpg"></a>
            <a href="./images/townhouse/6.jpg"></a>
            <a href="./images/townhouse/7.jpg"></a>
            <a href="./images/townhouse/8.jpg"></a>
            <div class="clear"></div>
          </div>
        </div>
      </div>
  </section>

  <!-- section faq starts here  -->
  <section class="faq_home">
    <div class="faqhome_content">
      <a href="./faqs.php">
        <button class="faqs">
          FAQS
        </button></a>
      <div class="visit_us">VISIT BEFORE YOU DECIDE</div>
      <div class="interested_in">Interested in a Showing?</div>
      <button class="avisit visit_btn"> <a href="#top" class="vv">SCHEDULE A VISIT</a> </button>
    </div>
  </section>
  <!-- footer starts here -->
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
        nav: false,
        autoplay:true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
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