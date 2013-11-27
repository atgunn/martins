<header id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>">
  <div class="header-inner">
    <div class="logo-w"><div id="logo"><a href="<?php print $front_page; ?>">Martins</a></div></div>
    <?php print render($page['header']); ?>
  </div>
</header>

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

<div class="container" id="main">
  <div id="content" class="clearfix">

    <div class="k-top">
      <h1><?php print $title; ?></h1>
  
      <div class="tabs">
        <?php print render($tabs); ?>
      </div>

      <?php print render($page['content']); ?>
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