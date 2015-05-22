jQuery(document).ready(function($){
	


	


	//$('#menu-main-menu > .menu-item-language > a').replaceText("English","EN");
	$('.nav > .menu-item-language > a').text($('.nav > .menu-item-language > a').text().replace('English', 'EN'));
	$('.nav > .menu-item-language > a').text($('.nav > .menu-item-language > a').text().replace('Nederlands', 'NL'));

	$('.nav > .menu-item-language').addClass('menu-item-has-children dropdown')
	$('.nav > .menu-item-language ul').addClass('dropdown-menu')

	$('.nav > .menu-item-language').show()


	$('.navbar-nav li.menu-item-has-children').hover(function(){

		var barheight = $('.dropdown-menu',this).outerHeight();
		console.log(barheight)
		$('.dropwdownbg')
		.outerHeight(barheight)
		.show()

	}, function(){
		$('.dropwdownbg').hide()

	})


	$('.blocks > .wpb_column').each(function(){
		var link = $('a', this).attr('href');
		$('> .wpb_wrapper', this).wrapInner('<a href="'+link+'" class="box" />')
	})


	$('.enquireimg').on('click', function(){
		$('#ninja_forms_field_17').val($(this).attr('product'))
	})




})