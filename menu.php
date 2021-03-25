<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="./styles.css" rel="stylesheet">
    <script src="functions.js" type="text/javascript"></script>
</head>
<body>
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
        <div class="menu-image">
            <div class="hero-text">Check out our menus...</div>

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
       
        <div class="menu-content">
          
            <div class="column1">
                <img src="./images/photo-1529042410759-befb1204b468.jpg">
            </div>

            <div class="column2">
            <div class="menu-bg"></div>


               <div class="menus">
                    <h2>Our menus</h2>
                   
                    <ul>
                        <li><a style="text-decoration: none; color: #373737;" href='./files/The Menu.pdf' target="_blank">Lunch menu</a></li>
                        <li><a style="text-decoration: none; color: #373737;" href='./files/Finger Food Menu.pdf' target="_blank">Finger Food menu</a></li>
                        <li><a style="text-decoration: none; color: #373737;" href='./files/Buffet Menu .pdf' target="_blank">Buffet menu</a></li>
                    </ul>
               </div>
            </div>
        </div>
    </div>
<br><br><br><br><br><br><br><br><br><br><br>
    <?php include('footer.php');?>
</body>
</html>