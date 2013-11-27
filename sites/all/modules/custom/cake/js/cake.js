function submitCake()
{
	jQuery('#cakeForm').submit();
}

jQuery(document).ready(function()
{
	jQuery('#all-images-cake img').click(function() {
			
			// Unhighlight all the images
			jQuery('#all-images-cake img').removeClass('activeimg');
	
			// Highlight the newly selected image
			jQuery(this).addClass('activeimg');
			jQuery("#cake_img").attr("src",jQuery(this).attr("src"));
			jQuery("#img_cake_popup").attr("href",jQuery(this).attr("src"));
			
			var name = '#cake_figcaption_'+jQuery(this).attr("id");
			
			jQuery('#cake_id').val(jQuery(this).attr("id"));
			
			var desc = '#cakedesc_'+jQuery(this).attr("id");
			
			jQuery("#cake_name").text(jQuery(name).html().replace('&amp;','&'));
			jQuery("#cake_desc").text(jQuery(desc).val().replace('&amp;','&'));
			Shadowbox.setup();
			
	});
});	
