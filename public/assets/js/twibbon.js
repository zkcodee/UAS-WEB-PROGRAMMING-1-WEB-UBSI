const canvas = document.getElementById("twibbon-canvas");
const inputWrapper = document.getElementById("wrapper-input");
const generateButton = document.getElementById("generate-button");
const downloadButton = document.getElementById("download-button");

const ctx = canvas.getContext("2d");
const frame = new Image();
frame.src = "./public/assets/img/illustration/twibbon.png";

let userImage = null;
let imgX = 0,
  imgY = 0;

let isDragging = false;

function drawCanvas() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  if (userImage) {
    ctx.drawImage(userImage, imgX, imgY, canvas.width, canvas.height);
  }
  ctx.drawImage(frame, 0, 0, canvas.width, canvas.height);
}

document
  .getElementById("upload-foto")
  .addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
      canvas.classList.remove("hidden");
      inputWrapper.classList.remove("mb-8");
      inputWrapper.classList.add("hidden");
      generateButton.classList.remove("hidden");

      const reader = new FileReader();
      reader.onload = function (e) {
        userImage = new Image();
        userImage.onload = function () {
          imgX = 0;
          imgY = 0;
          drawCanvas();
        };
        userImage.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });

function startDrag(event) {
  isDragging = true;
  canvas.style.cursor = "grabbing";

  const clientX = event.touches ? event.touches[0].clientX : event.clientX;
  const clientY = event.touches ? event.touches[0].clientY : event.clientY;

  startX = clientX;
  startY = clientY;
}

function drag(event) {
  if (isDragging && userImage) {
    const clientX = event.touches ? event.touches[0].clientX : event.clientX;
    const clientY = event.touches ? event.touches[0].clientY : event.clientY;

    const dx = clientX - startX; // Selisih posisi horizontal
    const dy = clientY - startY; // Selisih posisi vertikal

    imgX += dx;
    imgY += dy;

    startX = clientX;
    startY = clientY;

    drawCanvas();
  }
}

function endDrag() {
  isDragging = false;
  canvas.style.cursor = "grab";
}

canvas.addEventListener("mousedown", startDrag);
canvas.addEventListener("mousemove", drag);
canvas.addEventListener("mouseup", endDrag);
canvas.addEventListener("mouseleave", endDrag);

// Event drag-and-drop untuk mobile (touch)
canvas.addEventListener("touchstart", startDrag);
canvas.addEventListener("touchmove", drag);
canvas.addEventListener("touchend", endDrag);

generateButton.addEventListener("click", () => {
  generateButton.classList.add("hidden");
  downloadButton.classList.remove("hidden");
  downloadButton.href = canvas.toDataURL();
});
