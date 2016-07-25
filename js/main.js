$( document ).ready(function() {

  $(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});

  $('.nav li a').click(function() {
  var $this = $(this);
  if (!$this.hasClass('active')) {
    $this.addClass('active');
  }

});
// var w = window.innerWidth;


// $( window ).resize(function() {
//   if (w <= 900) {
//     $(".add-clearfix-js").addClass("clearfix")
//   }else{
//     $(".add-clearfix-js").removeClass("clearfix")
//   }
// });


// var $el = $("#very-specific-design");
// var elHeight = $el.outerHeight();
// var elWidth = $el.outerWidth();


// $("#scaleable-wrapper").resizable({
//   resize: doResize
// });

// function doResize(event, ui) {
  
//   var scale, origin;
    
//   scale = Math.min(
//     ui.size.width / elWidth,    
//     ui.size.height / elHeight
//   );
  
//   $el.css({
//     transform: "translate(-50%, -50%) " + "scale(" + scale + ")"
//   });
  
// }



$('#myCarousel').carousel({
interval: false
})
//hide first brace on load

function hideLogDesc(){
$(".braces-logo-carousel").css("opacity","0");
$(".braces-logo-carousel-p").css("opacity","0");
$(".braces-decription").css("opacity","0");
$(".osteo").css("opacity","0");


}



function showLogDesc(){
$(".main-brace .braces-decription").fadeIn().css("opacity","1");
$(".main-brace .braces-logo-carousel").fadeIn().css("opacity","1");
$(".main-brace .braces-logo-carousel-p").fadeIn().css("opacity","1");
$(".main-brace .osteo").fadeIn().css("opacity","1");

}

function hiddenXs(){

    $(".active").children(':eq( 0 )').addClass('hidden-xs');
    $(".active").children(':eq( 2 )').addClass('hidden-xs');
    $(".active").children(':eq( 0 )').addClass('brace-left');
    $(".active").children(':eq( 2 )').addClass('brace-right');

}

function hideFirstFirst(){
$(".active").children(':eq( 0 )').css('opacity','0');
$(".carousel-arrow-left").css('opacity','0','important');
}

function showFirst(){
$('#myCarousel').bind('slid.bs.carousel', function (e) {
  $(".active").children(':eq( 0 )').css('opacity','0.2');
  $(".carousel-arrow-left").css('opacity','1','important');
  })
}

function removeXs(){
$(".active").children(':eq( 1 )').removeClass('hidden-xs');
}






function zoomIn(){   

  hideLogDesc()
      $('#myCarousel').bind('slid.bs.carousel', function (e) {
      $(".item").children().removeClass('main-brace');
      $(".active").children(':eq( 1 )').addClass('main-brace');

      hiddenXs()
       // $(".main-brace").css("zoom","1.2").css("margin-top","1%");
       
      if ($(".col-sm-4").hasClass("main-brace")){
      showLogDesc()
      removeXs()


            
      }
   
  });
}


   
// Enable Carousel Controls
$(".left").click(function(){
zoomIn()
});


$(".right").click(function(){
zoomIn();           
});      

$( ".right" ).one( "click", function() {
  showFirst()
});


    
    $('.oa-carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }

         hideLogDesc()
         
        $(".active").children(':eq( 1 )').addClass('main-brace');
          showLogDesc()
           // $(".main-brace").css("zoom","1.2").css("margin-top","1%");


    });

    //add classes to brace 1 and 3
    hiddenXs()
    hideFirstFirst()

//show hide brace btn on hover
$(".zoomIn" ).mouseover(function() {
$(".main-brace .hover-state").css("opacity","1");
});

$(".zoomIn" ).mouseout(function() {
$(".main-brace .hover-state").css("opacity","0");
});



    function toggleChevron(e) {
        $(e.target)
                .prev('.panel-heading')
                .find("i")
                .toggleClass('rotate-icon glyphicon-plus glyphicon-minus');
        $('.panel-body.animated').toggleClass('zoomIn zoomOut');
    }
    
    $('#accordion').on('hide.bs.collapse', toggleChevron);
    $('#accordion').on('show.bs.collapse', toggleChevron);


    $("#treatment").click(function() {
        $('html, body').animate({
            scrollTop: $(".non-surgical").offset().top
        }, 500);
    });



  

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }


//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('span.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

});
