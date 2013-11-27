
<?php 
function getDiscount()
{
	return db_query('select * from discount where status = 1 order by orderno');
}

ob_start();
?>

<div class="container" id="">

  <div class="k-top">
  	<div class="info fl">
  		<p>We offer discounts for hosting your event at a variety of times. Take advantage of these to help make your event more affordable!</p>
    	<p class="k-form-right">
        <a href="download_30_list" target="_blank" class="downlbtn dtoffdate">Download 30% off Dates</a>
        <a href="javascript:void(0)" class="downlbtn ddreamw">Download Dream Weddings</a>
        <a href="javascript:void(0)" class="downlbtn dallpricing">Download All Day Pricing</a>
      </p>
    </div><!--info-->
    
    <div class="pageiconimg fr">
    	<img src="<?php echo drupal_get_path('module','event')?>/images/leftimg.png" />
    </div><!--pageiconimg-->
  </div><!-- /end -->
  <div class="k-lr">
		<section>
		<div class="form fl">
		<div id="k-discounts" class="faketable">
    	<ul class="thead">
				<li>Discounts</li>
				<li>Sun-Fri</li>
				<li>Saturday AM</li>
				<li>Saturday PM</li>
			</ul>
    
		<?php $result = getDiscount(); 
			
			foreach ($result as $record) 
			{
			?>
        <ul class="tbody">
        <li class="redfont"><?php echo $record->discountMonth; ?> <span><?php echo $record->discountName; ?></span></li>
				<li> <?php echo $record->Sunday_thru_friday; ?></li>
				<li> <?php echo $record->Saturday_am; ?></li>
				<li> <?php echo $record->Saturday_pm; ?></li>
        </ul>
        <?php
			}
			?>
			
		</div><!-- k-discounts -->
			<p class="k-formsep p-right downloadp">
      	<label class="discPrice">Discounts on base price and bar</label>
				<a href="download_complete_list" target="_blank" class="dList">Download Complete List</a>
			</p>
			<p class="k-form-left startOver">
				<a href="common_page" class="red startover">Start Over</a>
			</p>
			<p class="k-form-right prev-next">
				<a href="welcome_bookview" class="pp">Previous</a> 
        <a href="location_view" class="pn">Next</a>
			</p>
			<div class="clearfix"></div><!-- /end -->
		</div><!-- /end -->
    
    	<div class="sidebar fr">
      	<a href="<?php echo drupal_get_path('module','discount')?>/images/discount2.png" rel="shadowbox">
      		<img class="mainimg" src="<?php echo drupal_get_path('module','discount')?>/images/discount2.png" />
        </a>
        
        <div class="sidetxt">
        	<!--<h2>Wedding Receptions</h2>-->
          <p>Duis varius est eu velit varius vitae egestas metus dictum. Vestibulum et laoreet dui. Proinnec dolor mauris, ut rthoncus orci.</p>
        </div><!--sidetxt-->
      
        <div class="cont_sprtr"></div>
        <div class="sidebarpp">
          <h3>Private Party Details</h3>
          <ul>
            <li class="btspp"><a href="javascript:void(0)"><img src="/themes/bartik/images/icon-pdf.png" />Sit down Dinner Detail</a></li>
            <li><a href="javascript:void(0)"><img src="/themes/bartik/images/icon-pdf.png" />Buffer Dinner Detail</a></li>
            <li><a href="javascript:void(0)"><img src="/themes/bartik/images/icon-pdf.png" />Cocktail Party Detail</a></li>
          </ul>
        </div><!--sidebarpp-->
      
      </div><!--sidebar-->
		</section>
		
  </div><!-- /end -->
</div><!-- container /end -->

<?php

$outputDiscount = ob_get_contents();
ob_end_clean();

return $outputDiscount;