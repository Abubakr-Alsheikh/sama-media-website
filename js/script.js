// start global
console.log("Hello to Sama Media");
document.addEventListener("DOMContentLoaded", () => {
  // setLanguage(localStorage.getItem("language"));
});

window.addEventListener("scroll",()=>{
  
});

// end global

// start header
const links = document.querySelectorAll("header .toggle .nav-links li");
links.forEach((element) => {
  element.addEventListener("click", function () {
    document.querySelector(".active").classList.remove("active");
    element.setAttribute("class", "active");
  });
});
// end header

// start main

// end main

// start servises

// end servises

// start projects

// end projects

// start clients

// end clients

// start hire

// end hire
