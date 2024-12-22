if (document.querySelector(".video-open")) {
  document.body.insertAdjacentHTML(
    "beforeend",
    `
		<div class="video_popup">
          <div class="video_popup-overlay"></div>
          <div class="video_popup-content">
            <div class="video_popup-layer"></div>
            <div class="video_popup-container w-[100%] md:w-[80%]">
              <div class="video_popup-align">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="about:blank"></iframe>
                </div>
              </div>
              <div class="video_popup-close"></div>
            </div>
          </div>
        </div>
		`
  );
}

const videoOpen = document.querySelector(".video-open");
const videoClose = document.querySelector(".video_popup-close");

videoOpen.addEventListener("click", (e) => {
  e.preventDefault();
  let url = e.target.parentElement.getAttribute("href");

  document.querySelector(".video_popup-container iframe").src = url;
  document.querySelector(".video_popup").classList.add("active");
});

videoClose.addEventListener("click", (e) => {
  e.preventDefault();
  document.querySelector(".video_popup").classList.remove("active");
  document.querySelector(".video_popup-container iframe").src = "";
});
