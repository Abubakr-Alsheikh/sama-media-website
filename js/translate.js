//start import
// import language from "./languages.json" assert { type: "json" };
let language = {
  en: {
    main: "Main",
    servises: "Servises",
    projects: "Projects",
    clients: "Clinets",
    hire: "Hire",
    "main-title": "Welcome to Sama Media",
    "main-paragraph": "this is our site.",
    "main-projects": "See Our Projects",
  },
  ar: {
    main: "الرئيسية",
    servises: "الخدمات",
    projects: "المشاريع",
    clients: "العملاء",
    hire: "توظيف",
    "main-title": "مرحبا بكم في سما ميديا",
    "main-paragraph": "هذا هو موقعنا.",
    "main-projects": "انظر الى مشاريعنا",
  },
};
//end import

// start translate
document.querySelectorAll("header nav .language ul li").forEach((element) => {
  element.addEventListener("click", () => {
    const lang = element.querySelector("span").getAttribute("data-lang");
    localStorage.setItem("language", lang);
    setLanguage(lang);
  });
});
function setLanguage(lang) {
  document.querySelectorAll("[data-trans]").forEach((item) => {
    const c = item.getAttribute("data-trans");
    item.innerHTML = language[lang][c];
    if (lang == "ar") {
      document.body.dir = "rtl";
    } else {
      document.body.dir = "ltr";
    }
  });
}
// end translate
