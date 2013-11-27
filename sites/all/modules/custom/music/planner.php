<?php 


function getAllEvents()
{
	return db_query("select * from event_type where status = 1 order by orderno");
}

function getAllLocations()
{
	return db_query("select * from location where status = 1 order by orderno");
}

function getAllDisplay()
{
	return db_query('select * from display where status = 1 order by orderno');
}

function getAllOptions()
{
	return db_query('select * from item where status = 1 order by orderno');
}

function getAllMusic()
{
	return db_query('select * from music where status = 1 order by orderno');
}

function getAllCake()
{
	return db_query('select * from cake where status = 1 order by orderno');
}

ob_start();
session_start();
drupal_add_js(drupal_get_path('module','music').'/js/planner.js'); 
//echo '<pre>'; print_r($_SESSION['option']); exit;

$allEventData = getAllEvents(); 
$allEventRecord = $allEventData->fetchAll();

$allLocationData = getAllLocations(); 
$allLocationRecord = $allLocationData->fetchAll();

$allDisplayData = getAllDisplay(); 
$allDisplayRecord = $allDisplayData->fetchAll();

$allOptionData = getAllOptions(); 
$allOptionRecord = $allOptionData->fetchAll();

$allCakeData = getAllCake(); 
$allCakeRecord = $allCakeData->fetchAll();

$allMusicData = getAllMusic(); 
$allMusicRecord = $allMusicData->fetchAll();
/*foreach ($allDisplayRecord as $displayRow)
{
	echo '<pre>'; print_r($displayRow);
}
print_r($allDisplayRecord);
 exit;*/
?>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!--<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>-->
<script>
	$(function() {
		$( "#date_pro1" ).datepicker();
	});
</script>

<link rel="stylesheet" type="text/css" href="themes/bartik/assets/css/planner.css" />

