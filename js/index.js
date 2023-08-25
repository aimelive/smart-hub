var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");
var closeBtn = document.getElementById("closeModal");

btn.addEventListener("click", () => {
  modal.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
});
