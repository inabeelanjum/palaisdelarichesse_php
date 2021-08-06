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
  <div class="hero_area_faq">
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
                    <h1 class="hero_text2">Privacy Policy</h1>
                </section>
            </div>
            </div>     
   <!-- faqs start here -->

   <section class="terms_main">
     <div class="t_title">
     1. Introduction
     </div>
     <div class="t_text">
     Welcome to <b>DCL Development Limited.</b><br>
     <b>DCL Development Limited</b> (“us”, “we”, or “our”) operates<b> https://www.palaisdelarichesse.com/</b> (hereinafter referred to as <b>“Service”</b>).
Our Privacy Policy governs your visit to<b> https://www.palaisdelarichesse.com/</b>, and explains how we collect, safeguard and disclose information that results from your use of our Service.
We use your data to provide and improve Service. By using Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and Conditions.
Our Terms and Conditions <b>(“Terms”)</b> govern all use of our Service and together with the Privacy Policy constitutes your agreement with us <b>(“agreement”)</b>.

     </div>
     <div class="t_title">
    2. Definitions
     </div>
     <div class="t_text">
    <b> SERVICE</b> means the https://www.palaisdelarichesse.com/ website operated by DCL Development Limited.<br>
<b>PERSONAL DATA</b> means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession).<br>
<b>USAGE DATA</b> is data collected automatically either generated by the use of Service or from Service infrastructure itself (for example, the duration of a page visit).<br>
<b>COOKIES</b> are small files stored on your device (computer or mobile device).<br>
<b>DATA CONTROLLER</b> means a natural or legal person who (either alone or jointly or in common with other persons) determines the purposes for which and the manner in which any personal data are, or are to be, processed. For the purpose of this Privacy Policy, we are a Data Controller of your data.<br>
<b>DATA PROCESSORS (OR SERVICE PROVIDERS)</b> means any natural or legal person who processes the data on behalf of the Data Controller. We may use the services of various Service Providers in order to process your data more effectively.<br>
<b>DATA SUBJECT </b>is any living individual who is the subject of Personal Data.<br>
<b>THE USER</b> is the individual using our Service. The User corresponds to the Data Subject, who is the subject of Personal Data.


     </div>

     
     </div>
     <div class="t_title">
    3. Information Collection and Use
     </div>
     <div class="t_text">
     We collect several different types of information for various purposes to provide and improve our Service to you.

     </div>

     <div class="t_title">
    4. Types of Data Collected
     </div>
     <div class="t_text">
    <b> Personal Data</b><br>
While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you <b>(“Personal Data”).</b> Personally identifiable information may include, but is not limited to:<br>
0.1. Email address <br>
0.2. First name and last name<br>
0.3. Phone number<br>
0.4. Address, Country, State, Province, ZIP/Postal code, City<br>
0.5. Cookies and Usage Data<br>
We may use your Personal Data to contact you with newsletters, marketing or promotional materials and other information that may be of interest to you. You may opt out of receiving any, or all, of these communications from us by following the unsubscribe link.<br>
<b>Usage Data</b><br>
We may also collect information that your browser sends whenever you visit our Service or when you access Service by or through any device (“Usage Data”).<br>
This Usage Data may include information such as your computer’s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.<br>
When you access Service with a device, this Usage Data may include information such as the type of device you use, your device unique ID, the IP address of your device, your device operating system, the type of Internet browser you use, unique device identifiers and other diagnostic data.<br>
<b>Tracking Cookies Data</b><br>
We use cookies and similar tracking technologies to track the activity on our Service and we hold certain information.
Cookies are files with a small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Other tracking technologies are also used such as beacons, tags and scripts to collect and track information and to improve and analyze our Service.<br>
You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.<br>
Examples of Cookies we use:
<b>0.1. Session Cookies:</b> We use Session Cookies to operate our Service.
<b>0.2. Preference Cookies:</b> We use Preference Cookies to remember your preferences and various settings.
<b>0.3. Security Cookies: </b>We use Security Cookies for security purposes.
<b>0.4. Advertising Cookies: </b>Advertising Cookies are used to serve you with advertisements that may be relevant to you and your interests.<br>
<b>Other Data</b><br>
While using our Service, we may also collect the following information: sex, age, date of birth, place of birth, passport details, citizenship, registration at place of residence and actual address, telephone number (work, mobile), details of documents on education, qualification, professional training, employment agreements, NDA agreements, information on bonuses and compensation, information on marital status, family members, social security (or other taxpayer identification) number, office location and other data.


     </div>

     <div class="t_title">
    5. Use of Data
     </div>
     <div class="t_text">
     DCL Development Limited uses the collected data for various purposes:<br>
