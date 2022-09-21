<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exellent Solutions Co</title>
<head>

<meta charset="utf-8">

<!-- header  -->

<div class="header">
    <a href="#Arabic">Arabic</a>
    <input type="text" placeholder="Search here.." name="search">
</div>
</head>

<!-- Company name logo & about us  -->
<body>
  <!-- other pages links: Css & Javascript-->
<link rel="stylesheet" type="text/css" href="http://localhost:8888/login/css/bootstrap.min.css" />
<link href="ESCoCss.css" type="text/css"rel="stylesheet">
<script src="Java.js" defer></script>

  <nav>
  <div class="textF">
   <img src="img/Untitled_Artwork 9.jpg">
   <div class="name">
    <h1>Exellent Solutions Co</h1> 
    <h2> شركة الحلول الممتازة </h2>
   </div>
   <div class="bar">
       <a href="#Home">Home</a>
       <a href="#SJ">Search Jobs</a>
       <a href="">Our Clints</a>
       <a href="#Contact Us">Contact Us</a>
       <a href="#About Us">About Us</a>
       <div class="logIn">
       <a href="#Log in">LOG IN</a>
       </div>
       <a href="#REGISTER">REGISTER</a>
    </div>
   </div>
  </nav>
<section class="JoinUs">

  <input type="text" placeholder="Keyword" name="Keyword">

  <select class="minimal" required>
  <option value="">- Search Jobs -</option>
  <option>Bancking </option>
  <option>Accounting </option>
</select>
  <button type="button"><img src="img/magnifying-glass.png" style="width: 20px; height: 20px;"></button>
  </section>
<section class="HowCanWeServeYou-section">

<div class="HowCanWeServeYou">
  <p> How can we help you?</p>
</div>

<table>
  <tr class="OurServices">
<th>

  <img src="img/employee.png">

</th>
<th>
  <div class="OurServices2_Img">
  <img src="img/call-center-2.png">
  </div>
</th>
<th>
  <div class="OurServices3_Img">
  <img src="img/consultant-services.png">
  </div>
</th>
<th>
  <div class="OurServices4_Img">
  <img src="img/planning.png">
  </div>
  </th>
</tr>

 
  <tr class="OurServicestext">
    <th>
  <button typ="button" data-modal-target="#modal" > <p>Manpower Solutions </p></button>
    </th>
    <th>
  <button typ="button"  data-ModalCallCenter-target="#ModalCallCenter" > <p>Call Center Services</p></button>
  </th>
  <th>
  <button typ="button"> <p>Management Consultations</p></button>
  </th>
  <th>
  <button typ="button" > <p>Debt Collection Services</p></button>
  </th>
</tr>


</table>

  </section>



<!--the windiow that will open if the user clic on Manpower button-->

<div class="modal" id="modal" >
<img src="img/employee.png">
<h1>Manpower Services Request</h1>
<p>* Fill in the filed to comform your request, and we will contact you as soon as possible.</p>

<div class="ModalManpower-Input" >
<div class="ModalManpower-CompanyName" id="CompanyName">
<input typ="companyNamw" placeholder="Company Name" required>
</div>
<div class="ModalManpower-Email" id="Email">
  <input typ="Email" placeholder="Email" required>
</div>
<div class="ModalManpower-Subjct" id="Subjct">
  <input typ="Your Subjct" placeholder="Subjct" required>
</div>
</div>
<div class="ModalManpower-Massage" id="Massage">
  <textarea type="Massage" placeholder="Massage" required></textarea>
</div>
<div class="close-button">
<button typ="button" id="Send" >Send</button>
<button data-modal-button class="close-button"> Done</button>
</div>
</div>
<div  id="overlay"></div>


<!--the windiow that will open if the user clic on CallCenter button-->

<div class="ModalCallCenter" id="ModalCallCenter" >
<img src="img/call-center-2.png">
<h1>CallCenter Services Request</h1>
<p>* Fill in the filed to comform your request, and we will contact you as soon as possible.</p>

<div class="CallCenter-Input" >
<div class="CallCenter-CompanyName" id="CompanyName">
<input typ="companyNamw" placeholder="Company Name" required>
</div>
<div class="CallCenter-Email" id="Email">
  <input typ="Email" placeholder="Email" required>
</div>
<div class="CallCenter-Subjct" id="Subjct">
  <input typ="Your Subjct" placeholder="Subjct" required>
</div>
</div>
<div class="CallCenter-Massage" id="Massage">
  <textarea type="Massage" placeholder="Massage" required></textarea>
</div>
<div class="CallCenter-close-button">
<button typ="button" id="Send" >Send</button>
<button data-modalCallCenter-button class="CallCenter-close-button"> Done</button>
</div>
</div>
<div  id="overlayCallCenter"></div>



<div class="AchievementsClints">
<section class="Achievements">
<h1> Our Achievements </h1>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="GL/p1.jpg" >
  </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="GL/p3.jpg">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="GL/p2.jpg" >
</div>

</div>
</section>


