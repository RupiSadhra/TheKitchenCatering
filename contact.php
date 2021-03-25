<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link href="./styles.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="functions.js" type="text/javascript"></script>
</head>
<body>

    <div class="contact-container">
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

<div class="logo"></div>
    <div class="contact-image">
        <div class="hero-text">Book us for your next event...</div>
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
    <section class="contactSection">
        
    
        <div class="two">
            <h4>  ORDER NOW</h4><hr>
            <div >
                <p class='order-now'>096347358</p>
                <p class='order-now'>info@kitchencatering.co.nz</p>
                <p>Order any time of the day and we'll get back to you A.S.A.P </p>
            </div>
           
        </div>
    
        <div class="three">
          
            <div class="contact-bg"></div>
       <div class="contact-enquiry-form">
       <p>Contact our team for order and for general enquiries.</p>
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
        
    
    
       
    </section>
</div>

<br><br><br><br><br><br><br><br>
<?php include('./footer.php')?>
</body>
</html>