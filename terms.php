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
                    <h1 class="hero_text2">Terms and Conditions</h1>
                </section>
            </div>
            </div>     
   <!-- faqs start here -->
   <section class="terms_main">
     <div class="t_title">
     1. Introduction
     </div>
     <div class="t_text">
     Welcome to <b>DCL Development Limited</b> (“Company”, “we”, “our”, “us”)!
These Terms of Service (“Terms”, “Terms of Service”) govern your use of our website located at<b> https://www.palaisdelarichesse.com/</b> (together or individually “Service”) operated by <b>DCL Development Limited.</b>
Our Privacy Policy also governs your use of our Service and explains how we collect, safeguard and disclose information that results from your use of our web pages.
Your agreement with us includes these Terms and our Privacy Policy (“Agreements”). You acknowledge that you have read and understood Agreements, and agree to be bound of them.
If you do not agree with (or cannot comply with) Agreements, then you may not use the Service, but please let us know by emailing at <b>sales@palaisdelarichesse.com</b> so we can try to find a solution. These Terms apply to all visitors, users and others who wish to access or use Service.

     </div>
     <div class="t_title">
    2. Communications
     </div>
     <div class="t_text">
     By using our Service, you agree to subscribe to newsletters, marketing or promotional materials and other information we may send. However, you may opt out of receiving any, or all, of these communications from us by following the unsubscribe link or by emailing at sales@palaisdelarichesse.com.

     </div>

     
     </div>
     <div class="t_title">
    3. Contests, Sweepstakes and Promotions
     </div>
     <div class="t_text">
     Any contests, sweepstakes or other promotions (collectively, “Promotions”) made available through Service may be governed by rules that are separate from these Terms of Service. If you participate in any Promotions, please review the applicable rules as well as our Privacy Policy. If the rules for a Promotion conflict with these Terms of Service, Promotion rules will apply.

     </div>

     <div class="t_title">
    4. Content
     </div>
     <div class="t_text">
     Content found on or through this Service are the property of DCL Development Limited or used with permission. You may not distribute, modify, transmit, reuse, download, repost, copy, or use said Content, whether in whole or in part, for commercial purposes or for personal gain, without express advance written permission from us.

     </div>

     <div class="t_title">
    5. Prohibited Uses
     </div>
     <div class="t_text">
     You may use Service only for lawful purposes and in accordance with Terms. You agree not to use Service:<br>
0.1. In any way that violates any applicable national or international law or regulation.<br>
0.2. For the purpose of exploiting, harming, or attempting to exploit or harm minors in any way by exposing them to inappropriate content or otherwise.<br>
0.3. To transmit, or procure the sending of, any advertising or promotional material, including any “junk mail”, “chain letter,” “spam,” or any other similar solicitation.<br>
0.4. To impersonate or attempt to impersonate Company, a Company employee, another user, or any other person or entity.<br>
0.5. In any way that infringes upon the rights of others, or in any way is illegal, threatening, fraudulent, or harmful, or in connection with any unlawful, illegal, fraudulent, or harmful purpose or activity.<br>
0.6. To engage in any other conduct that restricts or inhibits anyone’s use or enjoyment of Service, or which, as determined by us, may harm or offend Company or users of Service or expose them to liability.<br>
Additionally, you agree not to:<br>
0.1. Use Service in any manner that could disable, overburden, damage, or impair Service or interfere with any other party’s use of Service, including their ability to engage in real time activities through Service.<br>
0.2. Use any robot, spider, or other automatic device, process, or means to access Service for any purpose, including monitoring or copying any of the material on Service.<br>
0.3. Use any manual process to monitor or copy any of the material on Service or for any other unauthorized purpose without our prior written consent.<br>
0.4. Use any device, software, or routine that interferes with the proper working of Service.<br>
0.5. Introduce any viruses, trojan horses, worms, logic bombs, or other material which is malicious or technologically harmful.<br>
0.6. Attempt to gain unauthorized access to, interfere with, damage, or disrupt any parts of Service, the server on which Service is stored, or any server, computer, or database connected to Service.<br>
0.7. Attack Service via a denial-of-service attack or a distributed denial-of-service attack.<br>
0.8. Take any action that may damage or falsify Company rating.<br>
0.9. Otherwise attempt to interfere with the proper working of Service.<br>


     </div>

     <div class="t_title">
    6. Analytics
     </div>
     <div class="t_text">
     We may use third-party Service Providers to monitor and analyze the use of our Service.

     </div>

     <div class="t_title">
    7. No Use By Minors
     </div>
     <div class="t_text">
     Service is intended only for access and use by individuals at least eighteen (18) years old. By accessing or using Service, you warrant and represent that you are at least eighteen (18) years of age and with the full authority, right, and capacity to enter into this agreement and abide by all of the terms and conditions of Terms. If you are not at least eighteen (18) years old, you are prohibited from both the access and usage of Service.

     </div>
     <div class="t_title">
    8. Intellectual Property
     </div>
     <div class="t_text">
     Service and its original content (excluding Content provided by users), features and functionality are and will remain the exclusive property of DCL Development Limited and its licensors. Service is protected by copyright, trademark, and other laws of and foreign countries. Our trademarks may not be used in connection with any product or service without the prior written consent of DCL Development Limited.

     </div>

     <div class="t_title">
    9. Copyright Policy
     </div>
     <div class="t_text">
     We respect the intellectual property rights of others. It is our policy to respond to any claim that Content posted on Service infringes on the copyright or other intellectual property rights (“Infringement”) of any person or entity.
