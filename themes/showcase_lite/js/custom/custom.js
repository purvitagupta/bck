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
jQuery(window).scroll(function() {
  var sticky = jQuery('.header'),
    scroll = jQuery(window).scrollTop();
   
  if (scroll >= 40) { 
    sticky.addClass('fixed'); }
  else { 
   sticky.removeClass('fixed');

}
});

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
jQuery('#cboxOverlay.open').removeClass('open');
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


jQuery( document ).ajaxComplete(function() {
	//~ var a='';
	//~ if(a=='')
	//~ {
		//~ var aa=jQuery('.header-container').html(); 
		//~ jQuery('.header-container .sticky-wrapper').remove();
		//~ jQuery('.header-container').append(aa);
	//~ }
 

  setTimeout(function(){
    if (jQuery('#colorbox').length != 0 ) {
    var images = jQuery('#colorbox .views-field-field-image picture img').attr("src");
    
    jQuery('#cboxOverlay').addClass('open');
    jQuery('#colorbox').addClass('open');
    
    jQuery('#cboxOverlay:not(.open)').remove();
    jQuery('#colorbox:not(.open)').remove();
    
    jQuery('#colorbox').css('background-image', 'url(http://bck.viewmycreative.com' + images + ')');
  }}, 5);
});

//~ jQuery('.small').click(function(){
//~ jQuery( document ).ajaxComplete(function() {
  //~ setTimeout(function(){
    //~ var images = jQuery('#colorbox .views-field-field-image picture img').attr("src");
    
    //~ jQuery('#cboxOverlay').addClass('open');
    //~ jQuery('#colorbox').addClass('open');
  
    //~ jQuery('#cboxOverlay:not(.open)').remove();
    //~ jQuery('#colorbox:not(.open)').remove();
    
    //~ jQuery('#colorbox').css('background-image', 'url(http://bck.viewmycreative.com' + images + ')');
  //~ }, 5);
//~ });
//~ });



jQuery('.morestory').each(function() {
    var thisPopup = jQuery(this);
    thisPopup.colorbox({
        href: thisPopup.attr('href') 
    });
});
