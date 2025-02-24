import { animate, stagger } from "https://cdn.jsdelivr.net/npm/motion@11.11.13/+esm";

document.addEventListener("DOMContentLoaded", () => {
  console.log("hero-text.js is loaded and running");

  // Select the hero text container
  const heroTextContainer = document.getElementById("hero-text");

  if (!heroTextContainer) {
    console.error("Element #hero-text not found. Check your HTML structure.");
    return;
  }

  // Split the text into words and wrap them in spans
  const text = heroTextContainer.textContent.trim();
  const words = text.split(" ").map((word) => `<span class="hero-word">${word}</span>`);
  heroTextContainer.innerHTML = words.join(" ");

  // Select all the word elements
  const wordElements = document.querySelectorAll(".hero-word");

  if (wordElements.length === 0) {
    console.warn("No words found in #hero-text after splitting.");
    return;
  }

  // Make the text container visible once everything is ready
  heroTextContainer.style.visibility = "visible";

  // Animate words sequentially
  animate(
    wordElements,
    { opacity: [0, 1], transform: ["translateY(50px)", "translateY(0)"] },
    { duration: 0.5, delay: stagger(0.2), ease: "easeOut" }
  ).then(() => {
    console.log("Hero text animation completed.");
  });
});