If you are a copyright owner, or authorized on behalf of one, and you believe that the copyrighted work has been copied in a way that constitutes copyright infringement, please submit your claim via email to sales@palaisdelarichesse.com, with the subject line: “Copyright Infringement” and include in your claim a detailed description of the alleged Infringement as detailed below, under “DMCA Notice and Procedure for Copyright Infringement Claims”
You may be held accountable for damages (including costs and attorneys’ fees) for misrepresentation or bad-faith claims on the infringement of any Content found on and/or through Service on your copyright.


     </div>
     
     <div class="t_title">
     10. DMCA Notice and Procedure for Copyright Infringement Claims
            </div>
     </div>
     <div class="t_text">
     You may submit a notification pursuant to the Digital Millennium Copyright Act (DMCA) by providing our Copyright Agent with the following information in writing (see 17 U.S.C 512(c)(3) for further detail):<br>
0.1. an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright’s interest;<br>
0.2. a description of the copyrighted work that you claim has been infringed, including the URL (i.e., web page address) of the location where the copyrighted work exists or a copy of the copyrighted work;<br>
0.3. identification of the URL or other specific location on Service where the material that you claim is infringing is located;
0.4. your address, telephone number, and email address;<br>
0.5. a statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law;<br>
0.6. a statement by you, made under penalty of perjury, that the above information in your notice is accurate and that you are the copyright owner or authorized to act on the copyright owner’s behalf.<br>
You can contact our Copyright Agent via email at sales@palaisdelarichesse.com.



     </div>

    
     
     <div class="t_title">
    11. Error Reporting and Feedback
     </div>
     <div class="t_text">
     You may provide us either directly at sales@palaisdelarichesse.com or via third party sites and tools with information and feedback concerning errors, suggestions for improvements, ideas, problems, complaints, and other matters related to our Service (“Feedback”). You acknowledge and agree that: (i) you shall not retain, acquire or assert any intellectual property right or other right, title or interest in or to the Feedback; (ii) Company may have development ideas similar to the Feedback; (iii) Feedback does not contain confidential information or proprietary information from you or any third party; and (iv) Company is not under any obligation of confidentiality with respect to the Feedback. In the event the transfer of the ownership to the Feedback is not possible due to applicable mandatory laws, you grant Company and its affiliates an exclusive, transferable, irrevocable, free-of-charge, sub-licensable, unlimited and perpetual right to use (including copy, modify, create derivative works, publish, distribute and commercialize) Feedback in any manner and for any purpose.
     </div>
     <div class="t_title">
    12. Links To Other Web Sites
     </div>
     <div class="t_text">
     Our Service may contain links to third party web sites or services that are not owned or controlled by DCL Development Limited.
