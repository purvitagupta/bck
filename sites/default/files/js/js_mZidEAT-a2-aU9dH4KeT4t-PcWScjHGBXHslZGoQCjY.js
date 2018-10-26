jQuery(document).ready(function($) {
  if ($(".smooth-scroll").length>0) {
    $(".smooth-scroll a, a.smooth-scroll").click(function() {
      if (location.pathname.replace(/^\//,"") == this.pathname.replace(/^\//,"") && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $("[name=" + this.hash.slice(1) +"]");
        if (target.length) {
          $("html,body").animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  }
});
;
jQuery(document).ready(function() 
{
jQuery('#block-homevideo .field--name-field-video .field__item video').attr('poster','/sites/default/files/video-thumbnails/2018-01/welcome-trees.jpg');  
jQuery('#block-homevideo video').attr('webkit-playsinline',''); 

	jQuery('.page-node-type-practice-area #rm-no-id li a, .page-node-type-practice-area #rm-removed li a').each(function()
	{
		var a= jQuery(this).attr('href');
	  jQuery(this).attr('href','/'+a);
	}); 
/********************home video height**********************************/    

 if ( jQuery(window).width() > 767) 
	{
		var header=jQuery('header').height();
		var windowh=jQuery(window).height()-header;
		jQuery('#block-homevideo .field--name-field-video .field__item').css('height',jQuery(window).height());
		jQuery('.view-stories .views-field-field-image').css('height', windowh);
	}
 if ( jQuery(window).width() < 768) 
	{	
		jQuery('#rm-removed li a').click(function()
		{
			jQuery('.responsive-menus').removeClass('responsive-toggled');
		});
	}	
/********************home video height end**********************************/    
/************** active menu with window scroll***********************/

 jQuery(document).on("scroll", onScroll);
    
    jQuery('a[href^="#"].is-active').on('click', function (e) {
        e.preventDefault();
        jQuery(document).off("scroll");
        
        jQuery('a.is-active').each(function () {
            jQuery(this).removeClass('active-section');
        })
        jQuery(this).addClass('active-section');
      
        var target = this.hash,
            menu = target;
        $target = jQuery(target);
        jQuery('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            document.location.hash = target;
            jQuery(document).on("scroll", onScroll);
        });
    });
/************** active menu with window scroll end***********************/

/**********************close story popup********************************/
jQuery('.view-footer .close-popup').click(function(){
jQuery('#cboxClose').trigger('click');
});
/**********************close story popup end********************************/
});

/************** active menu with mouse scroll***********************/

function onScroll(event){
    var scrollPos = jQuery(document).scrollTop();
    jQuery('a.is-active').each(function () {
        var currLink = jQuery(this);
        var refElement = jQuery(currLink.attr("href"));
        var header=jQuery('header').height();

        if (refElement.position().top-header <= scrollPos && refElement.position().top-header + refElement.height() > scrollPos) {
            jQuery('a.is-active').removeClass("active-section");
            currLink.addClass("active-section");
        }
        else{
            currLink.removeClass("active-section");
        }
    });
}
/************** active menu with mouse scroll***********************/

/********************home video height on resize**********************************/    
(function($) { 
  var resizeTimer; 
  function resizeFunction() 
  {
    if ( jQuery(window).width() > 767) 
	{
			var header=jQuery('header').height();
			var windowh=jQuery(window).height();
		jQuery('#block-homevideo .field--name-field-video .field__item').css('height',windowh);
		jQuery('.view-stories .views-field-field-image').css('height', windowh);
	}
	 if ( jQuery(window).width() < 768) 
	{	
		jQuery('#rm-removed li a').click(function()
		{
			jQuery('.responsive-menus').removeClass('responsive-toggled');
		});
	}
  };
  
  jQuery(window).resize(function()
	{ 
	  clearTimeout(resizeTimer); 
	  resizeTimer = setTimeout(resizeFunction, 250); 
	}); 
})(jQuery);
/********************home video height on resize end**********************************/    
;
window.matchMedia||(window.matchMedia=function(){"use strict";var e=window.styleMedia||window.media;if(!e){var t=document.createElement("style"),i=document.getElementsByTagName("script")[0],n=null;t.type="text/css";t.id="matchmediajs-test";i.parentNode.insertBefore(t,i);n="getComputedStyle"in window&&window.getComputedStyle(t,null)||t.currentStyle;e={matchMedium:function(e){var i="@media "+e+"{ #matchmediajs-test { width: 1px; } }";if(t.styleSheet){t.styleSheet.cssText=i}else{t.textContent=i}return n.width==="1px"}}}return function(t){return{matches:e.matchMedium(t||"all"),media:t||"all"}}}());
;
