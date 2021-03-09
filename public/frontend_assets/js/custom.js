$(function(){
// preloader
$(window).on('load', function(){
  $('.preloader').delay(500).fadeOut(500);
});

// back to top
$(".back2").click(function() {
    $('html, body').animate({
        scrollTop: 0,
    }, 1000);
});
$(window).on('scroll', function(){
var scrolling = $(this).scrollTop();
if(scrolling > 500){
  $('.back2').addClass('aaa');
  $('.aaa').fadeIn(500);
}
else if(scrolling > 200){
  $('.aaa').fadeOut(500);
}
if(scrolling > 163){
  $('.navigation-wrap').addClass('fixed-menu');
}
else{
  $('.navigation-wrap').removeClass('fixed-menu');
}
});


  //animation scroll js
  $(".click").click(function() {
      $('html, body').animate({
          scrollTop: $("#myDiv").offset().top
      }, 500);
  });
//News js
$('.marquee').marquee({
    duration: 12000,
    gap: 50,
    delayBeforeStart: 0,
    direction: 'left',
    duplicated: true
});

// banner slider js
$('.banner-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    arrows:false,
    autoplaySpeed: 3000,
    fade:true,
    speed:2000,
});

// service tabs
var $a = $(".tabs li");
$a.click(function() {
    $a.removeClass("active");
    $(this).addClass("active");
});

// Preview slider js
$('.preview-slider-main').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay:true,
    autoplaySpeed:2000,
    asNavFor: '.student-img-slider',
    prevArrow:'.left',
    nextArrow:'.right',
  });
  $('.student-img-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.preview-slider-main',
    arrows: false,
    autoplay:true,
    autoplaySpeed:2000,
    fade:true,
    speed:1500,
  });

// leader slider js
$('.leader-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows:true,
    autoplaySpeed: 2000,
    prevArrow:'.left2',
    nextArrow:'.right2',
    fade:true,
    speed:1500,
});
// recruiters-slider js
$('.recruiters-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    arrows:true,
    autoplaySpeed: 3000,
    speed:3000,
    prevArrow:'.left-rec',
    nextArrow:'.right-rec',
});

// partners slider js
// $('.partner-slider').slick({
//     slidesToShow: 5,
//     slidesToScroll: 1,
//     autoplay: true,
//     arrows:false,
//     autoplaySpeed: 2000,
//     responsive: [
//         {
//           breakpoint: 768,
//           settings: {
//             slidesToShow: 4,
//           }
//         },
//         {
//           breakpoint: 576,
//           settings: {
//             slidesToShow: 3,
//           }
//         }
//       ]
// });

// members slider js
// $('.members-slider').slick({
//     slidesToShow: 4,
//     slidesToScroll: 1,
//     autoplay: true,
//     arrows:false,
//     autoplaySpeed: 2000,
//     responsive: [
//         {
//           breakpoint: 768,
//           settings: {
//             slidesToShow:3,
//           }
//         },
//         {
//           breakpoint: 576,
//           settings: {
//             slidesToShow:3,
//           }
//         },
//         {
//           breakpoint: 480,
//           settings: {
//             slidesToShow: 2,
//           }
//         }
//       ]
// });

// concern slider js
// $('.concern-slider').slick({
//     slidesToShow: 5,
//     slidesToScroll: 1,
//     autoplay: true,
//     arrows:false,
//     autoplaySpeed: 2000,
//     responsive: [
//         {
//           breakpoint: 992,
//           settings: {
//             slidesToShow: 3,
//           }
//         },
//         {
//           breakpoint: 768,
//           settings: {
//             slidesToShow: 3,
//           }
//         },
//         {
//           breakpoint: 576,
//           settings: {
//             slidesToShow: 3,
//           }
//         },
//         {
//           breakpoint: 480,
//           settings: {
//             slidesToShow: 2,
//           }
//         }
//       ]
// });

// About Part nav
var $a = $(".nav-pills li");
$a.click(function() {
  $a.removeClass("active");
  $(this).addClass("active");
});

// side achive slider slider js
$('.side-achive-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  arrows:false,
  dots:true,
  autoplaySpeed: 3000,
});

// Faculties slider js
// $('.fac-slide').slick({
//   slidesToShow: 4,
//   slidesToScroll: 1,
//   autoplay: false,
//   arrows:false,
//   autoplaySpeed: 3000,
// });

// sidebar video js
$('.venobox').venobox();


//tab js
$(".online").click(function(){
  $(".offline").css({
      "background":"#fff",
      "color":"#444"
  })

  $(".online").css({
      "background":"#4e5e73",
      "color":"#fff"
  })

  $(".online-pro").slideDown();
  $(".offline-pro").slideUp();
});

$(".offline").click(function(){
  $(".online").css({
      "background":"#fff",
      "color":"#444"
  })

  $(".offline").css({
      "background":"#4e5e73",
      "color":"#fff"
  })
  $(".online-pro").slideUp();
  $(".offline-pro").slideDown();
});

//===============Newsletter Modal Js Start===============
 $(".bg3").delay(3000).fadeIn(300);
$(".news-modal").delay(3000).slideDown(300);

    $(".cross-icon").on("click", function () {
        $(".news-modal").fadeOut(300);
    });

    $(".cross-icon").on("click", function () {
        $(".bg3").fadeOut(300);
    });

    $(".bg3").on("click", function () {
        $(".news-modal").fadeOut(300);
    });

    $(".bg3").on("click", function () {
        $(".bg3").fadeOut(300);
    });


// navbar
$('body.hero-anime').removeClass('hero-anime');

$('body').on('mouseenter mouseleave','.nav-item',function(e){
    if ($(window).width() > 750) {
      var _d=$(e.target).closest('.nav-item');_d.addClass('show');
      setTimeout(function(){
      _d[_d.is(':hover')?'addClass':'removeClass']('show');
      },1);
    }
});
//CV upload
$('form input').change(function () {
    $('form p').text(this.files.length + " File Uploaded");
  });

  $('.counter').counterUp({
      delay: 10,
      time: 2500
  });
});
