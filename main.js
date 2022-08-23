let menu = document.querySelector('#menu_items');
menu.style.display="none";
let burger = document.querySelector('#menubar');
let closeNav = document.querySelector('#menuclose');

clickedMenu = burger.addEventListener('mousedown',()=>{
    
});

closedMenu = closeNav.addEventListener('mousedown',()=>{
    closeNav.display = "none";
});

function toggleIt(){

      
 


clickedMenu = burger.addEventListener('mousedown',()=>{
    menu.style.animation = "loadin 0.4s ease-in 0s 1";
    menu.style.display = "block";
    burger.style.display = "none";
    closeNav.style.display = "block";
   
});


closedMenu = closeNav.addEventListener('mousedown',()=>{
   
     closeNav.style.display = "none";
     burger.style.display = "block";
     menu.style.animation = "slide 0.4s ease-out 0s 1";
     menu.style.display="none"
   
    
});


}

  


       
    




 

