const userTexts = document.querySelectorAll(".user-text");
const userPics = document.querySelectorAll(".user-pic");

function changeReview() {
  for (userPic of userPics) {
    userPic.classList.remove("active-pic");
  }

  for (userText of userTexts) {
    userText.classList.remove("active-text");
  }

  let i = Array.from(userPics).indexOf(event.target);
  userTexts[i].classList.add("active-text");
  userPics[i].classList.add("active-pic");
}
