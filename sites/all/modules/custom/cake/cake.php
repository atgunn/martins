<?php 
function getEntries()
{
	return db_query('select * from cake where status = 1 order by orderno');
}
ob_start();
session_start();
?>

<div class="container">
	<form method="post" action="cake_recadd" id="cakeForm" class="fl">
  <div class="k-top">
  	<div class="info fl">
			<p>We've got a wide selection of cakes to compliment your event. Or, if you'd like, supply your own cake!</p>
    </div>
    
    <div class="pageiconimg fr">
    	<img src="<?php echo drupal_get_path('module','event')?>/images/leftimg.png" />
    </div>
  </div><!-- k-top end -->
  
  <div class="k-lr">
		<section>
			<ul class="k-tabs">
				<li style="width:250px"><a href="#k-entrees" class="activetab">Wedding Cakes</a></li>
				<li style="width:250px"><a href="#k-appetizers">Premium Wedding Cakes</a></li>
			</ul>
      <div class="form k-tab-form fl" id="all-images-cake">
        <div class="k-tab-content" id="k-entrees">
        
          <?php $result = getEntries(); 
        
						$i = 0;
						$imgPath = '';  
						$cakeName = '';
						$cakeDesc = '';    
						$cakeId = ''; 
						$type = '';
						
            foreach ($result as $record) 
            {
							if ($record->type == 0)
              {
								if (isset($_SESSION['cake']['cakeId']))
								{
									if ($record->id == $_SESSION['cake']['cakeId'])
									{
										$addClass = 'class="activeimg"';
										$imgPath = $record->image;
										$cakeName = $record->cakeName;
										$cakeDesc = $record->description;  
										$cakeId = $record->id;
										$type = $record->type;
									}
									else
									{
										$addClass = '';		
									}
								}
								else
								{
									if ($i == 0)
									{
										$addClass = 'class="activeimg"';
										$imgPath = $record->image;
										$cakeName = $record->cakeName;
										$cakeDesc = $record->description;  
										$cakeId = $record->id;
									}
									else
									{
										$addClass = '';		
									}
								}
									$i++;	
              ?>
              <figure>
                <img src='<?php echo $record->image; ?>' width='164' height='109' alt='Placeholder Image'  id="<?php echo $record->id; ?>"/>
                <figcaption id="cake_figcaption_<?php echo $record->id; ?>"> <?php echo $record->cakeName; ?></figcaption>
               	<input type="hidden" id="cakedesc_<?php echo $record->id; ?>" value="<?php echo addslashes($record->description); ?>"/>
              </figure>
              <?php
							}
            }
          ?>
        </div><!-- /end -->
        <div class="k-tab-content" id="k-appetizers">
        <?php $result = getEntries(); 
												
            foreach ($result as $record) 
            {
              if ($record->type == 1)
              {
					if (isset($_SESSION['cake']['cakeId']))
					{
						if ($record->id == $_SESSION['cake']['cakeId'])
						{
							$addClass = 'class="activeimg"';
							$imgPath = $record->image;
							$cakeName = $record->cakeName;
							$cakeDesc = $record->description;  
							$cakeId = $record->id;
							$type = $record->type;
						}
						else
						{
							$addClass = '';		
						}
					}
					else
					{
						if ($i == 0)
						{
							$addClass = 'class="activeimg"';
							$imgPath = $record->image;
							$cakeName = $record->cakeName;
							$cakeDesc = $record->description;  
							$cakeId = $record->id;
						}
						else
						{
							$addClass = '';		
						}
					}
					$i++;	
                ?>
                <figure>
                  <img src='<?php echo $record->image; ?>' width='164' height='109' alt='Placeholder Image' id="<?php echo $record->id; ?>" />
                  <figcaption id="cake_figcaption_<?php echo $record->id; ?>"> <?php echo $record->cakeName; ?></figcaption>
                 	<input type="hidden" id="cakedesc_<?php echo $record->id; ?>" value="<?php echo addslashes($record->description); ?>"/>
                </figure>
                <?php
              }
            } ?>
          
        </div><!-- /end -->
        
        <div class="bottombtn">
          <p>
            <div class="box box-frame pentrysopl">
              <select class="sel">
                <option value="0">Select Wedding Cake</option>   
                <option value="1">Own</option>
                <option value="2">Martin's</option> 
              </select>
            </div>
          </p>
          <p class="k-form-left">
          	<a href="common_page" class="red startover">Start Over</a>
          </p>
          <p class="k-form-right">
            <a href="item_view" class="pp">Previous</a>
            <a href="javascript:void(0)" class="pn" onclick="submitCake()">Next</a>
          </p>
        </div>
      </div><!-- /end -->  
        
      <div class="sidebar fr">
      	<a href="<?php echo $imgPath; ?>" rel="shadowbox" id="img_cake_popup">
        	<img class="mainimg" src="<?php echo $imgPath; ?>" id="cake_img"/>
        </a>
        
        <div class="sidetxt">
          <?php /*?><h2 id="cake_name"> <?php echo $cakeName; ?> </h2><?php */?>
          <p id="cake_desc"> <?php echo $cakeDesc; ?> </p>
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
  <input type="hidden" value="<?php echo $cakeId;?>" id="cake_id" name="cakeId"/>
  </form> 
</div><!-- container /end -->

<?php

$outputCake = ob_get_contents();
ob_end_clean();

return $outputCake;