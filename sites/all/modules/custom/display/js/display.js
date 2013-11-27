
/*var countChecked = function() {


	var n = jQuery( "input:checked" ).length;
	alert(jQuery( "div" ).text( n + (n === 1 ? " is" : " are") + " checked!" ));
	};
	countChecked();
	

jQuery(document).ready(function() 
{
	jQuery( "input[type=checkbox]" ).on( "click", countChecked );
});*/

function submitDisplay()
{
	jQuery('#displayForm').submit();
}

function changeDisplayImage(id,srcValue,description,displayName)
{
	var checkedId = '#display_'+id;

	if (jQuery("input:checked" ).length == 0)
	{
		jQuery(checkedId).attr("checked",true)
	}
	
	if (jQuery(checkedId).attr("checked"))
	{
		jQuery("#display_img").attr("src",srcValue);
		jQuery("#imgdisplay_popup").attr("href",srcValue);
		jQuery('#display_desc').text(description); 
		jQuery('#display_name').text(displayName);
		jQuery('#displayImg_post').val(srcValue);
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

		jQuery("#display_img").attr("src",jQuery("#img_"+commonId).val());
		jQuery("#imgdisplay_popup").attr("href",jQuery("#img_"+commonId).val());
		jQuery('#display_desc').text(jQuery("#desc_"+commonId).val()); 
		jQuery('#display_name').text(jQuery("#name_"+commonId).val());
		jQuery('#displayImg_post').val(jQuery("#img_"+commonId).val());
	}
	Shadowbox.setup();
}

