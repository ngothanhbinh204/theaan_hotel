

// jQuery(document).ready(function ($) {

//     var $carousel = document.querySelector('.carousel');

//     if($carousel) {
//         var flkty = new Flickity($carousel, {
//             wrapAround: true,
//             autoPlay: 3000,
//             cellAlign: 'left',
//             contain: true
//         });

//         var $itemRoom = $('.carousel-cell item_room');

//         $carousel.addEventListener('scroll', function () {
//             flkty.slides.forEach(function (slide, i) {
//                 var itemRoom = $itemRooms[i];
//                 if (itemRoom) {
//                     var x = (slide.target + flkty.x) * -1 / 3;
//                     itemRoom.style.transform = 'translateX(' + x + 'px)';
//                 }
//             });
//         });

//         // prevButton.addEventListener('click', function () {
//         //     flkty.previous();
//         // });

//         // // Gắn sự kiện click vào nút next
//         // nextButton.addEventListener('click', function () {
//         //     flkty.next();
//         // });

//     }


// });







// document.addEventListener('DOMContentLoaded', () => {
//     var swiper = new Swiper(".swiperRoooms", {
//         slidesPerView: 2, 
//         spaceBetween: 20, 
//         loop: false, 
//         centeredSlides: false, 
//         initialSlide: 0, 
//         freeMode: false,
//         pagination: {
//           el: ".swiper-pagination",
//           clickable: true,
//         },
//       });
// });






document.addEventListener('DOMContentLoaded', function () {
    // new Glide('.glide', {
    //     type: 'carousel',
    //     perView: 2,
    //     gap: 20, 
    //     startAt: 0, 
    //     focusAt: 0,
    //     loop: false,
    //     breakpoints: {
    //         1024: { perView: 2 },
    //         768: { perView: 1 },
    //         480: { perView: 1 }
    //     }
    // }).mount();


    const glide = new Glide('.glide', {
        type: "carousel",
        perView: 2,
        focusAt: 0,
        gap: 20,
        rewind: false,
      });
      glide.on('mount.after', () => {
        // document.querySelector('.glide__slides').style.transform = 'translateX(-660px)';
    });
      const mutator = function (Glide, Components, Events) {
        return {
          modify(translate) {
      
            // First slide
            if (Glide.index === 0) {
      
              // Move slide 20 pixels from left
              return translate + 400;
      
            // Last slide
            } else if (Glide.index === Components.Sizes.length - 1) {
      
              // Move slide 20 pixels from right
              return translate - (Components.Sizes.width - Components.Sizes.slideWidth) + 20;
            
            // Other slides
            } else {
      
                // Center slide
                return translate - (Components.Sizes.width - Components.Sizes.slideWidth) / 2;
      
            }
          },
        };
      };
      
      glide.mutate([mutator]).mount();
    // glide.mount();

});


// var splide = new Splide( '.splide', {
//     type   : 'loop',
//     padding: '5rem',
//   } );
  
//   splide.mount();
