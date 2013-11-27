function submitEntrees()
{
	jQuery('#entryForm').submit();
}

function submitPreEntrees()
{
	jQuery('#preEntryForm').submit();
}

jQuery(document).ready(function()
{
	jQuery('#all-images img').click(function() {
			
		// Unhighlight all the images
		jQuery('#all-images img').removeClass('activeimg');

		// Highlight the newly selected image
		jQuery(this).addClass('activeimg');
		jQuery("#entry_img").attr("src",jQuery(this).attr("src"));
		jQuery("#img_entry_popup").attr("href",jQuery(this).attr("src"));
		
		var name = '#figcaption_'+jQuery(this).attr("id");
		
		jQuery('#entree_id').val(jQuery(this).attr("id"));
		
		var desc = '#entrydesc_'+jQuery(this).attr("id");
		
		jQuery("#entry_name").text(jQuery(name).html().replace('&amp;','&'));
		jQuery("#entry_desc").text(jQuery(desc).val().replace('&amp;','&'));
		Shadowbox.setup();
			
	});
});	

function chageTabs(type)
{
	if (type == 1)
	{
		jQuery("#type_1").addClass('activetab');
		jQuery("#type_0").removeClass('activetab');
		jQuery("#type_2").removeClass('activetab');
		jQuery("#type_3").removeClass('activetab');
	}
	else if(type == 2)
	{
		jQuery("#type_2").addClass('activetab');
		jQuery("#type_0").removeClass('activetab');
		jQuery("#type_1").removeClass('activetab');
		jQuery("#type_3").removeClass('activetab');
	}
	else if(type == 3)
	{
		jQuery("#type_3").addClass('activetab');
		jQuery("#type_0").removeClass('activetab');
		jQuery("#type_1").removeClass('activetab');
		jQuery("#type_2").removeClass('activetab');
	}
}

jQuery(document).ready(function()
{
	jQuery('#main-menu-links li').map(function(i,n) {
		
		if (jQuery(n).attr('class') == 'menu-644')
		{
			jQuery(n).addClass('active-trail active');
			jQuery(n).find('a:first').addClass('active-trail active');
		}
	});
});