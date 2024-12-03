jQuery(document).ready(function ($) {
  $('.slick.marquee').slick({
    autoplay: false,
    slidesToShow: 4, // Default number of slides to show on desktop
    slidesToScroll: 1,
    infinite: false, // Do not loop
    arrows: true, // Enable arrows
    dots: false, // Disable dots
    adaptiveHeight: true,
    accessibility: true,
    edgeFriction: 0.2,
    prevArrow: '<button class="slick-prev custom-arrow"></button>',
    nextArrow: '<button class="slick-next custom-arrow"></button>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2, // Show 1 slide on tablets
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


 

  // Initialize Slick with the arrow wrapping
  $('.slick.marquee').slick('refresh');

  

  $('.read-more-container').on('click', function () {
    const container = $(this);
    const button = container.find('.read-more');
    const buttonCont = container.find('.read-more-container');
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
        border: '1px solid #9FB99F' // Reset text color
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
