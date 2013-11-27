<?php 
function getLocation()
{
	return db_query('select * from location where status = 1 order by orderno');
}
ob_start();
session_start();
?>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>

<div class="container">
	<div class="k-top">
  	<div class="info fl">
			<p>Martins has seven locations throughout the Baltimore/Washington metropolian area. Each is distinctive, with a personality all its own. Pick the location that fits your personality and budget!</p>
    </div>
    
    <div class="pageiconimg fr">
    	<img src="<?php echo drupal_get_path('module','event')?>/images/leftimg.png" />
    </div>
    
  </div><!-- k-top end -->

	<div class="k-lr">
		<section>
			<form method="post" action="location/recordadd" id="locationForm" class="fl">
      	<div class="topcontent locaCont w100">
        	<div class="fl" style="width:100%;">
            <label class="lblname pb10">Locations</label>
            <div class="list fl pb10">
            	<ul>
              	<li>
               <?php $result = getLocation(); 
						$i = 0;
						$checked = '';
						$imgPath = '';
						$locationDesc = '';
						$locationName = '';

						foreach ($result as $record) 
						{
							if (isset($_SESSION['location']['locationId']))
							{
								if ($_SESSION['location']['locationId'] == $record->id)
								{
									$checked = 'checked="checked"';
									$imgPath = $record->image;
									$locationDesc = $record->description;
									$locationName = $record->locationName;
								}
							}
							else
							{
								if ($i == 0)
								{
									$checked = 'checked="checked"';
									$imgPath = $record->image;
									$locationDesc = $record->description;
									$locationName = $record->locationName;
								}
							}
							$i++;
							
							$temp = $record->locationName.', '.$record->address.', '.$record->city.', '.$record->state.', '.$record->pinCode;											
											?> 
                        <div class="box box-frame fl">
                          <div class="row row-radio pb5">
                            <input type="radio" id="location_<?php echo $record->id; ?>" name="locationId" <?php echo  $checked; ?> value="<?php echo $record->id; ?>" onchange= "changeLocationImage('<?php echo $record->image;?>','<?php echo addslashes($record->description);?>','<?php echo addslashes($record->locationName);?>')"> 
                            <label class="rdnew" for="location_<?php echo $record->id; ?>" id="location_lab_<?php echo $record->id; ?>">
                              <?php echo $temp ?>
                            </label>
                          </div><br />
                        </div><!--box-->
                      
											<?php
											 $checked = '';
										}
									?> 	
                </li>
              </ul>
              
            </div><!--list-->
            <div id="map-canvas" style="width:470px;height:380px;"></div>
         </div>          
        
        </div><!--topcontent-->     
        
        <div class="bottombtn">
          <p class="k-formsep subavailable">
            <a href="javascript:void(0)" class="dList" onclick="initialize();codeAddress()" id="Google Map">Map of Locations</a>
          </p>
          <p class="k-form-left">
           <a href="common_page" class="red startover">Start Over</a>
          </p>
          <p class="k-form-right">
            <a href="discount_view" class="pp">Previous</a>
            <a href="javascript:void(0)" class="pn" onclick="submitLocation()">Next</a>
          </p>
        </div>
        <input type="hidden" id="locationImg_post" name="locationImg" value="<?php echo $imgPath; ?>" />
      </form>
      
      <div class="sidebar fr">
      	<a href="<?php echo $imgPath; ?>" rel="shadowbox" id="img_location_popup">
      		<img class="mainimg" src="<?php echo $imgPath; ?>" style="width:97%;" id="location_img"/>
        </a>
        <div class="sidetxt">
        	<!--<h2 id="location_name"><?php //echo $locationName; ?></h2>-->
          <p id="location_desc"><?php echo $locationDesc; ?></p>
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
<script>
	initialize();
	codeAddress();
</script>
    
  <?php

$outputCake = ob_get_contents();
ob_end_clean();

return $outputCake;