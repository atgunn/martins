function submitMusic()
{
	jQuery('#musicForm').submit();
}
function changeMusicImage(srcValue,description,title)
{
	jQuery("#music_img").attr("src",srcValue);
	jQuery("#img_music_popup").attr("href",srcValue);
	jQuery('#music_desc').text(description);
	jQuery('#music_name').text(title);
	Shadowbox.setup();
}