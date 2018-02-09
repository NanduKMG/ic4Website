"use strict";


jQuery(document).ready(function ($) {

	$(window).load(function () {
		$(".loaded").fadeOut();
		$(".preloader").delay(1000).fadeOut("slow");
	});
    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    $('#navbar-collapse').find('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top - 40)
                }, 1000);
                if ($('.navbar-toggle').css('display') != 'none') {
                    $(this).parents('.container').find(".navbar-toggle").trigger("click");
                }
                return false;
            }
        }
    });
/*--------------*/
/*navicon*/

   $(document).ready(function(){
     var blurVal='blur(5px)';
    $("#collapser").on('click', function(){
    
        $(this).toggleClass("open");
    $(".blur").css('filter',blurVal);
    if(blurVal!=''){blurVal='';}
    else{blurVal='blur(5px)';}
        });
        });
  
	
	
	
	/*---------------------------------------------*
     * Menu Background Change
     ---------------------------------------------*/
	
	var windowWidth = $(window).width();
    if (windowWidth > 757) {
        $(window).scroll( {
        previousTop: 0
               }, 
    function () {
    var currentTop = $(window).scrollTop();
    if (currentTop < this.previousTop) {
        $(".navbar").fadeIn(2);
	    $("#floating-button").fadeOut(2);
    }
		    else {
			    $(".navbar").fadeOut(500);
			    $("#floating-button").fadeIn(2);
		     }
    this.previousTop = currentTop;
		    
		    
		    
		    
		    
		    
		    /*function () {
                if ($(this).scrollTop() > 400) {
                    $('.navbar').fadeIn(400);
                    $('.navbar').addClass('menu-bg');

                } else {
                    
                    $('.navbar').removeClass('menu-bg');
                }*/
            });
        
    }
	$('#bs-example-navbar-collapse-1').localScroll();


    /*---------------------------------------------*
     * STICKY scroll
     ---------------------------------------------*/

	//	$.localScroll();



   
});


//Hamare JS from here

/*function hover(element) {
    element.setAttribute('src', 'assets/images/speakers/speakerred.jpg');
}
function unhover(element) {
    element.setAttribute('src', 'assets/images/speakers/speaker.jpg');
}*/
$(".at").click(function () {
            if ($("#collapser").css('display')!='none')
            $("#collapser").click();
        });



//Scroll thing Trial

$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#bs-example-navbar-collapse-1 a ").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      //event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
//scroll explicit for bouncing arrow
$(document).ready(function(){
  
  // Add smooth scrolling on all links inside the navbar
  $(".scroll-down a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});





$("#sub").click(function(e) {
    e.preventDefault();
    var  var1=document.getElementById("cetian");
     var var2=document.getElementById("noncetian");
     if(var1.checked==true)
     {
        window.location.href="https://goo.gl/forms/p6b9ruDOQcVMBFNu1";
     }
     else
     {
        window.location.href="https://www.yepdesk.com/tedxcet";
     }
});
//disabling background scroll when menu is open
/* if($('#collapser').is(':visible'))
 {
    $('body').addClass("fixedPosition");
 }
 else
 {
    $('body').removeClass("fixedPosition");
 }*/














