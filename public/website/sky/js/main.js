$(document).ready(function () {
    //slider
    $('.headerSlider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
      });

      //dropdown
      $(".dropdown").hover(function () {
          $(".dropdown-menu").slideToggle(500)
      })

      //scroll 
      $(window).scroll(function () {
          let wScroll = $(window).scrollTop();
          if(wScroll >= 100){
              $(".navbar").addClass("bgWidth")
          }else{
            $(".navbar").removeClass("bgWidth")
          }
      })

      //Countdown
      $('.countdown').dsCountDown({
        endDate: new Date("october 24, 2021 23:59:00")
        });

        // search icon
        $("#search").click (function () {
          $(".form-group").slideToggle(400)
        });
        $(".close").click ( function () {
          $(".form-group").slideUp(400)
        })

        // butup
        $(window).scroll (function (){
         let wScroll = $(window).scrollTop();
         if (wScroll > 550) {
           $(".butup").fadeIn(400);
         }else{
          $(".butup").fadeOut(400)
         }

        })
        $(".butup").click (function () {
          $(".butup").scrollTop(0)
          $("html").animate({scrollTop : '0'} ,1000)
        })

        //loading
        $(".loading").fadeOut(1000 , function () {
          $("body").css({overflow : "auto"})
        })

        //ancor
        $(".navbar .nav-link").click(function () {
          let aHref = $(this).attr("href")
          $("html , body").animate({scrollTop : $(aHref).offset().top-120}, 2000)
        })
});