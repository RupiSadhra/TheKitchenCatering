<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Kitchen Catering - Auckland Caterers</title>
    <meta description="Yum finger food and nibbles for your team. Catering in One Tree Hill, Hillsborough, Ellerslie, Panmure, Penrose, Mt Wellington, The Airport, Airport Oaks, Mangere and Mangere Bridge" />
    <meta keywords="Catering, Caterers, Cater, Cattering, Catterers, Catter, Catarer, Cataring, Catar, Finger Food, Nibbles, Sushi, Spring Rolls, Savouries, Pies, Auckland, Onehunga, One Tree Hill, Hillsborough, Ellerslie, Panmure, Penrose, Mt Wellington, The Airport, Airport Oaks, Mangere, Mangere Bridge" />
    <link href="./styles.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="functions.js" type="text/javascript"></script>
    
</head>
<body onload="testimonial()">
    
<div class="toggle-menu">
             <div class="toggle-navbar">
                <ul class="toggle-navigation-links">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="menu.php">Menu</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>

                <div class="toggle-close" onclick="closeMenu()"><img src="./images/close-512.png"></div>
             </div>

             
    </div>
   
    <div class="first-container">
        <!-- logo -->
        <div class="logo"></div>
        
        <div class="hero-image">
            <div class="hero-overlay"></div>
            <div class="hero-text"><h1>THE KITCHEN CATERING</h1><p>Let us do the work...</p></div>

            <div class="navbar">
                <ul class="navigation-links">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="menu.php">Menu</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
             </div>
        </div>

        <div class="toggle-button" onclick="showMenu()">
                <span class="toggle-lines"></span>
                <span class="toggle-lines"></span>
                <span class="toggle-lines"></span>
        </div>

    
    </div>


 <div class="second-container">
 <p>The Kitchen Catering is one of the most trusted catering companies in Auckland, providing high-quality and reliable corporate catering, event catering, private party catering and wedding catering throughout the greater Auckland region. With a long list of satisfied customers, we have been continuing the family tradition of offering the highest quality food using only the freshest ingredients for your weddings, corporates events, and private functions.Whatever the occasion, The Kitchen Catering have the perfect solution at the right price, including cheap catering options for smaller budgets. We are happy to discuss your specific budgetary or dietary requirements, such as vegetarian, paleo, or gluten free.With our flexible food transport and preparation vehicles, The Kitchen Catering are able to cater for events throughout the Greater Auckland Region. We can even cater to events throughout the Upper North Island if requested. We pride ourselves on our quality food, professional service, and also our flexibility to supply you the best meal options wherever you might be.</p>
 </div>

    <div class="testimonial-container">
        <div class="testimonial-overlay"></div>
        <div style=" width:100%"class="slider" >
            <span id="slider-value"></span>
           
           <span id="quotation-one">&#8220;</span>
           <span id="quotation-two">&#8221;</span>
        </div>
    </div>

  

    <div class="grid-container">
        <div class="bg-1"></div>
        <div class="about-text-1 about-text">
            <h3>It&#39;s the food we all love</h3><br>

            <span>The menu has been selected through 15+ years of trial and error. We can adapt it so easily to suit any situation and there is enough choice to keep the whole team coming back for more!
            </span>
        </div>
        <div class="about-text">
            <h3>It&#39;s the service that gets remembered</h3><br>
            <span>We know our stuff when it comes to catering for any event, whether it be corporate meetings, events, seminars - or perhaps you want to treat the team for working so hard (good on them!). Either way, contact our team and we&#39;ll help you order right - couldn&#39;t be easier!</span>
        </div>    
        <div class="bg-2"></div>
        <div class="bg-3"></div>
        <div  class="about-text about-text-3">
        <h3>It&#39;s the menu that is easy on the pocket</h3><br>
            <span>Our food is easy to swallow, and the prices are too! We deal direct with some of the best suppliers in the Country so you&#39;ll be guaranteed great quality food on any budget.</span>
        </div>
    </div>
   
    <div class="enquiry-container">
        <div class="enquiry-overlay"></div>
       <div class="enquiry-form">
           <form id="contact-form" onsubmit="event.preventDefault(); validateMyForm();">
               <input type="text" placeholder="Enter your name" id="fname" name="fname">
             

               <input type="email" placeholder="Enter your email" id="femail" name="femail">
              
               <textarea cols="100" rows="6" placeholder="Enter your message" id="fmessage" name="fmessage"></textarea>
             
               <input type="submit" id="fsubmit" name="fsubmit" value="SUBMIT"></button>
           </form>

           <div style="color:white; font-size:1.5em; text-align:center; "class="errorMessage ">
                  
            </div>
       </div> 
    </div>

   
    <?php include('./footer.php');?>
  


</body>
</html>