<div class="container">

  <div class="k-top fl">
    <div class="info fl">
      <p>We don't just ost an event. We host YOUR event! Look at some of the types of events we can ost. If your type is not listed, call us to help you design your special event!
      We host YOUR event! Look at some of the types of events we can ost. If your type is not listed, call us to help you design your special event!</p>
    </div><!--infoplan-->
    
    <div class="pageiconimg fr">
      <img src="<?php echo drupal_get_path('module','event')?>/images/leftimg.png" />
    </div><!--pageiconimg-->
  </div><!-- k-top end -->
    
  <div class="main-holder fl w100">  
		<div class="infoplan">
			<div class="infoplan-top">
				<div class="block"></div>
				<div class="holder">
					<div class="box">
						<h2>Proposal 1</h2>
					</div>
					<div class="box">
						<h2>Proposal 2</h2>
					</div>
				</div>
			</div><!-- /infoplan-top -->
			<div class="infoplan-content">
				<form action="#">
					<fieldset style="background:none;">
						<div class="block-01">
							<div class="row-area">
								<div class="titleplan-box">
									<strong>Event Type</strong>
								</div>
								<div class="box box-frame">
									<select class="sel">
                  <?php 
										foreach ($allEventRecord as $eventRow)
										{
											$eventSelection = '';
											
											if (isset($_SESSION['event']['eventId']))
											{
												if ($eventRow->id == $_SESSION['event']['eventId'])
													$eventSelection = 'selected="selected"';
											}
										?>
                    <option <?php echo $eventSelection;?> value="<?php echo $eventRow->id;?>"> <?php echo $eventRow->title; ?></option>
							<?php	}
									?>
										
									</select>
								</div>
								<div class="box">
									<select class="sel">
                   <?php 
										foreach ($allEventRecord as $eventRow)
										{	?>
                    <option value="<?php echo $eventRow->id;?>"> <?php echo $eventRow->title; ?></option>
							<?php	}
									?>
									</select>
								</div>
							</div>
							<div class="row-area">
								<div class="titleplan-box">
									<strong>Date</strong>
								</div>
								<div class="box box-frame">
									<div class="row">
										<input class="text" type="text" value="Saturday, Jan 24, 2013" id="date_pro1" />
									</div>
								</div>
								<div class="box">
									<div class="row">
										<input class="text" type="text" value="Friday, Jan 23, 2013" />
									</div>
								</div>
							</div>
							<div class="row-area">
								<div class="titleplan-box">
									<strong>Time of Day</strong>
								</div>
								<div class="box box-frame">
									<div class="row row-radio">
										<input type="radio" name="eventTime" id="lbl-01" <?php echo isset($_SESSION['welcome']['eventTime']) && $_SESSION['welcome']['eventTime'] == 0 ? 'checked="checked"':'';?>/>
										<label for="lbl-01">Afternoon (1p - 5p)</label>
									</div>
									<div class="row">
										<input type="radio" name="eventTime" id="lbl-02" <?php echo isset($_SESSION['welcome']['eventTime']) && $_SESSION['welcome']['eventTime'] == 0 ? '':'checked="checked"';?>/>
										<label for="lbl-02">Evening (7:30p - 11:30p)</label>
									</div>
								</div>
								<div class="box">
									<div class="row row-radio">
										<input type="radio" name="radio-02" id="lbl-03"/>
										<label for="lbl-03">Afternoon (1p - 5p)</label>
									</div>
									<div class="row">
										<input type="radio" name="radio-02" id="lbl-04" checked="checked"/>
										<label for="lbl-04">Evening (7:30p - 11:30p)</label>
									</div>
								</div>
							</div>
							<div class="row-area">
								<div class="titleplan-box">
									<strong>
                                    <a href="<?php echo isset($_SESSION['location']['locationImg'])? $_SESSION['location']['locationImg'] : ''; ?>" rel="shadowbox" id="img_planner_loc1_popup">
                                    <img src="<?php echo  isset($_SESSION['location']['locationImg'])? $_SESSION['location']['locationImg'] : '';?>" alt="image" width="25" height="19" id="location_prop1_img" /> </a> Location</strong>
								</div>
								<div class="box box-frame">
									<select class="sel" id="select_location_img">
                   <?php 
										foreach ($allLocationRecord as $locationRow)
										{
											$locationSelection = '';
											
											if (isset($_SESSION['location']['locationId']))
											{
												if ($locationRow->id == $_SESSION['location']['locationId'])
													$locationSelection = 'selected="selected"';
											}
										?>
                    <option <?php echo $locationSelection;?> value="<?php echo $locationRow->id;?>" src="<?php echo $locationRow->image; ?>"> <?php echo $locationRow->locationName; ?></option>
							<?php	}
									?>
									</select>
								</div>
								<div class="box">
									<select class="sel">
                 <?php 
										foreach ($allLocationRecord as $locationRow)
										{
									?> <option value="<?php echo $locationRow->id;?>"><?php echo $locationRow->locationName; ?></option>
               <?php } ?>
                  
									</select>
								</div>
							</div>
							<div class="row-area row-area-holder">
								<div class="titleplan-box">
									<strong>Approximate # of Guests</strong>
									<span class="pricing">Pricing is based on a minimum of 100 guests</span>
								</div>
								<div class="box box-frame">
									<div class="row">
										<input class="text" type="text" value="<?php echo isset($_SESSION['welcome']['numOfGuests'])? $_SESSION['welcome']['numOfGuests']:'';?>" />
									</div>
								</div>
								<div class="box">
									<div class="row">
										<input class="text" type="text" value="200" />
									</div>
								</div>
							</div>
						</div><!-- /block-01 -->
						<h3>Catering</h3>
						<div class="row-frame">
							<div class="titleplan-box">
								<span><img src="/themes/bartik/images/icon-photo.png" alt="image" width="25" height="19" />Base Package</span>
							</div>
							<div class="box box-frame">
								<p>$xx.xx per person</p>
							</div>
							<div class="box">
								<p>$xx.xx per person</p>
							</div>
						</div>
						<div class="row-frame">
							<div class="titleplan-box">
								<span><img src="/themes/bartik/images/icon-photo.png" alt="image" width="25" height="19" />Upgrade</span>
							</div>
							<div class="box box-frame">
								<select class="sel">
									<option>$4.50 Selection</option>
									<option>$4.50 Selection</option>
									<option>$4.50 Selection</option>
									<option>$4.50 Selection</option>
								</select>
							</div>
							<div class="box">
								<select class="sel">
									<option>$5.50 Selection</option>
									<option>$5.50 Selection</option>
									<option>$5.50 Selection</option>
									<option>$5.50 Selection</option>
								</select>
							</div>
						</div>
						<div class="row-frame row-frame-holder">
							<div class="titleplan-box">
								<span><img src="/themes/bartik/images/icon-photo.png" alt="image" width="25" height="19" />Ethnic Cuisine</span>
							</div>
							<div class="box box-frame">
								<select class="sel">
									<option>No - $0.00</option>
									<option>Yes - $xx.xx</option>
								</select>
							</div>
							<div class="box">
								<select class="sel">
									<option>Yes - $xx.xx</option>
									<option>No - $0.00</option>
								</select>
							</div>
						</div>
						<h3>Beverage Service - 4hrs</h3>
						<div class="row-frame">
							<div class="titleplan-box">
								<span><img src="/themes/bartik/images/icon-photo.png" alt="image" width="25" height="19" />Open Bar</span>
							</div>
							<div class="box box-frame">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-03" id="lbl-05" checked="checked"/>
										<label for="lbl-05">Open Bar </label>
									</div>
								</div>
								<div class="box-area">
									<p>$xx.xx /pp</p>
								</div>
							</div>
							<div class="box">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-04" id="lbl-06"/>
										<label for="lbl-06">Open Bar </label>
									</div>
								</div>
								<div class="box-area">
									<p>$xx.xx /pp</p>
								</div>
							</div>
						</div>
						<div class="row-frame">
							<div class="titleplan-box">
								<span><img src="/themes/bartik/images/icon-photo.png" alt="image" width="25" height="19" />Beer, Wine, Soda</span>
							</div>
							<div class="box box-frame">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-03" id="lbl-07"/>
										<label for="lbl-07">Beer,Wine,Soda </label>
									</div>
								</div>
								<div class="box-area">
									<p>$xx.xx /pp</p>
								</div>
							</div>
							<div class="box">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-04" id="lbl-08" checked="checked"/>
										<label for="lbl-08">Beer,Wine,Soda </label>
									</div>
								</div>
								<div class="box-area">
									<p>$xx.xx /pp</p>
								</div>
							</div>
						</div>
						<div class="row-frame row-frame-holder">
							<div class="titleplan-box">
								<span><img src="/themes/bartik/images/icon-photo.png" alt="image" width="25" height="19" />Soda</span>
							</div>
							<div class="box box-frame">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-03" id="lbl-09"/>
										<label for="lbl-09">Soda </label>
									</div>
								</div>
								<div class="box-area">
									<p>$xx.xx /pp</p>
								</div>
							</div>
							<div class="box">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-04" id="lbl-10"/>
										<label for="lbl-10">Soda </label>
									</div>
								</div>
								<div class="box-area">
									<p>$xx.xx /pp</p>
								</div>
							</div>
						</div>
						<h3>Displays on Arrival</h3>
						<div class="row-frame row-frame-holder">
							<div class="titleplan-box">
								
                <span>
                 	<a href="<?php echo isset($_SESSION['display']['displayImg'])? $_SESSION['display']['displayImg'] : ''; ?>" rel="shadowbox" id="img_planner_disp1_popup">
                <img src="<?php echo  isset($_SESSION['display']['displayImg'])? $_SESSION['display']['displayImg'] : '';?>" alt="image" width="25" height="19" id="display_prop1_img" /> </a> Displays
                </span>
							</div>
							<div class="box box-frame">

            <?php
						  	foreach ($allDisplayRecord as $displayRow)
                { 
									$displayChecked = '';
								
									if (isset($_SESSION['display']['displayIds']))
									{
										foreach ($_SESSION['display']['displayIds'] as $disId)
										{
											if ($displayRow->id == $disId)
											{
												$displayChecked = 'checked="checked"';
												break;
											}
										}
									}
								
								?>
                  <div class="frame">
                    <div class="row row-check">
                      <input type="checkbox" class="display_Checkbox_Pro1" name="checkbox-01" id="disp_lbl-<?php echo $displayRow->id; ?>" <?php echo $displayChecked;?> onchange="changeDisplayPlannerImageProp1('<?php echo $displayRow->image; ?>',this.id)"/>
                      <label for="disp_lbl-<?php echo $displayRow->id; ?>"><?php echo $displayRow->displayName;?></label>
                    </div>
                  </div>
                  <input type="hidden" id="img_disp_lbl-<?php echo $displayRow->id;?>" value="<?php echo $displayRow->image;?>" />
                  <div class="box-area">
                    <p>$<?php echo $displayRow->price;?>/pp</p>
                  </div>
          <?php }
						?>	
							</div>
              
							<div class="box">
              
						 <?php
								foreach ($allDisplayRecord as $displayRow)
								{
						 ?>
								<div class="frame">
									<div class="row row-check">
										<input type="checkbox" name="checkbox-01" id="disp_lbl-prop2-<?php echo $displayRow->id; ?>" />
										<label for="disp_lbl-prop2-<?php echo $displayRow->id; ?>"><?php echo $displayRow->displayName;?></label>
									</div>
								</div>
								<div class="box-area">
									<p>$<?php echo $displayRow->price;?> /pp</p>
								</div>
            <?php } ?> 
								
							</div>
						</div>
						<h3>Hors D'oeuvres</h3>
						<div class="row-frame">
							<div class="titleplan-box">
								<span class="none">None</span>
							</div>
							<div class="box box-frame">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-05" id="lbl-17" checked="checked"/>
										<label for="lbl-17">None</label>
									</div>
								</div>
								<div class="box-area">
									<p>$0.00 /pp</p>
								</div>
							</div>
							<div class="box">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-06" id="lbl-18" />
										<label for="lbl-18">None</label>
									</div>
								</div>
								<div class="box-area">
									<p>$0.00 /pp</p>
								</div>
							</div>
						</div>
						<div class="row-frame">
							<div class="titleplan-box">
								<span><img src="/themes/bartik/images/icon-photo.png" alt="image" width="25" height="19" />Continental Butler Service</span>
							</div>
							<div class="box box-frame">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-05" id="lbl-19" />
										<label for="lbl-19">Continental</label>
									</div>
								</div>
								<div class="box-area">
									<p>$xx.xx /pp</p>
								</div>
							</div>
							<div class="box">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-06" id="lbl-20" checked="checked"/>
										<label for="lbl-20">Continental</label>
									</div>

								</div>
								<div class="box-area">
									<p>$xx.xx /pp</p>
								</div>
							</div>
						</div>
						<div class="row-frame row-frame-holder">
							<div class="titleplan-box">
								<span><img src="/themes/bartik/images/icon-photo.png" alt="image" width="25" height="19" />6 Hot</span>
							</div>
							<div class="box box-frame">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-05" id="lbl-21" />
										<label for="lbl-21">6 Hot</label>
									</div>
								</div>
								<div class="box-area">
									<p>$xx.xx /pp</p>
								</div>
							</div>
							<div class="box">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-06" id="lbl-22" />
										<label for="lbl-22">6 Hot</label>
									</div>
								</div>
								<div class="box-area">
									<p>$xx.xx /pp</p>
								</div>
							</div>
						</div>
						<div class="titleplan hallrent">
							<div class="titleplan-block">
								<h3>Hall Rental</h3>
							</div>
							<div class="titleplan-holder">
								<div class="titleplan-box">
									<strong>Included</strong>
								</div>
								<div class="titleplan-box">
									<strong>Included</strong>
								</div>
							</div>
						</div>
						<h3>Music</h3>
						<div class="row-frame">
							<div class="titleplan-box">
								<span class="none">Own</span>
							</div>
							<div class="box box-frame">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-07" id="lbl-23" checked="checked"/>
										<label for="lbl-23">Own</label>
									</div>
								</div>
								<div class="box-area">
									<p>$0.00 /pp</p>
								</div>
							</div>
							<div class="box">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-08" id="lbl-24" checked="checked"/>
										<label for="lbl-24">Own</label>
									</div>
								</div>
								<div class="box-area">
									<p>$0.00 /pp</p>
								</div>
							</div>
						</div>
						<div class="row-frame row-frame-holder">
							<div class="titleplan-box">
								<span><img src="/themes/bartik/images/icon-photo.png" alt="image" width="25" height="19" />4 Hr DJ</span>
							</div>
							<div class="box box-frame">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-07" id="lbl-25"/>
										<label for="lbl-25">4 Hr DJ</label>
									</div>
								</div>
								<div class="box-area">
									<p>xx.xx /pp</p>
								</div>
							</div>
							<div class="box">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-08" id="lbl-26" />
										<label for="lbl-26">4 Hr DJ</label>
									</div>
								</div>
								<div class="box-area">
									<p>xx.xx /pp</p>
								</div>
							</div>
						</div>
						<h3>Event Cake</h3>
						<div class="row-frame">
							<div class="titleplan-box">
								<span class="none">Own</span>
							</div>
							<div class="box box-frame">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-09" id="lbl-27" checked="checked"/>
										<label for="lbl-27">Own</label>
									</div>
								</div>
								<div class="box-area">
									<p>$0.00 /pp</p>
								</div>
							</div>
							<div class="box">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-10" id="lbl-28" />
										<label for="lbl-28">Own</label>
									</div>
								</div>
								<div class="box-area">
									<p>$0.00 /pp</p>
								</div>
							</div>
						</div>
						<div class="row-frame">
							<div class="titleplan-box">
								<span><img src="/themes/bartik/images/icon-photo.png" alt="image" width="25" height="19" />Continental Butler Service</span>
							</div>
							<div class="box box-frame">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-09" id="lbl-29" />
										<label for="lbl-29">Martin's</label>
									</div>
								</div>
								<div class="box-area">
									<p>$xx.xx /pp</p>
								</div>
							</div>
							<div class="box">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-10" id="lbl-30" />
										<label for="lbl-30">Martin's</label>
									</div>
								</div>
								<div class="box-area">
									<p>$xx.xx /pp</p>
								</div>
							</div>
						</div>
						<div class="row-frame row-frame-holder">
							<div class="titleplan-box">
								<span><img src="/themes/bartik/images/icon-photo.png" alt="image" width="25" height="19" />4 Hr DJ</span>
							</div>
							<div class="box box-frame">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-09" id="lbl-31" />
										<label for="lbl-31">Upgraded Available</label>
									</div>
								</div>
								<div class="box-area">
									<p>xx.xx /pp</p>
								</div>
							</div>
							<div class="box">
								<div class="frame">
									<div class="row">
										<input type="radio" name="radio-10" id="lbl-32" />
										<label for="lbl-32">Upgraded Available</label>
									</div>
								</div>
								<div class="box-area">
									<p>xx.xx /pp</p>
								</div>
							</div>
						</div>
						<h3 class="titleplan-image">
            	<img src="/themes/bartik/images/icon-photo.png" alt="image" width="25" height="19" />Options
            </h3>
						<div class="block-09">
							<div class="holder">
              <div class="box">
              	 <?php
								foreach ($allOptionRecord as $optionRow)
								{
									$optionChecked = '';
								
									if (isset($_SESSION['option']['itemsIds']))
									{
										foreach ($_SESSION['option']['itemsIds'] as $disId)
										{
											if ($optionRow->id == $disId)
											{
												$optionChecked = 'checked="checked"';
												break;
											}
										}
									}
						 ?>
								<div class="frame fl plan_opt">
									<div class="row row-check">
										<input type="checkbox" <?php echo $optionChecked; ?> name="checkbox-01" id="option_lbl-prop1-<?php echo $optionRow->id; ?>" />
										<label for="option_lbl-prop1-<?php echo $optionRow->id; ?>"><?php echo $optionRow->itemName;?></label>
									</div>
								</div>
								<div class="box-area fr poprice">
									<p>$<?php echo $optionRow->price;?> /pp</p>
								</div>
            <?php } ?> 
            </div>
            
            <div class="box">
              	 <?php
								foreach ($allOptionRecord as $optionRow)
								{
						 ?>
								<div class="frame fl plan_opt">
									<div class="row row-check">
										<input type="checkbox" name="checkbox-01" id="option_lbl-prop2-<?php echo $optionRow->id; ?>" />
										<label for="option_lbl-prop2-<?php echo $optionRow->id; ?>"><?php echo $optionRow->itemName;?></label>
									</div>
								</div>
								<div class="box-area fr poprice">
									<p>$<?php echo $optionRow->price;?> /pp</p>
								</div>
            <?php } ?> 
            </div>
								
						</div>
						</div><!-- /block-09 -->
						<div class="titleplan title-02">
							<div class="titleplan-block">
								<h3 class="titleplan-image b">
                                	<img src="/themes/bartik/images/icon-photo.png" alt="image" width="25" height="19" /> Discounts
                                </h3>
							</div>
							<div class="titleplan-holder">
								<div class="titleplan-box">
									<p>$xx.xx per person</p>
								</div>
								<div class="titleplan-box">
									<p>$xx.xx per person</p>
								</div>
							</div>
						</div>
						<div class="block-10">
							<div class="row-frame">
								<div class="titleplan-box">
									<strong class="b sc">Service Charge</strong>
								</div>
								<div class="box box-frame">
									<p>20%</p>
								</div>
								<div class="box">
									<p>20%</p>
								</div>
							</div>
						</div>
						<div class="block-frame"></div>
						<div class="block-11">
							<div class="row-frame">
								<div class="titleplan-box">
									<strong>Per Person Total</strong>
								</div>
								<div class="box box-frame">
									<p style="font-weight:bold;">$xx.xx per person +</p>
									<span>Maryland sales tax</span>
								</div>
								<div class="box">
									<p style="font-weight:bold;">$xx.xx per person +</p>
									<span>Maryland sales tax</span>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
			</div><!-- /infoplan-content -->
			<div class="infoplan-bottom">
				<div class="submit-form">
					<form action="#">
						<fieldset>
							<input class="submit ie-fix" type="submit" value="Start Over" />
						</fieldset>
					</form>
				</div>
				<div class="btn-box">
					<a href="#" class="print ie-fix"><span>print</span>Print</a>
					<a href="#" class="email ie-fix"><span>email</span>Email</a>
				</div>
			</div>
		</div><!-- /infoplan -->
	</div><!-- /main-holder -->
  
</div><!-- /main -->

 <?php

$outputMartinCal = ob_get_contents();
ob_end_clean();

return $outputMartinCal;
