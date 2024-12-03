// Dynamically load GSAP and ScrollTrigger
const scriptGsap = document.createElement('script');
scriptGsap.src = "https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js";
scriptGsap.onload = () => {
  const scriptScrollTrigger = document.createElement('script');
  scriptScrollTrigger.src = "https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js";
  scriptScrollTrigger.onload = () => {
    gsap.registerPlugin(ScrollTrigger);

    jQuery(document).ready(function ($) {
      // Initialize Slick Carousel
      $('.slick.marquee').slick({
        autoplay: false,
        slidesToShow: 4, // Default number of slides to show on desktop
        slidesToScroll: 1,
        infinite: false, // Do not loop
        arrows: true,
        dots: false,
        adaptiveHeight: true,
        accessibility: true,
        edgeFriction: 0.2,
        prevArrow: '<button class="slick-prev custom-arrow"></button>',
        nextArrow: '<button class="slick-next custom-arrow"></button>',
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2, // Show 2 slides on tablets
              slidesToScroll: 1,
              arrows: true,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1, // Show 1 slide on mobile
              slidesToScroll: 1,
              arrows: true,
            },
          },
        ],
      });

      // Refresh Slick after initialization
      $('.slick.marquee').slick('refresh');

      // GSAP ScrollTrigger Animations for Cards
      setTimeout(() => {
        const cards = document.querySelectorAll('.slick-slide');

        cards.forEach((card, index) => {
          // Determine entry direction based on index (left or right of viewport)
          const isLeft = index % 2 === 0; // Alternate left and right
          const xStart = isLeft ? '-100vw' : '100vw'; // Start from outside the viewport
          const yStart = Math.random() * 100 - 50; // Slight vertical randomness

          gsap.fromTo(
            card,
            {
              opacity: 0,
              x: xStart, // Start from outside viewport
              y: yStart, // Randomized vertical offset
              rotation: isLeft ? -10 : 10, // Slight rotation based on direction
            },
            {
              opacity: 1,
              x: 0,
              y: 0,
              rotation: 0, // Align perfectly in carousel
              duration: 1,
              ease: "power2.out",
              scrollTrigger: {
                trigger: card,
                start: "top 90%", // Trigger when card enters viewport
                end: "top 30%", // Animation duration based on scroll
                toggleActions: "play none none reverse", // Reverses animation on scroll up
              },
            }
          );
        });
      }, 500); // Timeout to ensure Slick carousel initializes first

      // `read-more` Button Functionality
      $('.read-more-container').on('click', function () {
        const container = $(this);
        const button = container.find('.read-more');
        const description = container.find('.description');
        const serviceContainer = container.closest('.service-container'); // Target .service-container

        if (description.is(':visible')) {
          // Hide the description, reset styles
          description.fadeOut(150, () => {
            button.fadeIn(150);
          });
          serviceContainer.css({
            backgroundColor: 'white', // Reset background color
            color: '#9FB99F',
            border: '1px solid #9FB99F', // Reset text color
          });
        } else {
          // Show the description, change styles
          button.fadeOut(150, () => {
            description.fadeIn(150);
          });
          serviceContainer.css({
            backgroundColor: '#9FB99F', // Set background color
            color: 'white', // Set text color
          });
        }
      });
    });
  };
  document.head.appendChild(scriptScrollTrigger);
};
document.head.appendChild(scriptGsap);
