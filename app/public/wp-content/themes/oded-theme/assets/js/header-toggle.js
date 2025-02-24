import {
  animate,
  stagger,
  inView,
  scroll
} from "https://cdn.jsdelivr.net/npm/motion@11.11.13/+esm";

document.addEventListener("DOMContentLoaded", () => {
  // State variables
  let menuState = false;
  let pauseListener = false;

  // Select elements
  const menuToggle = document.getElementById("hamburger");
  const menu = document.getElementById("menu");
  const menuItems = document.querySelectorAll("header nav li");
  const menuItemsArray = Array.from(menuItems);
  const menuItemsLinks = document.querySelectorAll("header nav li a");
  const menuItemsLinksArray = Array.from(menuItemsLinks);
  const tick = document.querySelector(".ticker");

  // Debugging checks
  if (!menuToggle) {
    console.error("Element #hamburger not found. Check your HTML structure.");
    return;
  }

  if (!menu) {
    console.error("Element #menu not found. Check your HTML structure.");
    return;
  }

  if (menuItemsArray.length === 0) {
    console.warn("No menu items (<li>) found. Menu animations may not work.");
  }

  if (menuItemsLinksArray.length === 0) {
    console.warn("No menu links (<a>) found. Link animations may not work.");
  }

  if (!tick) {
    console.warn(".ticker element not found. Skipping ticker animations.");
  }

  // Menu toggle function
  function checkMenuState() {
    if (menuState === false) {
      // Open menu
      animate(menuToggle, { rotate: "405deg" }, { ease: "circInOut", duration: 0.5 });
      menu.style.visibility = "visible";

      // Animate menu items
      const animateLi = animate(menuItemsArray, { opacity: 1 }, { delay: stagger(0.1) });
      const animateA = animate(menuItemsLinksArray, { y: [100, 0], opacity: 1 }, { delay: stagger(0.1) });
      // const animateA = animate(menuItemsLinksArray, { y: [20, 0], opacity: 1 });

      // Reset listener after animations complete
      animateA
        .then(() => {
          pauseListener = false;
        })
        .catch((err) => {
          console.error("Error during menu open animation", err);
          pauseListener = false;
        });

      // Reverse the arrays for the next animation
      menuItemsArray.reverse();
      menuItemsLinksArray.reverse();
      menuState = true;
    } else {
      // Close menu
      animate(menuToggle, { rotate: 0 }, { ease: "circInOut", duration: 0.5 });


      const animateA = animate(menuItemsLinksArray, { y: [0, 100], opacity: 0 }, { delay: stagger(0.1) });

      // Reset listener after animations complete
      animateA
        .then(() => {
          pauseListener = false;
          menu.style.visibility = "hidden";
        })
        .catch((err) => {
          console.error("Error during menu close animation", err);
          pauseListener = false;
        });

      // Reverse the arrays for the next animation
      menuItemsArray.reverse();
      menuItemsLinksArray.reverse();
      menuState = false;
    }
  }

  // Add click event listener for the menu toggle
  menuToggle.addEventListener("click", function () {
    console.log("Hamburger clicked. Current menuState:", menuState);
    if (pauseListener) {
      console.log("Click ignored. Animation in progress.");
      return;
    }
    pauseListener = true;
    checkMenuState();
  });

  // InView animation for <h2> elements
  const headers = document.querySelectorAll("h2");
  if (headers.length > 0) {
    inView("h2", (info) => {
      const animation = animate(info.target, { y: [100, 0] });
      return (leaveInfo) => animation.cancel();
    });
  } else {
    console.warn("No <h2> elements found. Skipping inView animations.");
  }

  
});
