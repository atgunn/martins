
<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="/sites/all/themes/bartik_m/shadowbox/shadowbox.js"></script>
<link href="/sites/all/themes/bartik_m/shadowbox/shadowbox.css" rel="stylesheet" type="text/css" />

<?php 			
	drupal_add_css('sites/all/themes/bartik_m/assets/css/martins.css'); 
	drupal_add_css('sites/all/themes/bartik_m/assets/css/normalize.css');
	drupal_add_css('sites/all/themes/bartik_m/assets/css/form.css');
	drupal_add_css('sites/all/themes/bartik_m/assets/css/custom-theme/jquery-ui-1.10.3.custom.css');

	drupal_add_js(drupal_get_path('module','event').'/js/event.js'); 
	drupal_add_js(drupal_get_path('module','welcome').'/js/welcome.js'); 
	drupal_add_js(drupal_get_path('module','location').'/js/location.js'); 
	drupal_add_js(drupal_get_path('module','hors').'/js/hors.js');
	drupal_add_js(drupal_get_path('module','display').'/js/display.js'); 
	drupal_add_js(drupal_get_path('module','cake').'/js/cake.js');
	drupal_add_js(drupal_get_path('module','item').'/js/item.js'); 
	drupal_add_js(drupal_get_path('module','music').'/js/music.js'); 

?>

<script>
jQuery(document).ready(function()
{
	var liIds = jQuery('#main-menu-links a').map(function(i,n) {
    	jQuery(n).attr('href','javascript:void(0)');
		jQuery(n).unbind("click");
	}).get().join(',');
	//alert(liIds);
});
</script>

