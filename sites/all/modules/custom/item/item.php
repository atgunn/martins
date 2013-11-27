<?php 
function getItems()
{
	return db_query('select * from item where status = 1 order by orderno');
}

ob_start();
session_start();
?>

<div class="container" id="">

	
  <div class="k-top">
  <div class="info fl">
      <p>We have a variety of special options you can choose from to enhance your event. Explore the list below!</p>
      <ul>
        <li>All Prices are Per Person (pp)</li>
      </ul>
    </div><!--info-->
    
    <div class="pageiconimg fr">
    	<img src="<?php echo drupal_get_path('module','event')?>/images/leftimg.png" />
    </div><!--pageiconimg-->
  </div><!-- /end -->
  
  
  <div class="k-lr">
		<section>
    <form method="post" action="item/recordadd" id="optionForm" class="fl">
    	<div class="topcontent w100 optcont" style="padding:0;">
        <div id="" class="faketable">
          <ul class="thead opt_ul">
            <li class="li1">Select</li>
            <li class="li2">Item</li>
            <li class="li3">Cost PP</li>
            <li class="li4">View Photo</li>
          </ul>
          
          <div class="scroll-pane">
						<?php $result = getItems(); 
            	$i = 0;
							
              foreach ($result as $record) 
              {
					$check = '';
					if (isset($_SESSION['option']['itemsIds']))
					{
						foreach ($_SESSION['option']['itemsIds'] as $itemId )
						{
							if ($record->id == $itemId)
							{
								$check = 'checked="checked"';
								$imgPath = $record->image;
								$itemName = $record->itemName;
								$itemDesc = $record->description;
								break;
							}
						}
					}
					else
					{
						if ($i == 0)
						{
							$check = 'checked="checked"';
							$imgPath = $record->image;
							$itemName = $record->itemName;
							$itemDesc = $record->description;
						}
					}
					$i++;
								
                ?>
                <div class="box box-frame disckbox">
                  <ul class="tbody">
                    <li class="li1">
                      <div class="frame">
                        <div class="row row-check">
                          <input type="checkbox" name="itemsIds[]" value="<?php echo $record->id; ?>" id="item_<?php echo $record->id; ?>" <?php echo $check; ?> onchange="changeOptionImage('<?php echo $record->id; ?>','<?php echo $record->image;?>','<?php echo addslashes($record->description);?>','<?php echo addslashes($record->itemName);?>')"> <label for="item_<?php echo $record->id; ?>"></label>
                        </div>
                      </div>
                    </li>
                    <li class="li2">
                      <div class="box-area">
                        <p><?php echo $record->itemName; ?></p>
                      </div>
                    </li>
                    <li class="li3"><?php echo '$'.$record->price.'%'; ?></li>
                    <li class="li4"><a href="<?php echo $record->image; ?>" class="photopop" rel="shadowbox" title='<?php echo $record->itemName; ?>' ><img src="<?php echo drupal_get_path('module','item').'/images/icon-photo.png'; ?>" alt="" height="30px" width="30px"></a></li>
                  </ul>
                  <input type="hidden" id="img_item_<?php echo $record->id; ?>" value="<?php echo $record->image;?>" />
                  <input type="hidden" id="name_item_<?php echo $record->id; ?>" value="<?php echo addslashes($record->itemName);?>" />
                  <input type="hidden" id="desc_item_<?php echo $record->id; ?>" value="<?php echo addslashes($record->description);?>" />
                </div>
                
                <?php /*?><div class="box box-frame disckbox">
                  <div class="frame">
                    <div class="row row-check">
                      <input type="checkbox" name="itemsIds[]" value="<?php echo $record->id; ?>" id="item_<?php echo $record->id; ?>" <?php echo $check; ?> onchange="changeOptionImage('<?php echo $record->id; ?>','<?php echo $record->image;?>','<?php echo addslashes($record->description);?>','<?php echo addslashes($record->itemName);?>')"> <label for="item_<?php echo $record->id; ?>"></label>
                    </div>
                  </div>
                  <div class="box-area">
                    <p><?php echo $record->itemName; ?></p>
                  </div>
                </div><?php */?>
                    
								<?php
              }
            ?>
          </div><!-- scrollpane -->
          
        </div><!-- k-options faketable -->
			</div><!--topcontent-->
			
      <div class="bottombtn">
        <p class="k-formsep">
          Choose two options at $2.50 or more,<br />and get one $2.00 option free.
        </p>
        <p class="k-form-left">
          <a href="common_page" class="red startover">Start Over</a>
        </p>
        <p class="k-form-right">
          <a href="display_view" class="pp">Previous</a>
          <a href="javascript:void(0)" class="pn" onclick="submitOption()">Next</a>
        </p>
      </div><!--bottombtn-->
      
      </form>
      
      <div class="sidebar fr">
      	<a href="<?php echo $imgPath ?>" rel="shadowbox" id="img_option_popup">
      		<img class="mainimg" src="<?php echo $imgPath ?>" id="option_img" />
        </a>
        
        <div class="sidetxt">
        	<?php /*?><h2 id="option_name"><?php echo $itemName ?></h2><?php */?>
          <p id="option_desc"><?php echo $itemDesc ?></p>
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

$outputOption = ob_get_contents();
ob_end_clean();

return $outputOption;