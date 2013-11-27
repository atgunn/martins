<?php 

ob_start();
drupal_add_js(drupal_get_path('module','entry').'/js/entry.js');
?>

<div class="container">

	<form method="post" action="entry/prerecordadd" id="preEntryForm">
  <div class="k-top"> 
  	<div class="info fl">
      <p>If you wish, you can select an entree from our extensive list of premium entrees for a slight additional charge per person.</p>
    </div><!--info-->
    
    <div class="pageiconimg fr">
    	<img src="<?php echo drupal_get_path('module','event')?>/images/leftimg.png" />
    </div><!--pageiconimg-->
  </div><!-- /end -->
  
  
  <div class="k-lr">
		<section>
			<ul class="k-tabs">
				<li><a href="#k-entrees" class="activetab">$2.00</a></li>
				<li><a href="#k-appetizers">$4.50</a></li>
				<li><a href="#k-vegetables">$5.50</a></li>
				<li><a href="#k-beverage">Other</a></li>
			</ul>
      <div class="form k-tab-form fl">
        <div class="k-tab-content" id="k-entrees">
        
        
              <figure>
                <img src='<?php echo $record->image; ?>' width='164' height='109' alt='Placeholder Image' />
                <figcaption> <?php echo $record->entriesName; ?></figcaption>
              </figure>
            
        </div><!-- /end -->
        <div class="k-tab-content" id="k-appetizers">
       
                <figure>
                  <img src='<?php echo $record->image; ?>' width='164' height='109' alt='Placeholder Image' />
                  <figcaption> <?php echo $record->entriesName; ?></figcaption>
                </figure>
              
          
        </div><!-- /end -->
        <div class="k-tab-content" id="k-vegetables">
        
                <figure>
                  <img src='<?php echo $record->image; ?>' width='164' height='109' alt='Placeholder Image' />
                  <figcaption> <?php echo $record->entriesName; ?></figcaption>
                </figure>
                
        </div><!-- /end -->
        <div class="k-tab-content" id="k-beverage">
        
                <figure>
                  <img src='<?php echo $record->image; ?>' width='164' height='109' alt='Placeholder Image' />
                  <figcaption> <?php echo $record->entriesName; ?></figcaption>
                </figure>
              
        </div><!-- /end -->
        <p>
          <div class="box box-frame pentrysopl">
            <select class="sel">
              <option value="0">Selct a Premium level...</option>   
              <option value="1">Entree Base</option>
              <option value="2">Entree Level 2</option> 
              <option value="3">Entree Level 3</option> 
              <option value="4">Entree Level 4</option> 
              <option value="5">Entree Level 5</option>
            </select>
          </div>
        </p>
        <p class="k-form-left">
          <a href="#" class="red startover">Start Over</a>
        </p>
        <p class="k-form-right">
          <a href="entry_view" class="pp">Previous</a>
          <a href="javascript:void(0)" class="pn" onclick="submitPreEntrees()">Next</a>
        </p>
        <div class="clearfix"></div><!-- /end -->
      </div><!-- /end -->
    
    	<div class="sidebar fr">
      	<a href="<?php echo drupal_get_path('module','entry')?>/images/entrees.png" rel="shadowbox">
	      	<img class="mainimg" src="<?php echo drupal_get_path('module','entry')?>/images/entrees.png" />
        </a>
        
        <div class="sidetxt">
        	<!--<h2>Wedding Receptions</h2>-->
          <p>We don't just ost an event. We host YOUR event! Look at some of the types of events we can ost. If your type is not listed, call us to help you design your special event!</p>
        </div><!--sidetxt-->
        
        <div class="cont_sprtr"></div>
        <div class="sidebarpp">
          <h3>Private Party Details</h3>
          <ul>
            <li class="btspp"><a href="#"><img src="/themes/bartik/images/icon-pdf.png" />Sit down Dinner Detail</a></li>
            <li><a href="#"><img src="/themes/bartik/images/icon-pdf.png" />Buffer Dinner Detail</a></li>
            <li><a href="#"><img src="/themes/bartik/images/icon-pdf.png" />Cocktail Party Detail</a></li>
          </ul>
        </div><!--sidebarpp-->
        
      </div><!--sidebar-->
    
		</section>
	</div>
  </form>
</div><!-- /end -->

 <?php

$outputPreEntry = ob_get_contents();
ob_end_clean();

return $outputPreEntry;