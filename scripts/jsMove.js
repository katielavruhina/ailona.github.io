controls = function(){
	
	// TOP OF PAGE
	
	$('.top-page').click(function(){
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow');
	});
	
	
	var infos_statut = false;
	$('#bt_infos').click(function(){
		event.preventDefault();
		
		if ( infos_statut ) {
			// $('html, body').animate({scrollTop:0}, 'slow');
			$('.single-text').fadeOut('slow', function(){ infos_statut = false; $('#bt_infos').addClass("closed"); $('#bt_infos').html("&darr; Informations"); });
		} else {
			$('html, body').scrollTo('#repere_texte_info', 800);
			$('.single-text').fadeIn('slow', function(){ infos_statut = true; $('#bt_infos').removeClass("closed"); $('#bt_infos').html("&uarr; Informations"); });
		}
	});	
	
	
	
	$('.ancre').each(function(){
		
		var cible = $(this).attr('href');
		$(this).click(function(){
			event.preventDefault();
			// alert (cible);
			$('html, body').scrollTo(cible, 800);
		});
		
	});
	
}	



images_size = function() {

	// REMOVE ATTR
	$('.projet-image img').removeAttr("width");
	$('.projet-image img').removeAttr("height");

}