var geocoder;
var map;
function initialize() {
	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(-34.397, 150.644);
	var mapOptions = {
		zoom: 8,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	
}

function codeAddress() 
{
	var labels = document.getElementsByTagName('LABEL');
	
	for (var i = 0; i < labels.length; i++) 
	{
		if (labels[i].htmlFor)
		{
			var id = labels[i].htmlFor;
	
			if (jQuery('#'+labels[i].htmlFor).attr('checked'))
			{
				var address = jQuery('#'+labels[i].id).html();		
			}
		}
	}
	
	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location
			});
		} else {
			alert("Geocode was not successful for the following reason: " + status);
		}
	});
}

function submitLocation()
{
	jQuery('#locationForm').submit();
}

function changeLocationImage(srcValue,description,locationName)
{
	jQuery("#location_img").attr("src",srcValue);	
	jQuery("#img_location_popup").attr("href",srcValue);
	jQuery('#location_desc').text(description); 
	jQuery('#location_name').text(locationName);
	jQuery("#locationImg_post").val(srcValue);
	initialize();
	codeAddress();
	Shadowbox.setup();
}
