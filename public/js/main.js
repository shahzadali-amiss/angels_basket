
    
// (function($)
// {"use strict"
// $(window).on('load',function(){$('#preloader-active').delay(450).fadeOut('slow');$('body').delay(450).css({'overflow':'visible'});});$(window).on('scroll',function(){var scroll=$(window).scrollTop();if(scroll<400){$(".header-sticky").removeClass("sticky-bar");$('#back-top').fadeOut(500);}else{$(".header-sticky").addClass("sticky-bar");$('#back-top').fadeIn(500);}});$('#back-top a').on("click",function(){$('body,html').animate({scrollTop:0},800);return false;});var menu=$('ul#navigation');if(menu.length){menu.slicknav({prependTo:".mobile_menu",closedSymbol:'+',openedSymbol:'-'});};function mainSlider(){var BasicSlider=$('.slider-active');BasicSlider.on('init',function(e,slick){var $firstAnimatingElements=$('.single-slider:first-child').find('[data-animation]');doAnimations($firstAnimatingElements);});BasicSlider.on('beforeChange',function(e,slick,currentSlide,nextSlide){var $animatingElements=$('.single-slider[data-slick-index="'+nextSlide+'"]').find('[data-animation]');doAnimations($animatingElements);});BasicSlider.slick({autoplay:true,autoplaySpeed:2000,dots:false,fade:true,arrows:false,prevArrow:'<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',nextArrow:'<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',responsive:[{breakpoint:1024,settings:{slidesToShow:1,slidesToScroll:1,infinite:true,}},{breakpoint:991,settings:{slidesToShow:1,slidesToScroll:1,arrows:false}},{breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1,arrows:false}}]});function doAnimations(elements){var animationEndEvents='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';elements.each(function(){var $this=$(this);var $animationDelay=$this.data('delay');var $animationType='animated '+$this.data('animation');$this.css({'animation-delay':$animationDelay,'-webkit-animation-delay':$animationDelay});$this.addClass($animationType).one(animationEndEvents,function(){$this.removeClass($animationType);});});}}
// mainSlider();var client_list=$('.instagram-active');if(client_list.length){client_list.owlCarousel({slidesToShow:4,slidesToScroll:1,loop:true,autoplay:true,speed:3000,smartSpeed:2000,nav:false,dots:false,margin:0,autoplayHoverPause:true,responsive:{0:{nav:false,items:2,},768:{nav:false,items:4,}}});}
// $('.popular-active').slick({dots:false,infinite:true,autoplay:true,speed:400,arrows:true,prevArrow:'<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',nextArrow:'<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',slidesToShow:3,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1,infinite:true,dots:false,}},{breakpoint:992,settings:{slidesToShow:2,slidesToScroll:1,infinite:true,dots:false,}},{breakpoint:768,settings:{slidesToShow:2,slidesToScroll:1,arrows:true}},{breakpoint:576,settings:{slidesToShow:1,slidesToScroll:1,arrows:false}},]});var testimonial=$('.h1-testimonial-active');if(testimonial.length){testimonial.slick({dots:true,infinite:true,speed:1000,autoplay:true,loop:true,arrows:true,prevArrow:'<button type="button" class="slick-prev"><i class="ti-arrow-top-left"></i></button>',nextArrow:'<button type="button" class="slick-next"><i class="ti-arrow-top-right"></i></button>',slidesToShow:1,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:1,slidesToScroll:1,infinite:true,dots:true,arrows:true}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1,arrows:true}},{breakpoint:500,settings:{slidesToShow:1,slidesToScroll:1,arrows:false,dots:false}}]});}
// var nice_Select=$('select');if(nice_Select.length){nice_Select.niceSelect();}
// var client_list=$('.popular-item');if(client_list.length){client_list.owlCarousel({slidesToShow:4,slidesToScroll:1,loop:true,center:true,margin:10,autoplay:true,speed:3000,smartSpeed:2000,nav:false,dots:false,autoplayHoverPause:true,responsive:{0:{nav:false,items:1,center:false,},768:{nav:false,items:2,},992:{nav:false,items:3,},1200:{nav:false,items:4,}}});}
// $('.client-active').slick({dots:false,infinite:true,autoplay:true,speed:400,arrows:true,prevArrow:'<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',nextArrow:'<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',slidesToShow:2,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1,infinite:true,dots:false,}},{breakpoint:992,settings:{slidesToShow:2,slidesToScroll:1,infinite:true,dots:false,}},{breakpoint:800,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:680,settings:{slidesToShow:1,slidesToScroll:1,arrows:false}},]});$("[data-background]").each(function(){$(this).css("background-image","url("+$(this).attr("data-background")+")")});new WOW().init();function mailChimp(){$('#mc_embed_signup').find('form').ajaxChimp();}
// mailChimp();var popUp=$('.single_gallery_part, .img-pop-up');if(popUp.length){popUp.magnificPopup({type:'image',gallery:{enabled:true}});}
// var popUp=$('.popup-video');if(popUp.length){popUp.magnificPopup({type:'iframe'});}
// $('.counter').counterUp({delay:10,time:3000});$('#datepicker1').datepicker();$('#datepicker2').datepicker();$('#timepicker').timepicker();$('#bar1').barfiller();$('#bar2').barfiller();})(jQuery);

