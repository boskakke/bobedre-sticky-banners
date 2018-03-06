(function($) {

	// $('#modal-signin').modal();

	// Sign out demo code
	$('.toggle-signout').click(function(e) {
		e.preventDefault();
		$('body').removeClass('show-sitemap show-search');
		$('body').toggleClass('show-signout');
	});

	// demo menu
	$('.demo-trigger').click(function(e){
		e.preventDefault();
		$(this).closest('.demo-menu').toggleClass('active');
	});

	var teaserTags = $('.teaser');
	var listTags = $('.list-item');
	var relatedTags = $('.list-related .teaser');
	
	$('#teaser-tag-config input:radio').change(function(){
		var cssClass = $(this).val();
		$(teaserTags).removeClass (function (index, css) {
   			return (css.match (/(^|\s)teaser-tag-\S+/g) || []).join(' ');
		});	
		$(teaserTags).addClass(cssClass);
	});

	
	$('#teaser-color-config input:radio').change(function(){
		var cssClass = $(this).val();
		$(teaserTags).removeClass (function (index, css) {
   			return (css.match (/(^|\s)teaser-color-\S+/g) || []).join(' ');
		});	
		$(teaserTags).addClass(cssClass);
	});

	$('#teaser-cat-config input:radio').change(function(){
		var cssClass = $(this).val();
		$(teaserTags).removeClass (function (index, css) {
   			return (css.match (/(^|\s)cat-\S+/g) || []).join(' ');
		});	
		$(teaserTags).addClass(cssClass);
	});

	$('#teaser-icon-config input:radio').change(function(){
		var cssClass = $(this).val();
		$(teaserTags).removeClass (function (index, css) {
   			return (css.match (/(^|\s)teaser-icon-\S+/g) || []).join(' ');
		});	
		$(teaserTags).addClass(cssClass);
	});

	$('#related-icon-config input:radio').change(function(){
		var cssClass = $(this).val();
		$(teaserTags).removeClass (function (index, css) {
   			return (css.match (/(^|\s)related-icon-\S+/g) || []).join(' ');
		});	
		$(teaserTags).addClass(cssClass);
	});

	$('#teaser-oneliner-config input:radio').change(function(){
		var cssClass = $(this).val();
		$(teaserTags).removeClass (function (index, css) {
   			return (css.match (/(^|\s)teaser-oneliner-\S+/g) || []).join(' ');
		});	
		$(teaserTags).addClass(cssClass);
	});


	$('#list-tag-config input:radio').change(function(){
		var cssClass = $(this).val();
		$(listTags).removeClass (function (index, css) {
   			return (css.match (/(^|\s)list-tag-\S+/g) || []).join(' ');
		});	
		$(listTags).addClass(cssClass);
	});

	$('#list-icon-config input:radio').change(function(){
		var cssClass = $(this).val();
		$(listTags).removeClass (function (index, css) {
   			return (css.match (/(^|\s)list-icon-\S+/g) || []).join(' ');
		});	
		$(listTags).addClass(cssClass);
	});


	$('.banner-toggle').click(function(e){
		e.preventDefault();
		$('body').toggleClass('black-label');
	});

	

	$('.toggle-content').click(function() {
		$(this).closest('.toggle-container').find('.hidden-content').fadeToggle('fast');
	});


	

	// box configurator

	var boxes = $('#content .box');
	$('#box-config input:radio').change(function(){
		var cssValue = $(this).val();
		// Only remove the class in the specific `box` that contains the radio
		$(boxes).removeClass();
		$(boxes).addClass('box ' + cssValue);
		// console.log(cssValue);
	});
	


	$('#toggle-border').change(function(){
		$(boxes).find('ul').toggleClass('list-border');
	});

	$('#toggle-box-size').change(function(){
		$(boxes).toggleClass('box-sm');
	});

	// Show update sign on frontpage / articles
	setTimeout(function(){
		$('body').addClass('show-update-notification');
	}, 5);

	// Show update sign on frontpage / articles
	setTimeout(function(){
		$('.facebook-reminder').slideDown('fast');
	}, 7);
})(jQuery); 
