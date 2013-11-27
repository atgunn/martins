function submitOption()
{
	jQuery('#optionForm').submit();
}

function changeOptionImage(id,srcValue,description,optionName)
{
	var checkedId = '#item_'+id;

	if (jQuery("input:checked" ).length == 0)
	{
		jQuery(checkedId).attr("checked",true)
	}
	
	if (jQuery(checkedId).attr("checked"))
	{
		jQuery("#option_img").attr("src",srcValue);
		jQuery("#img_option_popup").attr("href",srcValue);
		jQuery('#option_desc').text(description); 
		jQuery('#option_name').text(optionName);
	}
	else
	{
		var commonId;
		
		jQuery("input:checkbox").each(function(){
			var $this = jQuery(this);
			if($this.is(":checked"))
			{
				commonId = $this.attr("id");
    	}
		});

		jQuery("#option_img").attr("src",jQuery("#img_"+commonId).val());
		jQuery("#img_option_popup").attr("href",jQuery("#img_"+commonId).val());
		jQuery('#option_desc').text(jQuery("#desc_"+commonId).val()); 
		jQuery('#option_name').text(jQuery("#name_"+commonId).val());
	}
	Shadowbox.setup();
}