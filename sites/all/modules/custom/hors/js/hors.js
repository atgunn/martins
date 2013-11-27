function submitHors()
{
	jQuery('#horsForm').submit();
}

jQuery(document).ready(function()
{
	jQuery('#all-images-hors img').click(function() {
			
			// Unhighlight all the images
			jQuery('#all-images-hors img').removeClass('activeimg');
	
			// Highlight the newly selected image
			jQuery(this).addClass('activeimg');
			jQuery("#hors_img").attr("src",jQuery(this).attr("src"));
			jQuery("#img_hors_popup").attr("href",jQuery(this).attr("src"));
			
			var name = '#figcaption_'+jQuery(this).attr("id");
			
			jQuery('#hors_id').val(jQuery(this).attr("id"));
			
			var desc = '#horsdesc_'+jQuery(this).attr("id");
			
			jQuery("#hors_name").text(jQuery(name).html().replace('&amp;','&'));
			jQuery("#hors_desc").text(jQuery(desc).val().replace('&amp;','&'));
			
			Shadowbox.setup();
			
	});
});	