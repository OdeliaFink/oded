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
          // Alternate entry directions (left or right)
          const isLeft = index % 2 === 0; // Alternate left and right
          const xStart = isLeft ? '-150vw' : '150vw'; // Start from far outside viewport

          // Scroll-linked animation
          gsap.fromTo(
            card,
            {
              x: xStart, // Start far outside the viewport
              y: 0, // Neutral vertical position
              opacity: 0, // Fully hidden
            },
            {
              x: 0, // Move into position
              y: 0, // Stay aligned vertically
              opacity: 1, // Fade in
              duration: 1,
              ease: "none", // No easing (linear)
              scrollTrigger: {
                trigger: card,
                start: "top bottom", // Animation starts when card is at the bottom of the viewport
                end: "top 40%", // Animation ends when card reaches 20% of the viewport
                scrub: true, // Smooth animation tied to scroll position
              },
            }
          );
        });
      }, 500); // Timeout to ensure Slick carousel initializes first
 
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
