if (document.querySelector("#splide_productos")) {
  new Splide("#splide_productos", {
    type: "loop",
    perPage: 2,
    perMove: 1,
    autoplay: true,
    interval: 5000,
    pagination: false,
    arrows: true,
    gap: "1.3rem",
    pauseOnHover: false,
    pauseOnFocus: false,
    breakpoints: {
      1400: {
        arrows: false,
      },
      1000: {
        perPage: 1,
      },
    },
  }).mount();
}

if (document.querySelector("#splide_marcas")) {
  new Splide("#splide_marcas", {
    type: "loop",
    perPage: 3,
    perMove: 1,
    arrows: false,
    pagination: false,
    gap: "1.3rem",
    pauseOnFocus: false,
    pauseOnHover: false,
    breakpoints: {
      760: {
        perPage: 1,
      },
    },
  }).mount();
}

if (document.querySelector(".notice")) {
  let notices = Array.from(document.querySelectorAll(".notice")),
    preview = document.querySelector("#preview");

  notices.forEach((notice) => {
    notice.addEventListener("click", (e) => {
      let bg = e.currentTarget.getAttribute("data-bg");

      notices.forEach((n) => {
        if (n.children[0].classList.contains("bg-celeste")) {
          n.children[0].classList.remove("bg-celeste");
        }
      });

      if (!notice.children[0].classList.contains("bg-celeste")) {
        notice.children[0].classList.add("bg-celeste");
      }

      preview.src = bg;
    });
  });
}
