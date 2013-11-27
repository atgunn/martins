jQuery(document).ready(function(){

  jQuery('.colorbox').colorbox({rel:'colorbox[flickrgallery]'});

  jQuery('select').wrap('<span class="styled"></span>');
  
 //  $( "#datepicker" ).datepicker();
  
 //  $('.k-tab-content').hide();
 //  $('#k-entrees').show();
 //  $('ul.k-tabs li a').click(function(){
 //  	$('.k-tab-content').hide();
 //  	var tab = $(this).attr('href');
	// 	$(tab).show();
	// 	$('.k-tabs li a').removeClass('activetab');
	// 	$(this).addClass('activetab');
	// 	if (event.preventDefault) { event.preventDefault(); } else { event.returnValue = false; }
 //  });
 //  $('a.photopop').click(function(){
 //  	if (event.preventDefault) { event.preventDefault(); } else { event.returnValue = false; }
 //  	var photo = $(this).attr('href');
 //  	var title = $(this).attr('title');
 //  	var desc = $(this).children('img').attr('alt');
 //  	$('#overlay, #pop-option').show();
 //  	$('#pop-option b').html('<img src="'+photo+'">');
	// 	$('#pop-option .k-description h2').html(title);
	// 	$('#pop-option .k-description p').html(desc);
 //  });
 //  $('a.popclose').click(function(){
 //  	if (event.preventDefault) { event.preventDefault(); } else { event.returnValue = false; }
 //  	$('#overlay, .popup').hide();
 //  });
	// $('.scroll-pane').jScrollPane();
});