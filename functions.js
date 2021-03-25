 
    function showMenu()
    {
        var toggleMenu=document.querySelector('.toggle-menu');
        console.dir(toggleMenu);
        console.log('show menu');
        toggleMenu.classList.remove('toggle-menu');
        toggleMenu.classList.add('toggle-menu-show');
   
    }

    function closeMenu()
    {
            let toggleMenus=document.querySelector('.toggle-menu-show');
        //console.dir(toggleMenus);
        console.log('close menu');
            toggleMenus.classList.remove('toggle-menu-show');
            toggleMenus.classList.add('toggle-menu');
    }

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





function validateMyForm()
{console.log("called");
     let name=$('#fname').val();
     let email=$('#femail').val();
     let message=$('#fmessage').val();
     let submit=$('#fsubmit').val();


     var xhttp=new XMLHttpRequest();

     xhttp.onreadystatechange=function(){
     // {console.log(this.readyState +"...."+this.status);
         if(this.readyState==4 && this.status==200)
         {
             document.querySelector(".errorMessage").innerHTML=this.responseText;
             console.log(this.responseText);
         }
}
     xhttp.open('GET','formhandler.php?name='+name+'&email='+email+'&message='+message+'&submit='+submit,true);
     xhttp.send();
}


function testimonial()
{
    const testimonials=["We were really very impressed with your punctuality and the quantity and quality of the food provided. Especially flexibility in catering for more people than was originally expected was a great favour.",
    "Thank you very much for the fabulous food & service at our wedding. All the guests commented on how good the food was. Please pass our thanks on to your staff as well. Thanks again.", 
    "The quality of the food was far superior to anything I imagined, and so many of our guests commented about how delicious it was. I will definitely recommend you to any friends who are throwing parties up here!"];
    const sliderValue=document.querySelector('#slider-value');
  
   
    let i=0;
    const timer=setInterval(()=>{
     if(i==testimonials.length)
        {
            i=0;
        }
        sliderValue.innerHTML=testimonials[i];
       
        i++;
    
    },3000)  

} 



