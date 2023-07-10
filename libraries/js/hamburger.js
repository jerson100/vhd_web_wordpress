const handler = () => {
    const hamburger = document.querySelector(".hamburger");
    const navigator = document.querySelector(".navigator");
    const btn_close = document.querySelector(".navigator__close");
    hamburger.addEventListener("click", (e) => {
      hamburger.classList.toggle("active");
      navigator.classList.toggle("active");
      if (hamburger.classList.contains("active")) {
        document.body.style.overflow = "hidden";
      } else {
        document.body.style.overflow = "";
      }
    });
    btn_close.addEventListener("click", (e) => {
      hamburger.classList.remove("active");
      navigator.classList.remove("active");
      document.body.style.overflow = "";
    });
    window.addEventListener("resize", (e) => {
      if (window.innerWidth >= 1024) {
        hamburger.classList.remove("active");
        navigator.classList.remove("active");
        document.body.style.overflow = "";
      } else {
        document.body.style.overflow = "";
        // hamburger.classList.add("active");
        // navigator.classList.add("active");
      }
    });
  };
  
  export { handler };
  