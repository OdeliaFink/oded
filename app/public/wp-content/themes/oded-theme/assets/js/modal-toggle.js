document.addEventListener("DOMContentLoaded", function () {
    const clients = document.querySelectorAll(".client-name");
    const hoverCard = document.getElementById("hover-card");
    console.log("HOVER CARD", hoverCard);
    clients.forEach(client => {
      client.addEventListener("mouseenter", function (e) {
        const clientName = this.dataset.client;
        const service = this.dataset.service;
        const responsibilities = this.dataset.responsibilities;
        const techStack = this.dataset.techStack;
        const description = this.dataset.description;
  
        // Populate hover card content
        hoverCard.querySelector("#card-client").textContent = clientName;
        hoverCard.querySelector("#card-service").textContent = service;
        hoverCard.querySelector("#card-responsibilities").textContent = responsibilities;
        hoverCard.querySelector("#card-stack").textContent = techStack;
        hoverCard.querySelector("#card-description").textContent = description;
  
        // Get hover card dimensions
        const hoverCardRect = hoverCard.getBoundingClientRect();
        const cardWidth = hoverCardRect.width;
        const cardHeight = hoverCardRect.height;
  
        // Calculate default position
        let left = e.clientX + 1; // Default position: 10px to the right of the cursor
        let top = e.clientY + 1; // Default position: 10px below the cursor
  

        
        // Ensure the card stays fully within the viewport with a 20px margin
        const margin = 40;
  
        // Adjust if the card goes beyond the right edge
        if (left + cardWidth + margin > window.innerWidth) {
          left = window.innerWidth - cardWidth - margin;
        }
  
        // Adjust if the card goes beyond the left edge (optional, for small screens)
        if (left < margin) {
          left = margin;
        }
  
        // Adjust if the card goes beyond the bottom edge
        if (top + cardHeight + margin > window.innerHeight) {
          top = window.innerHeight - cardHeight - margin;
        }
  
        // Apply calculated position
        hoverCard.style.left = `${left}px`;
        hoverCard.style.top = `${top}px`;
  
        // Show the hover card
        hoverCard.style.display = "block";
        hoverCard.classList.remove("hidden");
      });
  
      client.addEventListener("mouseleave", function () {
        // Hide the hover card
        hoverCard.style.display = "none";
        hoverCard.classList.add("hidden");
      });
    });
  });
  