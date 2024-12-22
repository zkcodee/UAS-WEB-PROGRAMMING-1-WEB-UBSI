const scroll = document.querySelector(".scrollup");
const header = document.querySelector("header");

window.onscroll = () => {
  if (window.scrollY > 100) {
    header.classList.add("bg-white");
    header.classList.add("border-b");
    header.classList.add("border-slate-100");
  } else {
    header.classList.remove("bg-white");
    header.classList.remove("bg-transparent");
    header.classList.remove("border-b");
    header.classList.remove("border-slate-100");
  }

  if (window.scrollY > 350) {
    scroll.classList.add("scrollup_show");
  } else {
    scroll.classList.remove("scrollup_show");
  }
};

scroll.addEventListener("click", (e) => {
  e.preventDefault();

  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
