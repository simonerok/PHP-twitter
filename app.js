const burger = document.querySelector(".burger");
const nav = document.querySelector("nav");

burger.addEventListener("click", () => {
  // toggle nav
  nav.classList.toggle("active");

  // toggle icon
  burger.classList.toggle("open");
});

/* LIKE AND UNLIKE */
const icon = document.getElementById("like-icon");
icon.addEventListener("click", function () {
  this.classList.toggle("fa-regular");
  this.classList.toggle("fa-solid");
});
