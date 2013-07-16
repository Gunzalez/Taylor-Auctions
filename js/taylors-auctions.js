// JavaScript Document
(function(){
	
	taylorsauction = {
		
		zoom: {
			init: function(){
				if($('.zoom-thumbs').length > 0){
					$('.zoom-thumbs a').each(function(index, el){
						$(el).on('click',function(e){
							e.preventDefault();
							$('.zoom-large').attr('src', $(el).attr('href'));								
						});
					});
				}
			}
		},/* zoom */	
		
	}
	
	/* ======================================================== */	
	$(window).ready(function(e){
		
		// check for js	
		$('html').addClass('js');
		
		// check for mobile/desktop
		if(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){
			$('html').addClass('mobile');
		} else {
			$('html').addClass('desktop');
		};
		
		// ie browser and version check
		if($.browser.msie) {		  
		  $('html').addClass('ie');
		  $('html').addClass('ie-'+parseInt($.browser.version));
		}	
		
		// ie browser and version check
		if( $.browser.safari ){
		   $('html').addClass('safari');
		}
		/* ------------------------------------- */		
		
		// Initiate JavaScript functions
		taylorsauction.zoom.init();		
    });	
			
}())