DCL Development Limited has no control over, and assumes no responsibility for the content, privacy policies, or practices of any third party web sites or services. We do not warrant the offerings of any of these entities/individuals or their websites.<br>
We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.<br>
For example, the outlined <a class ="abc" href="https://policymaker.io/privacy-policy/">privacy policy</a> has been made using <a class ="abc" href="https://policymaker.io/">PolicyMaker.io</a> ,  a free tool that helps create high-quality legal documents.<br>PolicyMaker’s privacy <a class="abc" href="https://policymaker.io/privacy-policy/">policy generator</a> is an easy-to-use free tool for creating an excellent standard Terms of Service template for a website, blog, e-commerce store or app.<br>
YOU ACKNOWLEDGE AND AGREE THAT COMPANY SHALL NOT BE RESPONSIBLE OR LIABLE, DIRECTLY OR INDIRECTLY, FOR ANY DAMAGE OR LOSS CAUSED OR ALLEGED TO BE CAUSED BY OR IN CONNECTION WITH USE OF OR RELIANCE ON ANY SUCH CONTENT, GOODS OR SERVICES AVAILABLE ON OR THROUGH ANY SUCH THIRD PARTY WEB SITES OR SERVICES.
WE STRONGLY ADVISE YOU TO READ THE TERMS OF SERVICE AND PRIVACY POLICIES OF ANY THIRD PARTY WEB SITES OR SERVICES THAT YOU VISIT.

     </div>
     <div class="t_title">
    13. Disclaimer Of Warranty
     </div>
     <div class="t_text">
     THESE SERVICES ARE PROVIDED BY COMPANY ON AN “AS IS” AND “AS AVAILABLE” BASIS. COMPANY MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THEIR SERVICES, OR THE INFORMATION, CONTENT OR MATERIALS INCLUDED THEREIN. YOU EXPRESSLY AGREE THAT YOUR USE OF THESE SERVICES, THEIR CONTENT, AND ANY SERVICES OR ITEMS OBTAINED FROM US IS AT YOUR SOLE RISK.<br>
NEITHER COMPANY NOR ANY PERSON ASSOCIATED WITH COMPANY MAKES ANY WARRANTY OR REPRESENTATION WITH RESPECT TO THE COMPLETENESS, SECURITY, RELIABILITY, QUALITY, ACCURACY, OR AVAILABILITY OF THE SERVICES. WITHOUT LIMITING THE FOREGOING, NEITHER COMPANY NOR ANYONE ASSOCIATED WITH COMPANY REPRESENTS OR WARRANTS THAT THE SERVICES, THEIR CONTENT, OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE SERVICES WILL BE ACCURATE, RELIABLE, ERROR-FREE, OR UNINTERRUPTED, THAT DEFECTS WILL BE CORRECTED, THAT THE SERVICES OR THE SERVER THAT MAKES IT AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS OR THAT THE SERVICES OR ANY SERVICES OR ITEMS OBTAINED THROUGH THE SERVICES WILL OTHERWISE MEET YOUR NEEDS OR EXPECTATIONS.<br>
COMPANY HEREBY DISCLAIMS ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, STATUTORY, OR OTHERWISE, INCLUDING BUT NOT LIMITED TO ANY WARRANTIES OF MERCHANTABILITY, NON-INFRINGEMENT, AND FITNESS FOR PARTICULAR PURPOSE.<br>
THE FOREGOING DOES NOT AFFECT ANY WARRANTIES WHICH CANNOT BE EXCLUDED OR LIMITED UNDER APPLICABLE LAW.


     </div>

     <div class="t_title">
    14. Limitation Of Liability
     </div>
     <div class="t_text">
     EXCEPT AS PROHIBITED BY LAW, YOU WILL HOLD US AND OUR OFFICERS, DIRECTORS, EMPLOYEES, AND AGENTS HARMLESS FOR ANY INDIRECT, PUNITIVE, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGE, HOWEVER IT ARISES (INCLUDING ATTORNEYS’ FEES AND ALL RELATED COSTS AND EXPENSES OF LITIGATION AND ARBITRATION, OR AT TRIAL OR ON APPEAL, IF ANY, WHETHER OR NOT LITIGATION OR ARBITRATION IS INSTITUTED), WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE, OR OTHER TORTIOUS ACTION, OR ARISING OUT OF OR IN CONNECTION WITH THIS AGREEMENT, INCLUDING WITHOUT LIMITATION ANY CLAIM FOR PERSONAL INJURY OR PROPERTY DAMAGE, ARISING FROM THIS AGREEMENT AND ANY VIOLATION BY YOU OF ANY FEDERAL, STATE, OR LOCAL LAWS, STATUTES, RULES, OR REGULATIONS, EVEN IF COMPANY HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. EXCEPT AS PROHIBITED BY LAW, IF THERE IS LIABILITY FOUND ON THE PART OF COMPANY, IT WILL BE LIMITED TO THE AMOUNT PAID FOR THE PRODUCTS AND/OR SERVICES, AND UNDER NO CIRCUMSTANCES WILL THERE BE CONSEQUENTIAL OR PUNITIVE DAMAGES. SOME STATES DO NOT ALLOW THE EXCLUSION OR LIMITATION OF PUNITIVE, INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE PRIOR LIMITATION OR EXCLUSION MAY NOT APPLY TO YOU.


     </div>
     <div class="t_title">
    15. Termination
     </div>
     <div class="t_text">
     We may terminate or suspend your account and bar access to Service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever and without limitation, including but not limited to a breach of Terms.<br>