(function($)
{"use strict"
$(window).on('load',function(){

	$('#preloader-active').delay(450).fadeOut('slow');$('body').delay(450).css({'overflow':'visible'});
    var scroll=$(window).scrollTop();
  
	if(scroll>0){
		$("#header1").addClass('header-adjust');
		$("#header1 .logo-outer").addClass('logo-adjust');
	}else{
		$("#header1").removeClass('header-adjust');
		$("#header1 .logo-outer").removeClass('logo-adjust');
        
	}

   $('.button-header').on('click',function(){
       $('.customOrder').removeClass('hide');
       // $('.customOrder').css({'opacity':'1','transition':'0.5s'});
   });
   $('.customOrder .orderclose').on('click',function(){
       // $('.customOrder').fadeOut('slow');
         $('.customOrder').addClass('hide');
   });
  
	

});
$(window).on('scroll',function(){
	var scroll=$(window).scrollTop();
	if(scroll>0){
		$("#header1").addClass('header-adjust');
		$("#header1 .logo-outer").addClass('logo-adjust');
	}else{
		$("#header1").removeClass('header-adjust');
		$("#header1 .logo-outer").removeClass('logo-adjust');
        
	}

});

$('#back-top a').on("click",function(){$('body,html').animate({scrollTop:0},800);return false;});var menu=$('ul#navigation');if(menu.length){menu.slicknav({prependTo:".mobile_menu",closedSymbol:'+',openedSymbol:'-'});};function mainSlider(){var BasicSlider=$('.slider-active');BasicSlider.on('init',function(e,slick){var $firstAnimatingElements=$('.single-slider:first-child').find('[data-animation]');doAnimations($firstAnimatingElements);});BasicSlider.on('beforeChange',function(e,slick,currentSlide,nextSlide){var $animatingElements=$('.single-slider[data-slick-index="'+nextSlide+'"]').find('[data-animation]');doAnimations($animatingElements);});BasicSlider.slick({autoplay:true,autoplaySpeed:2000,dots:false,fade:true,arrows:false,prevArrow:'<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',nextArrow:'<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',responsive:[{breakpoint:1024,settings:{slidesToShow:1,slidesToScroll:1,infinite:true,}},{breakpoint:991,settings:{slidesToShow:1,slidesToScroll:1,arrows:false}},{breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1,arrows:false}}]});function doAnimations(elements){var animationEndEvents='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';elements.each(function(){var $this=$(this);var $animationDelay=$this.data('delay');var $animationType='animated '+$this.data('animation');$this.css({'animation-delay':$animationDelay,'-webkit-animation-delay':$animationDelay});$this.addClass($animationType).one(animationEndEvents,function(){$this.removeClass($animationType);});});}}
mainSlider();var client_list=$('.instagram-active');if(client_list.length){client_list.owlCarousel({slidesToShow:4,slidesToScroll:1,loop:true,autoplay:true,speed:3000,smartSpeed:2000,nav:false,dots:false,margin:0,autoplayHoverPause:true,responsive:{0:{nav:false,items:2,},768:{nav:false,items:4,}}});}
$('.popular-active').slick({dots:false,infinite:true,autoplay:true,speed:400,arrows:true,prevArrow:'<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',nextArrow:'<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',slidesToShow:3,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1,infinite:true,dots:false,}},{breakpoint:992,settings:{slidesToShow:2,slidesToScroll:1,infinite:true,dots:false,}},{breakpoint:768,settings:{slidesToShow:2,slidesToScroll:1,arrows:true}},{breakpoint:576,settings:{slidesToShow:1,slidesToScroll:1,arrows:false}},]});var testimonial=$('.h1-testimonial-active');if(testimonial.length){testimonial.slick({dots:true,infinite:true,speed:1000,autoplay:true,loop:true,arrows:true,prevArrow:'<button type="button" class="slick-prev"><i class="ti-arrow-top-left"></i></button>',nextArrow:'<button type="button" class="slick-next"><i class="ti-arrow-top-right"></i></button>',slidesToShow:1,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:1,slidesToScroll:1,infinite:true,dots:true,arrows:true}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1,arrows:true}},{breakpoint:500,settings:{slidesToShow:1,slidesToScroll:1,arrows:false,dots:false}}]});}
var nice_Select=$('select');if(nice_Select.length){nice_Select.niceSelect();}
var client_list=$('.popular-item');if(client_list.length){client_list.owlCarousel({slidesToShow:4,slidesToScroll:1,loop:true,center:true,margin:10,autoplay:true,speed:3000,smartSpeed:2000,nav:false,dots:false,autoplayHoverPause:true,responsive:{0:{nav:false,items:1,center:false,},768:{nav:false,items:2,},992:{nav:false,items:3,},1200:{nav:false,items:4,}}});}
$('.client-active').slick({dots:false,infinite:true,autoplay:true,speed:400,arrows:true,prevArrow:'<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',nextArrow:'<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',slidesToShow:2,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1,infinite:true,dots:false,}},{breakpoint:992,settings:{slidesToShow:2,slidesToScroll:1,infinite:true,dots:false,}},{breakpoint:800,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:680,settings:{slidesToShow:1,slidesToScroll:1,arrows:false}},]});$("[data-background]").each(function(){$(this).css("background-image","url("+$(this).attr("data-background")+")")});new WOW().init();function mailChimp(){$('#mc_embed_signup').find('form').ajaxChimp();}
mailChimp();var popUp=$('.single_gallery_part, .img-pop-up');if(popUp.length){popUp.magnificPopup({type:'image',gallery:{enabled:true}});}
var popUp=$('.popup-video');if(popUp.length){popUp.magnificPopup({type:'iframe'});}
$('.counter').counterUp({delay:10,time:3000});$('#datepicker1').datepicker();$('#datepicker2').datepicker();$('#timepicker').timepicker();$('#bar1').barfiller();$('#bar2').barfiller();})(jQuery);



	var num=0;
	$('#header1 .menu-sidepanel ul li').on('click',function(){
   $('#header1 .menu-sidepanel').removeClass('adjust-sidepanel');
   $('#header1 .box').find('.bar1').css({'width':'20px','background-color':'#951a1d','transform':'rotate(0deg)','transition':'0.7s ease-in-out'});
   $('#header1 .box').find('.bar3').css({'width':'20px','background-color':'#951a1d','transform':'rotate(0deg)','transition':'0.7s ease-in-out'});
	num--;
	});
   $('#header1 .box').on('click',function(){
   	  if(num==0){
      $('#header1 .menu-sidepanel').addClass('adjust-sidepanel');
   $('#header1 .box').find('.bar1').css({'width':'38px','background-color':'#fff','transform':'rotate(45deg) translateY(250%)','transition':'0.7s ease-in-out'});
   $('#header1 .box').find('.bar3').css({'width':'38px','background-color':'#fff','transform':'rotate(-45deg)  translateY(-250%)','transition':'0.7s ease-in-out'});
      num++;
      }
      else{
      $('#header1 .menu-sidepanel').removeClass('adjust-sidepanel');
   $('#header1 .box').find('.bar1').css({'width':'20px','background-color':'#951a1d','transform':'rotate(0deg)','transition':'0.7s ease-in-out'});
   $('#header1 .box').find('.bar3').css({'width':'20px','background-color':'#951a1d','transform':'rotate(0deg)','transition':'0.7s ease-in-out'});
      num--;
      }

   
  
   // $('#header1 .box').hover(function(){
   //  $('#header1 .box').find('.bar1').css({'width':'30px','transition':'0.1s ease-in-out'});
   //  $('#header1 .box').find('.bar3').css({'width':'38px','transition':'0.1s 0.2s ease-in-out'});
   // },function(){
   //  $('#header1 .box').find('.bar1').css({'width':'20px','transition':'0.1s ease-in-out'});
   //  $('#header1 .box').find('.bar3').css({'width':'20px','transition':'0.1s 0.2s ease-in-out'});
   // });


   
});

