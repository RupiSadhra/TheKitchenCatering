<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="./styles.css" rel="stylesheet">
    <script src="functions.js" type="text/javascript"></script>
<body>

    <div class="gallery-container">
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
    <div class="gallery-image">
        <div class="hero-text">Some pictures of our work...</div>
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
        
        <div class="gallery-grid">
            <img onclick="showImage()" src="./images/christina-victoria-craft-FzRpRKmLHpY-unsplash.jpg">
            <img  onclick="showImage()" src="./images/g12.jpg">
            <img  onclick="showImage()"src="./images/g13.jpg">
            <img  onclick="showImage()"src="./images/g8.jpg">
            <img   onclick="showImage()"src="./images/green-salad-2383398.jpg">
            <img onclick="showImage()" src="./images/close-up-of-meal-served-in-plate-306059.jpg">
            <img onclick="showImage()" src="./images/close-up-photo-of-vegetable-sandwich-on-plate-1647163.jpg">
            <img  onclick="showImage()"src="./images/slice-of-eggs-on-cakes-793785.jpg">
            <img  onclick="showImage()"src="./images/jose-tebar-rlcIcF532ns-unsplash.jpg">
            
<div class="image-container">
                <div class="modal-button">
                    <img class="close-button" onclick="hideModal()" src="./images/close-512.png">
                </div>
              
                    <img class="modal-image" src="" alt="Cannot display image">
                
            </div>
           
        </div>

       
    </div>

    <script>
function hideModal()
{
    var imagemodal=document.querySelector('.image-container');
 
    imagemodal.classList.remove('image-modal');
}
function showImage()
{
    // var images=document.querySelectorAll('img');
    // console.dir(images);
     console.log(event);
     let src=event.path[0].src;
     console.log(`src....${event.path[0].src}`);

    var imagemodal=document.querySelector('.image-container');
    // console.dir(imagemodal);
    imagemodal.classList.add('image-modal');
    
    var image=document.querySelector('.modal-image');
   console.log(`image...${image}`);
    image.src=src;
 
}
</script>
<br><br><br><br><br><br><br><br><br><br><br>
</body>
<?php include('./footer.php')?>
</html>