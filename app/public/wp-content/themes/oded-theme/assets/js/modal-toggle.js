document.addEventListener("DOMContentLoaded", function () {
  const clients = document.querySelectorAll(".client-name");
  const hoverCard = document.getElementById("hover-card");
  const cardImage = document.getElementById("card-image");
  let showTimeout, hideTimeout;

  clients.forEach(client => {
      client.addEventListener("mouseenter", function (e) {
          clearTimeout(hideTimeout); // Prevent hiding when moving between elements

          showTimeout = setTimeout(() => {
              const clientName = this.dataset.client;
              const service = this.dataset.service;
              const responsibilities = this.dataset.responsibilities;
              const techStack = this.dataset.techStack;
              const description = this.dataset.description;
              const imageUrl = this.dataset.image;

              // Populate hover card content
              hoverCard.querySelector("#card-client").textContent = clientName;
              hoverCard.querySelector("#card-service").textContent = service;
              hoverCard.querySelector("#card-responsibilities").textContent = responsibilities;
              hoverCard.querySelector("#card-stack").textContent = techStack;
              hoverCard.querySelector("#card-description").textContent = description;

              // Set image dynamically
              if (imageUrl) {
                  cardImage.src = imageUrl;
                  cardImage.classList.remove("hidden");
              } else {
                  cardImage.src = "";
                  cardImage.classList.add("hidden");
              }

              // Ensure correct positioning
              const cardWidth = hoverCard.offsetWidth;
              const cardHeight = hoverCard.offsetHeight;
              let left = e.clientX + 20;
              let top = e.clientY + 20;

              if (left + cardWidth > window.innerWidth) left = window.innerWidth - cardWidth - 10;
              if (top + cardHeight > window.innerHeight) top = window.innerHeight - cardHeight - 10;

              hoverCard.style.left = `${left}px`;
              hoverCard.style.top = `${top}px`;

              // Apply fade-in effect
              hoverCard.classList.add("visible");
              hoverCard.classList.remove("hidden");
          }, 150); // Small delay to prevent flicker
      });

      client.addEventListener("mouseleave", function () {
          clearTimeout(showTimeout);

          hideTimeout = setTimeout(() => {
              hoverCard.classList.remove("visible");
              setTimeout(() => {
                  hoverCard.classList.add("hidden");
              }, 300); // Matches CSS transition
          }, 200);
      });
  });
});