<div id="page-wrapper"><div id="page">

  <div id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>"><div class="section clearfix">
		
    <div class="logo-w">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="element-invisible"'; } ?>>

        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
              <strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
            <?php print $site_slogan; ?>
          </div>
        <?php endif; ?>

      </div> <!-- /#name-and-slogan -->
    <?php endif; ?>
    	<div class="hmenu">
      
      	<div id="header-region">
          <div id="block-locale-0" class="block block-locale">
            <h3 class="title">Languages</h3>
            <div class="">
              <ul>
              	<li class="en first active"><a href="/locations/crosswinds" class="language-link active">English</a></li>
          			<li class="es last"><a href="/es/locations/crosswinds" class="language-link">Español</a></li>
          		</ul>
            </div>
          </div><!--block block-locale-->
          
          <div id="block-block-12" class="block block-block">
            <div class="">
              <a href="/details/directions" id="directions-link">Get Directions</a>
            </div>
          </div><!--block block-block-->
          
          <div id="block-search-0" class="block block-search">
            <div class="">
              <form action="/locations/crosswinds"  accept-charset="UTF-8" method="post" id="search-block-form">
          			<div>
                	<div class="container-inline">
            				<div class="inputtxt">
           						<input type="text" maxlength="128" name="search_block_form" id="edit-search-block-form-1" size="15" value="" placeholder="Search this site" class="form-text" />
          					</div>
                    <input type="image" name="" id=""  class="" src="/sites/all/themes/bartik_m/images/search-buttonh.png" />
                    <input type="hidden" name="form_build_id" id="form-88e7f8bb6d75e5ca72ffe440152cdaec" value="form-88e7f8bb6d75e5ca72ffe440152cdaec"  />
                    <input type="hidden" name="form_id" id="edit-search-block-form" value="search_block_form"  />
          				</div><!--container-inline-->
          
          			</div>
              </form>
            </div><!--content-->
          </div><!--block block-search-->
         
        </div><!--header-region-->
      
      	<div id="mainnav">
    			<ul class="menu">
            <li class="leaf first"><a href="/welcome" title="Welcome">Welcome</a></li>
            <li class="expanded active-trail"><a href="/your-event" title="">Your Event</a>
              <ul class="menu"><li class="leaf first"><a href="/your-event/weddings-and-receptions" title="">Weddings and Receptions</a></li>
                <li class="leaf"><a href="/your-event/banquets-and-dinners" title="Banquets and Dinners">Banquets and Dinners</a></li>
                <li class="leaf active-trail"><a href="/your-event/corporate-meetings-and-seminars" title="Corporate Meetings and Seminars" class="active">Corporate Meetings and Seminars</a></li>
                <li class="leaf"><a href="/your-event/expos-and-tradeshows" title="Expos and Tradeshows">Expos and Tradeshows</a></li>
                <li class="leaf"><a href="/your-event/feasts-and-bull-roasts" title="Feasts and Bull Roasts">Feasts and Bull Roasts</a></li>
                <li class="leaf"><a href="/your-event/quinceanera-day" title="Quinceañera Day">Quinceañera Day</a></li>
                <li class="leaf"><a href="/your-event/box-lunches" title="">Box Lunches</a></li>
                <li class="leaf last"><a href="/your-event/premise-catering" title="Off Premise Catering Menus">Off Premise Catering</a></li>
                
              </ul>
            </li>
          
            <li class="expanded"><a href="/locations" title="Locations">Locations</a>
              <ul class="menu"><li class="leaf first"><a href="/locations/crosswinds" title="Crosswinds">Crosswinds</a></li>
                <li class="leaf"><a href="/locations/west" title="West">West</a></li>
                <li class="leaf"><a href="/locations/valley-mansion" title="Valley Mansion">Valley Mansion</a></li>
                <li class="leaf"><a href="/locations/camelot" title="Camelot">Camelot</a></li>
                <li class="leaf"><a href="/locations/east" title="East">East</a></li>
                <li class="leaf"><a href="/locations/westminster" title="Westminister">Westminster</a></li>
                <li class="leaf last"><a href="/locations/martinsbo-brooks-academy">Martins/Bo Brooks at the Academy</a></li>
                
              </ul>
            </li>
            <li class="expanded last"><a href="/details" title="Details">Details</a>
              <ul class="menu">
                <li class="leaf first"><a href="/details/public-events" title="Public Events">Public Events</a></li>
                <li class="leaf"><a href="/details/menus" title="Menus">Menus</a></li>
                <li class="leaf"><a href="/details/services" title="Services">Services</a></li>
                <li class="leaf"><a href="/details/comments" title="">Our Customers Say</a></li>
                <li class="leaf"><a href="/details/photo-gallery" title="Gallery">Photo Gallery</a></li>
                <li class="leaf"><a href="/details/recipe-month" title="">Recipe of the Month</a></li>
                <li class="leaf"><a href="/details/directions" title="Directions">Directions</a></li>
                <li class="leaf"><a href="/details/employment" title="Employment">Employment</a></li>
                <li class="leaf"><a href="/details/faq" title="FAQ">FAQ</a></li>
                <li class="leaf last"><a href="/details/contact-us" title="Contact Us">Contact Us</a></li>
              </ul>
            </li>
          </ul>    	
        </div><!--mainnav-->
      </div><!--hmenu-->
      
		</div><!--logo-w-->
		
    <?php print render($page['header']); ?>

    <?php if ($main_menu): ?>
    <div class="main-menu-bg">
      <div id="main-menu" class="navigation">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#main-menu -->
    </div><!--main-menu-bg-->
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <div id="secondary-menu" class="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#secondary-menu -->
    <?php endif; ?>

  </div></div> <!-- /.section, /#header -->

  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>

  <?php if ($page['featured']): ?>
    <div id="featured"><div class="section clearfix">
      <?php print render($page['featured']); ?>
    </div></div> <!-- /.section, /#featured -->
  <?php endif; ?>

  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_first']); ?>
      </div></div> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>

    <div id="content" class="column"><div class="section">
      <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>

    </div>
    <div id="content_end"></div>
    </div> <!-- /.section, /#content -->

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_second']); ?>
      </div></div> <!-- /.section, /#sidebar-second -->
    <?php endif; ?>

  </div></div> <!-- /#main, /#main-wrapper -->

  <?php if ($page['triptych_first'] || $page['triptych_middle'] || $page['triptych_last']): ?>
    <div id="triptych-wrapper"><div id="triptych" class="clearfix">
      <?php print render($page['triptych_first']); ?>
      <?php print render($page['triptych_middle']); ?>
      <?php print render($page['triptych_last']); ?>
    </div></div> <!-- /#triptych, /#triptych-wrapper -->
  <?php endif; ?>

  <div id="footer-wrapper"><div class="section">

    <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
      <div id="footer-columns" class="clearfix">
        <?php print render($page['footer_firstcolumn']); ?>
        <?php print render($page['footer_secondcolumn']); ?>
        <?php print render($page['footer_thirdcolumn']); ?>
        <?php print render($page['footer_fourthcolumn']); ?>
      </div> <!-- /#footer-columns -->
    <?php endif; ?>

    <?php if ($page['footer']): ?>
      <div id="footer" class="clearfix">
        <?php /*?><?php print render($page['footer']); ?><?php */?>
        
        <div class="" style="margin:0 auto; width:939px;">
          <div class="bgfl">
            <div class="bgf">
              <h2>Contact us today and allow one of our event planners to help you arrange the perfect menu.</h2>
              <a href="#" class="purple">LET'S TALK</a>
            </div><!--bgf-->
          </div><!--bgfl-->
        </div><!--let's talk-->
        
        <!--Footer Site Map Menus-->
        <div class="fcont">
        	<div class="column1">
          	<h4>Welcome</h4>
            <p>Martin's is the Baltimore and Washington metro area's top catering firm. We have been hosting exceptional events for nearly 50 years.</p>
            <a href="#">Learn About the Martin's Manner</a>
          </div><!--column1-->
          
          <div class="column2">
          	<h4>Your Event</h4>
            <ul>
            	<li><a href="#">Weddings and Receptions</a></li>
              <li><a href="#">Banquets and Dinners</a></li>
              <li><a href="#">Corporate Meetings and Seminars</a></li>
              <li><a href="#">Expos and Tradeshows</a></li>
              <li><a href="#">Feasts and Bull Roasts</a></li>
              <li><a href="#">Quinceañera Day</a></li>
              <li><a href="#">Box Lunches</a></li>
              <li><a href="#">Off Premise Catering</a></li>
            </ul>
          </div><!--column2-->
          
          <div class="column3">
          	<h4>Locations</h4>
            <ul>
            	<li><a href="#">Camelot</a></li>
              <li><a href="#">Crosswinds</a></li>
              <li><a href="#">East</a></li>
              <li><a href="#">Valley Mansion</a></li>
              <li><a href="#">West</a></li>
              <li><a href="#">Westminster</a></li>
              <li><a href="#">Martins/Bo Brooks at the Academy</a></li>
            </ul>
          </div><!--column3-->
          
          <div class="column4">
          	<h4>Details</h4>
            <ul>
            	<li><a href="#">Public Events</a></li>
              <li><a href="#">Menus</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Directions</a></li>
              <li><a href="#">Employment</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div><!--column4-->
          
          <div class="column5">
          	<p class="">"Maecenas nisl massa, porta ut egestas non, tempor sed magna. Integer ut sapien iaculis massa condimentum bibendum non at lectus."</p>
            <a href="https://twitter.com/martinscaterers" class="twitterbtn">Follow Us on Twitter</a>
            <ul>
            	<li><a href="http://www.flickr.com/photos/martinscaterers/"><img src="/sites/all/themes/bartik_m/images/flickr.png" />Flickr</a></li>
              <li><a href="https://www.facebook.com/martinscaterers"><img src="/sites/all/themes/bartik_m/images/facebook.png" />Facebook</a></li>
              <li><a href="#" style="padding-right:0 !important;"><img src="/sites/all/themes/bartik_m/images/youtube.png" />You Tube</a></li>
            </ul>
          </div><!--column5-->
        </div>
        
      </div> <!-- /#footer -->
      
      <div class="fEnd">
      	<div class="fsubcont">
          <p>Copyright © 2013 Martin's Caterers; All rights reserved.</p><br />
          <p class="cid">CID# 95-0110; Site by <a href="http://www.alliedpixel.com/">Allied Pixel</a></p>
        </div><!--fsubcont-->
      </div><!--fEnd-->
      
    <?php endif; ?>
    <script src="/sites/all/themes/bartik_m/shadowbox/shadowboxscript.js"></script>
    <script src="themes/bartik/assets/js/app.js"></script>
    <script src="themes/bartik/assets/js/plugins.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<!--     <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->
    
  </div></div> <!-- /.section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