// function add(input){
//    alert($(input).parent().find("input[type='number']").val());
// }
 $('.table-row .total').each(function(){
    var value=parseInt($(this).parent().find("input[type='number']").val());
    var price=parseInt($(this).parent().find('.price').text());
    $(this).text(value*price);
 });

 $('span.subtotal').each(function(){
   var subtotal=0;
    $('.cart-table .table-row').each(function(){
       var value2= parseInt($(this).find('.total').text());
       subtotal+=value2;
    });
    $(this).text(subtotal);
 });
function grandtotal(){
if(parseInt($('#subtotal').text())>0){
  $('#charge').text(50);
$('#grand').text(parseInt($('#subtotal').text())+parseInt($('#charge').text()));
}
else{
  $('#charge').text(0);
$('#grand').text(0);
}

}
grandtotal();

  
$('.add_in_qnt').on('click', function(){
     var value=parseInt($(this).parent().find("input[type='number']").val());
     var price=parseInt($(this).parent().parent().find('.price').text());
    value++;
    $(this).parent().find("input[type='number']").val(value);
    $(this).parent().parent().find('.total').text(price*value);
    
    $('span.subtotal').each(function(){
   var subtotal=0;
    $('.cart-table .table-row').each(function(){
       var value2= parseInt($(this).find('.total').text());
       subtotal+=value2;
    });
    $(this).text(subtotal);
 });

     // $('#grand').text(parseInt($('#subtotal').text())+parseInt($('#charge').text()));
     grandtotal();

});
$('.minus_in_qnt').on('click', function(){
     var value=parseInt($(this).parent().find("input[type='number']").val());
     var price=parseInt($(this).parent().parent().find('.price').text());
    if(value>=1){
    value--;
    }
    $(this).parent().find("input[type='number']").val(value);
    $(this).parent().parent().find('.total').text(price*value);
   
   $('span.subtotal').each(function(){
   var subtotal=0;
    $('.cart-table .table-row').each(function(){
       var value2= parseInt($(this).find('.total').text());
       subtotal+=value2;
    });
    $(this).text(subtotal);
 });

    // $('#grand').text(parseInt($('#subtotal').text())+parseInt($('#charge').text()));
    grandtotal();  
   
});




 