0.1. to provide and maintain our Service;<br>
0.2. to notify you about changes to our Service;<br>
0.3. to allow you to participate in interactive features of our Service when you choose to do so;<br>
0.4. to provide customer support;<br>
0.5. to gather analysis or valuable information so that we can improve our Service;<br>
0.6. to monitor the usage of our Service;<br>
0.7. to detect, prevent and address technical issues;<br>
0.8. to fulfil any other purpose for which you provide it;<br>
0.9. to carry out our obligations and enforce our rights arising from any contracts entered into between you and us, including for billing and collection;<br>
0.10. to provide you with notices about your account and/or subscription, including expiration and renewal notices, email-instructions, etc.;<br>
0.11. to provide you with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless you have opted not to receive such information;<br>
0.12. in any other way we may describe when you provide the information;<br>
0.13. for any other purpose with your consent.<br>

     </div>

     <div class="t_title">
    6. Retention of Data
     </div>
     <div class="t_text">
     We will retain your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.
We will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period, except when this data is used to strengthen the security or to improve the functionality of our Service, or we are legally obligated to retain this data for longer time periods.


     </div>

     <div class="t_title">
    7. Transfer of Data
     </div>
     <div class="t_text">
     Your information, including Personal Data, may be transferred to – and maintained on – computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ from those of your jurisdiction.
If you are located outside United States and choose to provide information to us, please note that we transfer the data, including Personal Data, to United States and process it there.
Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.
DCL Development Limited will take all the steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organisation or a country unless there are adequate controls in place including the security of your data and other personal information.


     </div>
     <div class="t_title">
    8. Disclosure of Data
     </div>
     <div class="t_text">
     We may disclose personal information that we collect, or you provide:<br>
<b>0.1. Disclosure for Law Enforcement.</b><br>
Under certain circumstances, we may be required to disclose your Personal Data if required to do so by law or in response to valid requests by public authorities.<br>
<b>0.2. Business Transaction.</b><br>
If we or our subsidiaries are involved in a merger, acquisition or asset sale, your Personal Data may be transferred.<br>
<b>0.3. Other cases. We may disclose your information also:</b><br>
0.3.1. to our subsidiaries and affiliates;<br>
0.3.2. to contractors, service providers, and other third parties we use to support our business;<br>
0.3.3. to fulfill the purpose for which you provide it;<br>
0.3.4. for the purpose of including your company’s logo on our website;<br>
0.3.5. for any other purpose disclosed by us when you provide the information;<br>
0.3.6. with your consent in any other cases;<br>
0.3.7. if we believe disclosure is necessary or appropriate to protect the rights, property, or safety of the Company, our customers, or others.<br>

     </div>

     <div class="t_title">
    9. Security of Data
     </div>
     <div class="t_text">
     The security of your data is important to us but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.

     </div>
     <div class="t_title">
    10. Your Data Protection Rights Under General Data Protection Regulation (GDPR) 
     </div>
     <div class="t_text">
     If you are a resident of the European Union (EU) and European Economic Area (EEA), you have certain data protection rights, covered by GDPR.<br>
We aim to take reasonable steps to allow you to correct, amend, delete, or limit the use of your Personal Data.<br>
If you wish to be informed what Personal Data we hold about you and if you want it to be removed from our systems, please email us at <b>sales@palaisdelarichesse.com.</b><br>
In certain circumstances, you have the following data protection rights:<br>
0.1. the right to access, update or to delete the information we have on you;<br>
0.2. the right of rectification. You have the right to have your information rectified if that information is inaccurate or incomplete;<br>
0.3. the right to object. You have the right to object to our processing of your Personal Data;<br>
0.4. the right of restriction. You have the right to request that we restrict the processing of your personal information;<br>
0.5. the right to data portability. You have the right to be provided with a copy of your Personal Data in a structured, machine-readable and commonly used format;<br>
0.6. the right to withdraw consent. You also have the right to withdraw your consent at any time where we rely on your consent to process your personal information;<br>
Please note that we may ask you to verify your identity before responding to such requests. Please note, we may not able to provide Service without some necessary data.<br>
You have the right to complain to a Data Protection Authority about our collection and use of your Personal Data. For more information, please contact your local data protection authority in the European Economic Area (EEA).<br>


     </div>

    
     
     <div class="t_title">
    11. Your Data Protection Rights under the California Privacy Protection Act (CalOPPA)
     </div>
     <div class="t_text">
     CalOPPA is the first state law in the nation to require commercial websites and online services to post a privacy policy. The law’s reach stretches well beyond California to require a person or company in the United States (and conceivable the world) that operates websites collecting personally identifiable information from California consumers to post a conspicuous privacy policy on its website stating exactly the information being collected and those individuals with whom it is being shared, and to comply with this policy.
According to CalOPPA we agree to the following:<br>
0.1. users can visit our site anonymously;<br>
0.2. our Privacy Policy link includes the word “Privacy”, and can easily be found on the home page of our website;<br>
0.3. users will be notified of any privacy policy changes on our Privacy Policy Page;<br>
0.4. users are able to change their personal information by emailing us at <b>sales@palaisdelarichesse.com.</b><br>
Our Policy on “Do Not Track” Signals:<br>
We honor Do Not Track signals and do not track, plant cookies, or use advertising when a Do Not Track browser mechanism is in place. Do Not Track is a preference you can set in your web browser to inform websites that you do not want to be tracked.<br>
You can enable or disable Do Not Track by visiting the Preferences or Settings page of your web browser.

     </div>
     <div class="t_title">
    12. Your Data Protection Rights under the California Consumer Privacy Act (CCPA)
     </div>
     <div class="t_text">
     If you are a California resident, you are entitled to learn what data we collect about you, ask to delete your data and not to sell (share) it. To exercise your data protection rights, you can make certain requests and ask us:<br>
