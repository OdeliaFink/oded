document.addEventListener("DOMContentLoaded", function () {
  const clients = document.querySelectorAll(".client-name");
  const hoverCard = document.getElementById("hover-card");

  clients.forEach(client => {
      client.addEventListener("mouseenter", function (e) {
          const clientName = this.dataset.client;
          const service = this.dataset.service;
          const responsibilities = this.dataset.responsibilities;
          const techStack = this.dataset.techStack;
          const description = this.dataset.description;

          hoverCard.querySelector("#card-client").textContent = clientName;
          hoverCard.querySelector("#card-service").textContent = service;
          hoverCard.querySelector("#card-responsibilities").textContent = responsibilities;
          hoverCard.querySelector("#card-stack").textContent = techStack;
          hoverCard.querySelector("#card-description").textContent = description;

          hoverCard.style.top = `${e.clientY + 10}px`;
          hoverCard.style.left = `${e.clientX + 10}px`;
          hoverCard.style.display = "block";
          hoverCard.classList.remove("hidden");
      });

      client.addEventListener("mouseleave", function () {
          hoverCard.style.display = "none";
          hoverCard.classList.add("hidden");
      });
  });
});
