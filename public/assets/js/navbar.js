function setChangeNavbar() {
  if (event.target.checked) {
    document.querySelector(".icon-open").classList.add("transform");
    document.querySelector(".icon-open").classList.add("rotate-90");
    document.querySelector(".icon-open").classList.add("ease-in-out");
    document.querySelector(".icon-open").classList.add("duration-300");
    document.querySelector(".icon-open").classList.add("hidden");

    document.querySelector(".icon-close").classList.remove("hidden");
    document.querySelector(".icon-close").classList.add("transform");
    document.querySelector(".icon-close").classList.add("rotate-90");
    document.querySelector(".icon-close").classList.add("ease-in-out");
    document.querySelector(".icon-close").classList.add("duration-300");
    document.querySelector(".icon-close").classList.add("block");
  } else {
    document.querySelector(".icon-open").classList.remove("transform");
    document.querySelector(".icon-open").classList.remove("rotate-90");
    document.querySelector(".icon-open").classList.remove("ease-in-out");
    document.querySelector(".icon-open").classList.remove("duration-300");
    document.querySelector(".icon-open").classList.remove("hidden");
    document.querySelector(".icon-open").classList.add("block");

    document.querySelector(".icon-close").classList.add("hidden");
    document.querySelector(".icon-close").classList.remove("transform");
    document.querySelector(".icon-close").classList.remove("rotate-90");
    document.querySelector(".icon-close").classList.remove("ease-in-out");
    document.querySelector(".icon-close").classList.remove("duration-300");
    document.querySelector(".icon-close").classList.remove("block");
  }
}
