<header id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>">
  <div class="header-inner">
    <div class="logo-w"><div id="logo"><a href="<?php print $front_page; ?>">Martins</a></div></div>
    <?php print render($page['header']); ?>
  </div>
</header>
<script type="text/javascript">
 
jQuery(document).ready(function() { 
var page_image = jQuery(".k-top .content .field-name-field-page-image" ).html();
var page_image_title = jQuery(".k-top .content .field-name-field-page-image-title" ).html();
var page_image_desc = jQuery(".k-top .content .field-name-field-page-image-desc" ).html();
jQuery('.contextual-links-region .content #welcomepageid').append(page_image);	
jQuery('.contextual-links-region .content #welcomepageid').append(page_image_title);
jQuery('.contextual-links-region .content #welcomepageid').append(page_image_desc);
jQuery("#martins-planner-options-form .flickrgallery-image").colorbox({ width:"650px", height:"80%"});
//jQuery('#content-messages').delay(15000).fadeOut();
jQuery('#flickrgallery .flickr-wrap-image a').removeClass('cboxElement').addClass( "flickrclass" );
jQuery('#flickrgallery .flickr-wrap-image a').click(function() {
var hreff = jQuery(this).attr('href');
var title = jQuery(this).attr('title');
jQuery(this).removeAttr("href");
jQuery('.sidebar-entrees .content .mainimg').attr('src',hreff);
jQuery('.sidebar-entrees .content #cakes_title').html(title);

});

jQuery('.form-item-event-music .form-radio').click(function() {
	var mid = jQuery(this).val();
	var misicimg = jQuery('#music_'+mid).html();
	jQuery('.sidebar-block-music .content').html(misicimg);
});

jQuery( "#martins-planner-beverage-form #edit-event-beverage .form-radio" ).each(function() {
var checkval = jQuery(this).attr('checked');
//alert(checkval);
if(checkval=='checked' || checkval==true)
{
	var id = jQuery(this).attr('value');
	var b = jQuery('#tax_'+id).html();
	jQuery('.sidebar-block-beverage .content').html(b);
}
});

jQuery('#martins-planner-beverage-form #edit-event-beverage .form-radio').click(function() {
var taxId = jQuery(this).attr('value');
var beverage = jQuery('#tax_'+taxId).html();
//alert(taxId);
jQuery('.sidebar-block-beverage .content').html(beverage);


});

//jQuery('#quicktabs-cakes #flickrgallery .flickr-wrap-image a').removeAttr("href");



});
</script>
  <?php if ($main_menu): ?>
    <nav>
    <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
    </nav>
  <?php endif; ?>
<?php 
$current_path = $_GET['q'];	 $str=explode('/', request_uri()); 
$new_str = explode('?', $str[2]);
?>
<div class="container" id="main">
  <div id="content" class="clearfix">

    <div class="k-top">
      <h1><?php print $title; ?></h1>
  
      <div class="tabs">
        <?php print render($tabs); ?>
      </div>
      <?php print render($page['content']); 
	  if((in_array('beverages', $str)  || in_array('beverages', $new_str)) && ($user->uid)) {
	  $terms = taxonomy_get_tree(6);
	  	foreach($terms as $t)
		{
		  $term = taxonomy_term_load($t->tid);
		  echo '<div id="tax_'.$term->tid.'" class="tax_row">
						<div id="tax_img"><img src="'.image_style_url('medium', $term->field_beverage_image['und'][0]['filename']).'"></div>
						<div id="tax_wrap">
						<div id="tax_title">'.$term->field_beverage_image_title['und'][0]['value'].'</div>
						<div id="tax_desc">'.$term->field_beverage_image_desc['und'][0]['value'].'</div>
						</div>
				</div>';
		}		
		 // print_r($term);
	  
	  }
	  ?>
    </div>
  </div><!-- /end -->

  <div id="content_end"></div><!-- /end -->
</div><!-- /end -->

<div class="container container-clear">

<div id="footer-wrapper"><div class="section"><div id="footer" class="clearfix">
  <?php print render($page['footer']) ?>
  <?php print $feed_icons ?>
</div></div></div> <!-- /#footer -->
</div>

<div class="fEnd">
  <div class="fsubcont">
    <p>Copyright © 2013 Martin's Caterers; All rights reserved.</p><br />
    <p class="cid">CID# 95-0110; Site by <a href="http://www.alliedpixel.com/">Allied Pixel</a></p>
  </div><!--fsubcont-->
</div><!--fEnd-->