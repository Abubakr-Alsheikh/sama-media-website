// start global
console.log("Hello to Sama Media");
// end global

// start header

let links = document.querySelectorAll("header .toggle .nav-links li");
links.forEach((element) => {
  element.addEventListener("click", function () {
    links.forEach(function (e) {
      e.removeAttribute("class");
    });
    element.setAttribute("class", "active");
  });
});
document.body.dir = "rtl";
// let lang = document.querySelector("header .language ul");
// document.querySelector("header .language i").addEventListener("click",function(){
//     lang.style.display="block";
//     lang.style.position = "absolute";
// });

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
