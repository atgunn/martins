function submitEvent()
{
	jQuery('#eventForm').submit();
}

function changeEventImage(srcValue,description,title)
{ 
	jQuery("#event_img").attr("src",srcValue);
	jQuery("#img_event_popup").attr("href",srcValue);
	jQuery('#event_desc').text(description);
	jQuery('#event_title').text(title);
	Shadowbox.setup();
}