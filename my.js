//alert("Доброе утро");
function changeBackground(color) {
    document.body.style.background = color;
 }
 
 window.addEventListener("load",function() { changeBackground('black') });


 const hamburger = document.querySelector(".hamburger");
 const navlinks = document.querySelector(".nav-links");
 const links = document.querySelectorAll(".nav-links li");

 hamburger.addEventListener("click", () => {
     navlinks.classList.toggle("open");
     links.forEach(link=> {
         link.classList.toggle("fade");
     });
 });