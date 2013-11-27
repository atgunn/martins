function submitBeverage()
{
	jQuery('#beverageForm').submit();
}

function submitNextBeverage()
{
	jQuery('#beverageNextForm').submit();
}

jQuery(document).ready(function()
{
	jQuery('#main-menu-links li').map(function(i,n) {
		
		if (jQuery(n).attr('class') == 'menu-767')
		{
			jQuery(n).addClass('active-trail active');
			jQuery(n).find('a:first').addClass('active-trail active');
		}
	});
});

function changeBeverageImage(srcValue,description)
{ 
	jQuery("#beverage_img").attr("src",srcValue);
	jQuery("#img_beverage_popup").attr("href",srcValue);
	jQuery('#beverage_desc').text(description);
	Shadowbox.setup();
}