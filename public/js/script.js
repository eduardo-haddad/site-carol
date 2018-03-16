$(document).ready(function() {
//masonry
	var gridContainer = $('#conteudo .grid_container');

	gridContainer.imagesLoaded(function() {
		
		gridContainer.masonry({
			itemSelector: '.bloco',
			columnWidth: '.grid_sizer',
			gutter: '.grid_gutter',
			percentPosition: true,
			transitionDuration: 0,
			
		});
		
	});
//masonry



	var open = false;
	$("#menu_mobile").click(function(){
		
		if(open == false){
			$('#menu-esquerdo').addClass('open');
			open = true;
		} else {
			$('#menu-esquerdo').removeClass('open');
			open = false;
		}
		



	});
	
});