If you wish to terminate your account, you may simply discontinue using Service.<br>
All provisions of Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.



     </div>
     <div class="t_title">
    16. Governing Law
     </div>
     <div class="t_text">
     These Terms shall be governed and construed in accordance with the laws of Jamaica, which governing law applies to agreement without regard to its conflict of law provisions.<br>
Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service and supersede and replace any prior agreements we might have had between us regarding Service.




     </div>
     <div class="t_title">
    17. Changes To Service
     </div>
     <div class="t_text">
     We reserve the right to withdraw or amend our Service, and any service or material we provide via Service, in our sole discretion without notice. We will not be liable if for any reason all or any part of Service is unavailable at any time or for any period. From time to time, we may restrict access to some parts of Service, or the entire Service, to users, including registered users

     </div>
     <div class="t_title">
    18. Amendments To Terms
     </div>
     <div class="t_text">
     We may amend Terms at any time by posting the amended terms on this site. It is your responsibility to review these Terms periodically.<br>
Your continued use of the Platform following the posting of revised Terms means that you accept and agree to the changes. You are expected to check this page frequently so you are aware of any changes, as they are binding on you.<br>
By continuing to access or use our Service after any revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to use Service.


     </div>
     <div class="t_title">
    19. Waiver And Severability
     </div>
     <div class="t_text">
     No waiver by Company of any term or condition set forth in Terms shall be deemed a further or continuing waiver of such term or condition or a waiver of any other term or condition, and any failure of Company to assert a right or provision under Terms shall not constitute a waiver of such right or provision.<br>
If any provision of Terms is held by a court or other tribunal of competent jurisdiction to be invalid, illegal or unenforceable for any reason, such provision shall be eliminated or limited to the minimum extent such that the remaining provisions of Terms will continue in full force and effect.


     </div>
     <div class="t_title">
    20. Acknowledgement
     </div>
     <div class="t_text">
     BY USING SERVICE OR OTHER SERVICES PROVIDED BY US, YOU ACKNOWLEDGE THAT YOU HAVE READ THESE TERMS OF SERVICE AND AGREE TO BE BOUND BY THEM.


     </div>
     <div class="t_title">
    21. Contact Us
     </div>
     <div class="t_text">
     Please send your feedback, comments, requests for technical support by email:<br> <b>sales@palaisdelarichesse.com.</b>


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