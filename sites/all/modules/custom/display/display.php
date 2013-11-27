<?php 
function getDisplays()
{
	return db_query('select * from display where status = 1 order by orderno');
}

ob_start();
session_start();
?>

<div class="container">
	<div class="k-top">
  	<div class="info fl">
			<p>Interested in accessorizing your event with some beautiful display? We have a number of choices available to enhance your affair.</p>
    </div><!--info-->
    
    <div class="pageiconimg fr">
    	<img src="<?php echo drupal_get_path('module','event')?>/images/leftimg.png" />
    </div><!--pageiconimg-->
  </div><!-- k-top end -->

	<div class="k-lr">
		<section>
			<form method="post" action="display/recordadd" id="displayForm" class="fl">
      	<div class="topcontent dis_content">
        	<div class="" style="">
            <div class="">
            	<div id="" class="faketable">
                
                <div class="scroll-pane dischkbox">
               
								<?php $result = getDisplays(); 
                  $i = 0;
									
                  foreach ($result as $record) 
                  {
						$check = '';
					
						if (isset($_SESSION['display']['displayIds']))
						{
							foreach ($_SESSION['display']['displayIds'] as $displayId )
							{
								if ($record->id == $displayId)
								{
									$check = 'checked="checked"';
									$imgPath = $record->image;
									$displayName = $record->displayName;
									$displayDesc = $record->description;
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
								$displayName = $record->displayName;
								$displayDesc = $record->description;
							}
						}
						$i++;
                  ?>
                  
										<div class="box box-frame disckbox">
                      <div class="frame">
                        <div class="row row-check">
                          <input type="checkbox" name="displayIds[]" value="<?php echo $record->id; ?>" id="display_<?php echo $record->id; ?>" <?php echo $check; ?> onchange= "changeDisplayImage('<?php echo $record->id; ?>','<?php echo $record->image;?>','<?php echo addslashes($record->description);?>','<?php echo addslashes($record->displayName);?>')">
                      		<label for="display_<?php echo $record->id; ?>"></label>
                        </div>
                      </div>
                      <div class="box-area">
                        <p><?php echo $record->displayName; ?></p>
                      </div>
                    </div><!--disckbox-->
                    
                    <input type="hidden" id="img_display_<?php echo $record->id; ?>" value="<?php echo $record->image;?>" />
                    <input type="hidden" id="name_display_<?php echo $record->id; ?>" value="<?php echo addslashes($record->displayName);?>" />
                    <input type="hidden" id="desc_display_<?php echo $record->id; ?>" value="<?php echo addslashes($record->description);?>" />
                    
										<?php
                  }
                  ?>
               </div><!-- scrollpane -->
              </div><!--k-options-->
           </div><!--list-->
          </div>
        	        
        </div><!--topcontent-->     
        
        <div class="bottombtn">
        	<div class="borderdiv"></div>
          <p class="k-form-left">
          	<a href="common_page" class="red startover">Start Over</a>
          </p>
          <p class="k-form-right">
            <a href="hors_view" class="pp">Previous</a>
            <a href="javascript:void(0)" class="pn" onclick="submitDisplay()">Next</a>
          </p>
        </div><!--bottombtn-->
        <input type="hidden" id="displayImg_post" name="displayImg" value="<?php echo $imgPath;?>" />
      </form>
      
      <div class="sidebar fr">
      	<a href="<?php echo $imgPath ?>" rel="shadowbox" id="imgdisplay_popup">
      		<img class="mainimg" src="<?php echo $imgPath ?>"  id="display_img"/>
        </a>
        
        <div class="sidetxt">
        	<?php /*?><h2 id="display_name"><?php echo $displayName ?></h2><?php */?>
          <p id="display_desc"><?php echo $displayDesc ?></p>
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
  </div><!-- k-lr -->
  
</div><!--container-->

 <?php

$outputDisplay = ob_get_contents();
ob_end_clean();

return $outputDisplay;