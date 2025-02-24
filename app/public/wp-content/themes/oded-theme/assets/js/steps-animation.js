document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollTrigger);

  // Animate each .step-box progressively as it scrolls into view
  document.querySelectorAll(".step-box").forEach((box) => {
    gsap.from(box, {
      opacity: 0,
      y: 50,
      duration: 1,
      scrollTrigger: {
        trigger: box, // Each .step-box triggers its own animation
        start: "top 80%", // Start animation when the top of the box is 80% from the top of the viewport
        toggleActions: "play none none reverse", // Play animation on scroll in, reverse on scroll out
      },
    });
  });
});
