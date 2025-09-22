// Hamburger Menu Toggle
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});

// Smooth Scroll for Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", function(e) {
    e.preventDefault();
    document.querySelector(this.getAttribute("href"))
      .scrollIntoView({ behavior: "smooth" });
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const btn = document.querySelector('.mobile-menu-button');
  const menu = document.querySelector('.menu');
  if (btn && menu) {
    btn.addEventListener('click', () => menu.classList.toggle('open'));
  }
});