<b>0.1. What personal information we have about you. If you make this request, we will return to you:</b><br>
0.0.1. The categories of personal information we have collected about you.<br>
0.0.2. The categories of sources from which we collect your personal information.<br>
0.0.3. The business or commercial purpose for collecting or selling your personal information.<br>
0.0.4. The categories of third parties with whom we share personal information.<br>
0.0.5. The specific pieces of personal information we have collected about you.<br>
0.0.6. A list of categories of personal information that we have sold, along with the category of any other company we sold it to. If we have not sold your personal information, we will inform you of that fact.<br>
0.0.7. A list of categories of personal information that we have disclosed for a business purpose, along with the category of any other company we shared it with.<br>
Please note, you are entitled to ask us to provide you with this information up to two times in a rolling twelve-month period. When you make this request, the information provided may be limited to the personal information we collected about you in the previous 12 months.<br>
<b>0.2. To delete your personal information. If you make this request, we will delete the personal information we hold about you as of the date of your request from our records and direct any service providers to do the same. In some cases, deletion may be accomplished through de-identification of the information. If you choose to delete your personal information, you may not be able to use certain functions that require your personal information to operate.
0.3. To stop selling your personal information. We don’t sell or rent your personal information to any third parties for any purpose. We do not sell your personal information for monetary consideration. However, under some circumstances, a transfer of personal information to a third party, or within our family of companies, without monetary consideration may be considered a “sale” under California law. You are the only owner of your Personal Data and can request disclosure or deletion at any time.<br>
If you submit a request to stop selling your personal information, we will stop making such transfers.<br>
Please note, if you ask us to delete or stop selling your data, it may impact your experience with us, and you may not be able to participate in certain programs or membership services which require the usage of your personal information to function. But in no circumstances, we will discriminate against you for exercising your rights.<br></b>
To exercise your California data protection rights described above, please send your request(s) by email: <b>sales@palaisdelarichesse.com.

</b>
Your data protection rights, described above, are covered by the CCPA, short for the California Consumer Privacy Act. To find out more, visit the official California Legislative Information website. The CCPA took effect on 01/01/2020.

     </div>
     <div class="t_title">
    13. Service Providers
     </div>
     <div class="t_text">
     
     We may employ third party companies and individuals to facilitate our Service <b>(“Service Providers”)</b>, provide Service on our behalf, perform Service-related services or assist us in analysing how our Service is used.
These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.



     </div>

     <div class="t_title">
    14. Analytics
     </div>
     <div class="t_text">
     We may use third-party Service Providers to monitor and analyze the use of our Service.

     </div>
     <div class="t_title">
    15. CI/CD tools
     </div>
     <div class="t_text">
     We may use third-party Service Providers to automate the development process of our Service.



     </div>
     <div class="t_title">
    16. Behavioral Remarketing
     </div>
     <div class="t_text">
     We may use remarketing services to advertise on third party websites to you after you visited our Service. We and our third-party vendors use cookies to inform, optimise and serve ads based on your past visits to our Service.




     </div>
     <div class="t_title">
    17. Links to Other Sites
     </div>
     <div class="t_text">
     Our Service may contain links to other sites that are not operated by us. If you click a third party link, you will be directed to that third party’s site. We strongly advise you to review the Privacy Policy of every site you visit.<br>
We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.<br>
For example, the outlined <a class ="abc" href="https://policymaker.io/privacy-policy/">privacy policy</a> has been made using <a class ="abc" href="https://policymaker.io/">PolicyMaker.io</a> , a free tool that helps create high-quality legal documents.<br>PolicyMaker’s privacy <a class="abc" href="https://policymaker.io/privacy-policy/">policy generator</a> is an easy-to-use tool for creating a privacy <a class="abc" href="https://policymaker.io/blog-privacy-policy/" >policy for blog</a>, website, e-commerce store or mobile app.


     </div>
     <div class="t_title">
    18. Children’s Privacy
     </div>
     <div class="t_text">
     Our Services are not intended for use by children under the age of 18 (<b>“Child”</b> or <b>“Children”</b>).
We do not knowingly collect personally identifiable information from Children under 18. If you become aware that a Child has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from Children without verification of parental consent, we take steps to remove that information from our servers.



     </div>
     <div class="t_title">
    19. Changes to This Privacy Policy
     </div>
     <div class="t_text">
     We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.<br>
We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update “effective date” at the top of this Privacy Policy.<br>
You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</br>




     </div>
   
     <div class="t_title">
    20. Contact Us
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