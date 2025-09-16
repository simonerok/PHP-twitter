document.addEventListener("DOMContentLoaded", () => {
  const nav = document.getElementById("site-nav");
  const burger = nav.querySelector(".burger-menu");

  // Add a click event to the burger menu button
  burger.addEventListener("click", () => {
    // Toggle the 'is-open' class on the nav and store the result (true if added, false if removed)
    const open = nav.classList.toggle("is-open");
    // Set aria-expanded to "true" or "false" (String(open) converts the boolean to a string)
    burger.setAttribute("aria-expanded", String(open));
    // Update the aria-label for accessibility
    burger.setAttribute("aria-label", open ? "Close navigation menu" : "Open navigation menu");
  });
});
