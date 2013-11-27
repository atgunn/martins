<?php 
function getEvents()
{
	return db_query('select * from event_type where status = 1 order by orderno');
}
ob_start();
session_start();
?>

<div class="container">
	<div class="k-top">
  	<div class="info fl">
			<p>We don't just host an event. We host YOUR event! Look at some of the types of events we can ost. If your type is not listed, call us to help you design your special event!</p>
    </div><!--info-->
    
    <div class="pageiconimg fr">
    	<img src="<?php echo drupal_get_path('module','event')?>/images/leftimg.png" />
    </div><!--pageiconimg-->
  </div><!-- k-top end -->

	<div class="k-lr">
		<section>
			<form method="post" action="event/viewadd" id="eventForm" class="fl">
      	<div class="topcontent w100 pb20 fl eventcont">
        	<div class="pParty fl" style="width:45%;">
            <label class="lblname w100">Private Party</label>
            <div class="list fl w100">
            	<ul>
              <?php $result = getEvents(); 
										$i = 0;
										$checked = '';
										$imgPath = '';
										$eventDesc = '';
										$eventTitle = '';

										foreach ($result as $record) 
										{ 
											if ($record->type == 0)
											{
												if (isset($_SESSION['event']['eventId']))
												{
													if ($_SESSION['event']['eventId'] == $record->id)
													{
														$checked = 'checked="checked"';
														$imgPath = $record->image;
														$eventDesc = $record->description;
														$eventTitle = $record->title;
													}
												}
												else
												{
													if ($i == 0)
													{
														$checked = 'checked="checked"';
														$imgPath = $record->image;
														$eventDesc = $record->description;
														$eventTitle = $record->title;
													}
												}
												$i++;
											?>
                       <li>                        
                        <div class="box box-frame fl">
                          <div class="row row-radio pt10 pb10">
                            <input type="radio" id="event_<?php echo $record->id; ?>" name="eventId" <?php echo  $checked; ?> value="<?php echo $record->id; ?>" onchange= "changeEventImage('<?php echo $record->image;?>','<?php echo addslashes($record->description);?>','<?php echo addslashes($record->title);?>')" > 
                            <label class="rdnew" for="event_<?php echo $record->id; ?>">
                              <?php echo $record->title; ?>
                            </label>
                          </div><br />
                        </div><!--box-->
                       </li>
                         
											<?php
												 $checked = '';
											}
										}
									?> 	
             	
              </ul>
              
            </div><!--list-->
          </div>
        	
          <div class="commercial fr" style="width:45%;">
            <label class="lblname">Commercial Meeting</label>
            
            <div class="list fl w100">
            	<ul>
              	<?php $result = getEvents(); 
										
										foreach ($result as $record) 
										{ 
											if ($record->type == 1)
											{
												if (isset($_SESSION['event']['eventId']))
												{
													if ($_SESSION['event']['eventId'] == $record->id)
													{
														$checked = 'checked="checked"';
														$imgPath = $record->image;
														$eventDesc = $record->description;
														$eventTitle = $record->title;
													}
												}
												else
												{
													if ($i == 0)
													{
														$checked = 'checked="checked"';
														$imgPath = $record->image;
														$eventDesc = $record->description;
														$eventTitle = $record->title;
													}
												}
												$i++;
											?>
                      <li>
                        
                        <div class="box box-frame fl">
                          <div class="row row-radio pt10 pb10">
                            <input type="radio" id="event_<?php echo $record->id; ?>" name="eventId" <?php echo  $checked; ?> value="<?php echo $record->id; ?>" onchange= "changeEventImage('<?php echo $record->image;?>','<?php echo $record->description;?>','<?php echo $record->title;?>')"> 
                            <label class="rdnew" for="event_<?php echo $record->id; ?>">
                              <?php echo $record->title; ?>
                            </label>
                          </div><br />
                        </div><!--box-->
                       </li>
                         
											<?php
												 $checked = '';
											}
										}
									?> 	
              </ul>
              
            </div><!--list-->
           
          </div>
          
        
        </div><!--topcontent-->     
        
        <div class="bottombtn">
          <p class="k-formsep subavailable">
            Tradeshows require Consultation with an Event Planner.
          </p>
          <p class="k-form-left">
           <a href="common_page" class="red startover">Start Over</a>
          </p>
          <p class="k-form-right">
            <a href="javascript:void(0)" class="pn2 pn" onclick="submitEvent()">Next</a>
          </p>
        </div><!--bottombtn-->
      </form>
      
      <div class="sidebar fr">
      	<a href="<?php echo $record->image; ?>" rel="shadowbox" id="img_event_popup">
      		<img  class="mainimg" src="<?php echo $imgPath; ?>" style="width:97%;" id="event_img"/>
        </a>
        
        <div class="sidetxt">
        	<!--<h2 id="event_title"><?php //echo $eventTitle; ?></h2>-->
          <p id="event_desc"> <?php echo $eventDesc; ?> </p>
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
  </div><!-- k-lr -->
  
</div><!--container-->

 <?php

$outputEvent = ob_get_contents();
ob_end_clean();

return $outputEvent;