<div class="ourClint" id="ourClint">
  <div class="ourClintContant">
    <div class="bar-ourClintContant">
    <h1> Our Clients</h1>
    </div>
    <div class="ButtonOurClintContant">
    <a href="https://tamwily.com" ><button type="button"><img src="img/tamwily.png" style="width:100%" ></button></a>
    <a href="https://www.stats.gov.sa"><button type="button"><img src="img/GAS.png" style="width:100%"></button></a>
    <a href="https://www.gib.com/ar"><button type="button"><img src="img/gib.png" style="width:100%"></button></a>
    <a href="https://alrajhibank.com.sa"><button type="button"><img src="img/alrj.png" style="width:100%"></button></a>
    <a href="https://www.zain.com/ar"><button type="button"><img src="img/zainee.png" style="width:100%"></button></a>
    <a href="https://dxb.samba.com/en/personal-banking/index.aspx"><button type="button"><img src="img/samba.png" style="width:100%"></button></a>


    <a href="https://tamwily.com" ><button type="button"><img src="img/tamwily.png" style="width:100%" ></button></a>
    <a href="https://www.stats.gov.sa"><button type="button"><img src="img/GAS.png" style="width:100%"></button></a>
    <a href="https://www.gib.com/ar"><button type="button"><img src="img/gib.png" style="width:100%"></button></a>
    <a href="https://alrajhibank.com.sa"><button type="button"><img src="img/alrj.png" style="width:100%"></button></a>
    <a href="https://www.zain.com/ar"><button type="button"><img src="img/zainee.png" style="width:100%"></button></a>
    <a href="https://dxb.samba.com/en/personal-banking/index.aspx"><button type="button"><img src="img/samba.png" style="width:100%"></button></a>



    <a href="https://tamwily.com" ><button type="button"><img src="img/tamwily.png" style="width:100%" ></button></a>
    <a href="https://www.stats.gov.sa"><button type="button"><img src="img/GAS.png" style="width:100%"></button></a>
    <a href="https://www.gib.com/ar"><button type="button"><img src="img/gib.png" style="width:100%"></button></a>
    <a href="https://alrajhibank.com.sa"><button type="button"><img src="img/alrj.png" style="width:100%"></button></a>
    <a href="https://www.zain.com/ar"><button type="button"><img src="img/zainee.png" style="width:100%"></button></a>
    <a href="https://dxb.samba.com/en/personal-banking/index.aspx"><button type="button"><img src="img/samba.png" style="width:100%"></button></a>



    <a href="https://tamwily.com" ><button type="button"><img src="img/tamwily.png" style="width:100%" ></button></a>
    <a href="https://www.stats.gov.sa"><button type="button"><img src="img/GAS.png" style="width:100%"></button></a>
    <a href="https://www.gib.com/ar"><button type="button"><img src="img/gib.png" style="width:100%"></button></a>
    <a href="https://alrajhibank.com.sa"><button type="button"><img src="img/alrj.png" style="width:100%"></button></a>
    <a href="https://www.zain.com/ar"><button type="button"><img src="img/zainee.png" style="width:100%"></button></a>
    <a href="https://dxb.samba.com/en/personal-banking/index.aspx"><button type="button"><img src="img/samba.png" style="width:100%"></button></a>


    </div>
  </div>
</div>
  



</div>


<div class="footer">
  <div class="callUs">
<section >
 <img src="img/telephone.png"><p>920003306</p>
 <img src="img/hand-phone.png"><p>+966-11-4196560</p>
 <img src="img/fax.png"><p>+966-11-4198490</p>
 <a href=""><img src="img/email.png"><p>info@es-saudi.com</p></a>
</section>
  </div>
  
 
  <div class="social"> 
  <section>
  <a href="https://twitter.com/es_saudis"><img src="img/twitter.png"> es_saudis</a><br>
  <a href="https://www.instagram.com/es_saudi/"><img src="img/instagram.png"> es_saudis</a><br>
  <a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGFHPvTu8wWhAAAAYL86Uf4-LdPmuCw--SWj0rrFW0p0GO1etSQqhf5-Ym4oqScXmFDG6ZaBHAiAGRNR0VZGegA8i4VhgqOUEK1QcpnfesekkJHOUuzUB9VxUum2WfK20bn8Rk=&original_referer=https://www.es-saudi.com&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fexcellent-solutions-co.%3Ftrk%3Dbiz-companies-cym"><img src="img/linkedin.png"> es_saudis</a><br>
  <a href="https://www.facebook.com"><img src="img/facebook.png"> es_saudis</a><br><br>
  </div>
  </section>

  <div class="map">
  <a href="https://www.google.com.sa/maps/place/Excellent+Solutions+Co./@24.7135714,46.6722242,17z/data=!3m1!4b1!4m5!3m4!1s0x3e2f02d2ecd7ef3d:0x3229445b2ecfbed9!8m2!3d24.7135714!4d46.6722242?hl=en"><img src="img/location.png"> Kingdom of Saudi Arabia - Riyadh - King Fahd Road - Al Olaya View Mall - Head Office - 2nd F - 4001 P.O.Box:  285006     Zip-code / Riyadh  11323 </a><br>

  </div>
  </div>


</body>
</html>