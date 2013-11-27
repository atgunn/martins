
function changeDisplayPlannerImageProp1(srcValue,id)
{
	if (jQuery(".display_Checkbox_Pro1:checked" ).length == 0)
	{
		jQuery("#"+id).attr("checked",true)
	}
	
	if (jQuery("#"+id).attr("checked"))
	{
		jQuery("#display_prop1_img").attr("src",srcValue);
		jQuery("#img_planner_disp1_popup").attr("href",srcValue);
	}
	else
	{
		var commonId;
		
		jQuery(".display_Checkbox_Pro1:checkbox").each(function(){
			var $this = jQuery(this);
			if($this.is(":checked"))
			{
				commonId = $this.attr("id");
    	}
		});
		jQuery("#display_prop1_img").attr("src",jQuery("#img_"+commonId).val());
		jQuery("#img_planner_disp1_popup").attr("href",jQuery("#img_"+commonId).val());
	}
	Shadowbox.setup();
}

jQuery(document).ready(function() {
	
    jQuery("#select_location_img").change(function() 
	{
      var src = jQuery(this).children(":selected").attr("src");
	  
	  jQuery("#location_prop1_img").attr("src",src);
	  jQuery("#img_planner_loc1_popup").attr("href",src);
	  
    });
	Shadowbox.setup();
});