function submitWelcome()
{
	if (jQuery('#welcomeNameId').val() == "") 
	{
			alert ('Please Enter Your Name !');
			return false;
	}
	else if (jQuery('#phoneNumber').val() == "") 
	{
			alert ('Please Enter Your Phone Number !');
			return false;
	}
	else if (jQuery('#email').val() == "") 
	{
			alert ('Please Enter Your Email Address !');
			return false;
	}
	else if (jQuery('#reemail').val() == "") 
	{
			alert ('Please Enter Your Confirm Email Address !');
			return false;
	}
	else if (jQuery('#numOfGuests').val() == "") 
	{
			alert ('Please Enter Number Of Guests !');
			return false;
	}
	else
	{
		var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			
		if (!regex.test(jQuery('#email').val()))
		{
			alert ('Invalid Email Address');
			return false;
		}
		else if (jQuery('#reemail').val() != jQuery('#email').val() )
		{
			alert ('Your Email Address Does Not Match !');
			return false;
		}
		else
		{
			jQuery('#welcomeForm').submit();
		}
	}
}

jQuery(document).ready(function() 
{
   jQuery("#numOfGuests").keydown(function(event) {
        // Allow: backspace, delete, tab, escape, and enter
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
             // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        else 
				{
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) 
						{
							event.preventDefault(); 
						//	alert ('Please Enter Numeric Value !');
            }   
        }
    });
});

