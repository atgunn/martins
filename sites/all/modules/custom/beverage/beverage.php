<?php 
function getAllBeverages()
{
	return db_query("select * from beverage where status = 1 order by orderno");
}
ob_start();
session_start();
drupal_add_js(drupal_get_path('module','beverage').'/js/beverage.js'); 

$allBeverageData = getAllBeverages(); 
$allBeverageRecord = $allBeverageData->fetchAll();

?>

<div class="container">
	<div class="k-top">
  	<div class="info fl">
      <p>We offer so much more than the typical bar service, so much more than you may have come to expect! Our bars include:</p>
      <ul>
        <li>wide variety of liquors</li>
        <li>cordials</li>
        <li>wines</li>
        <li>draft beer (3 varieties)</li>
        <li>bottled beer</li>
        <li>champangne</li>
        <li>frozen drink selections</li>
      </ul>
    </div><!--info-->
    
    <div class="pageiconimg fr">
    	<img src="<?php echo drupal_get_path('module','event')?>/images/leftimg.png" />
    </div><!--pageiconimg-->
  </div><!-- /end -->

	<div class="k-lr">
		<section>
			<form method="post" action="beverage/recordadd" id="beverageForm" class="fl">
      	<div class="topcontent w100 bevcont">
        	<div class="pParty fl" style="width:100%;">
            <label class="lblname">Opean Bar</label>
            <br /><br /><span class="etxt" style="padding-left:0;">Lorem ipsum</span>
            <br /><span class="etxt" style="padding-left:0;">(Upgraded bars at additional cost)</span>
            <div class="list fl w100 pt10">
            	<ul>
               <?php
				$i = 0;
				$beverageDesc = '';
				$beverageImg = '';
				
				foreach ($allBeverageRecord as $beverageRow)
				{
					if (trim($beverageRow->type) == 'Opean Bar')
					{  
						$checked = '';
						
						if (isset($_SESSION['beverage']['beverage_id']))
						{
							if ($_SESSION['beverage']['beverage_id'] == $beverageRow->id)
							{
								$checked = 'checked="checked"';
								$beverageDesc = $beverageRow->description;
								$beverageImg = $beverageRow->image;
							}
						}
						else
						{
							if ($i == 0)
							{
								$checked = 'checked="checked"';	
								$beverageDesc = $beverageRow->description;
								$beverageImg = $beverageRow->image;
							}
						}
						$i++;

						$beverageName = '';
						$beverageNameType = explode(",",$beverageRow->beverageName);
						
						if (count($beverageNameType) == 2)
							$beverageName = $beverageNameType[1];
						else	
							$beverageName = '';
						
					?>
						<li class="pl20 pb10">                   
							<div class="box box-frame">
							  <div class="row row-radio">
								<input type="radio" name="beverage_id" id="beverage_<?php echo $beverageRow->id; ?>" <?php echo $checked; ?> value="<?php echo  $beverageRow->id;?>" onchange="changeBeverageImage('<?php echo addslashes($beverageRow->image); ?>','<?php echo addslashes($beverageRow->description); ?>')"/>
								<label for="beverage_<?php echo $beverageRow->id; ?>" class="rdnew"><?php echo $beverageNameType[0]; ?></label>
							  </div>
							</div>
							<br /><span class="etxt"><?php echo $beverageName; ?></span>
						</li>
			<?php	}
				}
			   ?>
              	
                <?php
				foreach ($allBeverageRecord as $beverageRow)
				{
					if (trim($beverageRow->type) == 'Beer/Wine/Soda')
					{	
						$checked = ''; 
						if (isset($_SESSION['beverage']['beverage_id']))
						{
							if ($_SESSION['beverage']['beverage_id'] == $beverageRow->id)
							{
								$checked = 'checked="checked"';
								$beverageDesc = $beverageRow->description;
								$beverageImg = $beverageRow->image;
							}
						}
						else
						{
							if ($i == 0)
							{
								$checked = 'checked="checked"';	
								$beverageDesc = $beverageRow->description;
								$beverageImg = $beverageRow->image;
							}
						}
						$i++;
						
						$beverageName = '';
						$beverageNameType = explode(",",$beverageRow->beverageName);
						//echo '<pre>'; print_r($beverageNameType); exit;
						
						if (count($beverageNameType) == 2)
							$beverageName = $beverageNameType[1];
						else	
							$beverageName = '';
						
					?>
                <li>
                    <div class="box box-frame">
                      <div class="row row-radio">
                        <input type="radio" name="beverage_id" id="beverage_<?php echo $beverageRow->id; ?>" <?php echo $checked; ?> value="<?php echo  $beverageRow->id;?>" onchange="changeBeverageImage('<?php echo addslashes($beverageRow->image); ?>','<?php echo addslashes($beverageRow->description); ?>')"/>
                        <label for="beverage_<?php echo $beverageRow->id; ?>" class="rdnew"><?php echo $beverageNameType[0]; ?> </label>
                      </div>
                    </div>
                  	<br /><span class="etxt"><?php echo $beverageName; ?></span>
                </li><br />
         <?php 		}
				}
				?>     
         <?php
				foreach ($allBeverageRecord as $beverageRow)
				{
					if (trim($beverageRow->type) == 'Soda Bar')
					{ 
						$checked = '';
						
						if (isset($_SESSION['beverage']['beverage_id']))
						{
							if ($_SESSION['beverage']['beverage_id'] == $beverageRow->id)
							{
								$checked = 'checked="checked"';
								$beverageDesc = $beverageRow->description;
								$beverageImg = $beverageRow->image;
							}
						}
						else
						{
							if ($i == 0)
							{
								$checked = 'checked="checked"';	
								$beverageDesc = $beverageRow->description;
								$beverageImg = $beverageRow->image;
							}
						}
						$i++;
						
						$beverageName = '';
						$beverageNameType = explode(",",$beverageRow->beverageName);
						
						if (count($beverageNameType) == 2)
							$beverageName = $beverageNameType[1];
						else	
							$beverageName = '';
						
					?>  
                <li>
                    <div class="box box-frame">
                      <div class="row row-radio">
			            <input type="radio" name="beverage_id" id="beverage_<?php echo $beverageRow->id; ?>" <?php echo $checked; ?> value="<?php echo  $beverageRow->id;?>" onchange="changeBeverageImage('<?php echo addslashes($beverageRow->image); ?>','<?php echo addslashes($beverageRow->description); ?>')"/>
                        <label for="beverage_<?php echo $beverageRow->id; ?>" class="rdnew"><?php echo $beverageNameType[0]; ?></label>
                      </div>
                    </div><!--box-->
                  	<br /><span class="etxt"><?php echo $beverageName; ?></span>
                </li>
	   <?php 		}
       			}
        ?>     
              </ul>
              
            </div><!--list-->
          </div>
        	
        </div><!--topcontent-->     
        
        <div class="bottombtn">

          <div class="borderdiv"></div>
          <p class="k-form-left">
            <a href="common_page" class="red startover">Start Over</a>
          </p>
          <p class="k-form-right">
            <a href="entry_preview" class="pp">Previous</a>
            <a href="javascript:void(0)" class="pn" onclick="submitBeverage()">Next</a>
          </p>
        </div><!--bottombtn-->
      </form>
      
      <div class="sidebar fr">
      	<a href="<?php echo $beverageImg;?>" rel="shadowbox" id="img_beverage_popup">
	      	<img class="mainimg" src="<?php echo $beverageImg; ?>" id="beverage_img"/>
        </a>
        
        <div class="sidetxt">
        	<!--<h2>Wedding Receptions</h2>-->
          <p id="beverage_desc"><?php echo $beverageDesc; ?></p>
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

$outputBeverage = ob_get_contents();
ob_end_clean();

return $outputBeverage;