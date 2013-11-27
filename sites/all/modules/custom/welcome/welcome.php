<?php 
ob_start();
session_start(); 
?>
<link href="/themes/bartik/css/colorbox.css" rel="stylesheet" type="text/css" />
<script src="/themes/bartik/js/jquery.colorbox.js"></script>

<div class="container" id="">

  <div class="k-top">
  	<div class="info fl">
      <p>So you want to hold an event at Martin's? Before using our planner, take a look at what makes up a Martin's Event. We have a range of services and locations to fit your budget.</p>
      <ul>
        <li>Each of our events are very personal to us</li>
        <li>Your information is confidential and will <u>NEVER</u> be shared</li>
        <li>We will only contact you if you ask us</li>
      </ul>
    </div><!--info-->
    
    <div class="pageiconimg fr">
    	<img src="<?php echo drupal_get_path('module','event')?>/images/leftimg.png" />
    </div><!--pageiconimg-->
  </div><!-- /end -->
  <div class="k-lr">
		<section>
		<form method="post" action="welcome/bookadd" id="welcomeForm" class="fl">
    	<div class="topcontent">
        <p class="pcont">
          <label class="lblname">Name:</label>
          <input type="text" name="welcomeName" class="name" id="welcomeNameId" value="<?php echo isset($_SESSION['welcome']['welcomeName'])? $_SESSION['welcome']['welcomeName']:'';?>">
        </p>
        <p class="pcont">
          <label class="lblname">Phone Number:</label>
          <input type="text" name="phoneNumber" class="name"  id="phoneNumber" value="<?php echo isset($_SESSION['welcome']['phoneNumber'])? $_SESSION['welcome']['phoneNumber']:'';?>">
        </p>
        <p class="pcont">
          <label class="lblname">Email:</label>
          <input type="text" name="email" class="name" id="email" value="<?php echo isset($_SESSION['welcome']['email'])? $_SESSION['welcome']['email']:'';?>">
        </p>
        <p class="pcont">
          <label class="lblname">Re-enter Email:</label>
          <input type="text" name="" class="name" id="reemail" value="<?php echo isset($_SESSION['welcome']['email'])? $_SESSION['welcome']['email']:'';?>">
        </p>
        <p class="">
          <label>Number of Guests:</label>
          <input type="text" class="short s2" name="numOfGuests" id="numOfGuests" value="<?php echo isset($_SESSION['welcome']['numOfGuests'])? $_SESSION['welcome']['numOfGuests']:'';?>"> 
          <div class="box box-frame wcsoave">
            <select class="sel">
              <option value="0" <?php echo isset($_SESSION['welcome']['guestAverage']) && $_SESSION['welcome']['guestAverage'] == 0 ? 'selected="selected"':'';?>>Average</option>   
                <option value="1" <?php echo isset($_SESSION['welcome']['guestAverage']) && $_SESSION['welcome']['guestAverage'] == 1 ? 'selected="selected"':'';?>>100+</option>
                <option value="2" <?php echo isset($_SESSION['welcome']['guestAverage']) && $_SESSION['welcome']['guestAverage'] == 2 ? 'selected="selected"':'';?>>200+</option>
            </select>
          </div>
        </p>
        <p class="k-note pricing fl">Pricing is based on a minimum of 100 guests</p>
        <p class="">
          <label class="lblname">Event Date:</label>
          <span id="datepicker"></span>
        </p>
        
        <p class="w100">
          <label class="lblname">Time of Event:</label>   
        	<div class="box box-frame wlckbox">
            <div class="row row-radio pb5">
              <input type="radio" id="time-afternoon" name="eventTime" value="0" <?php echo isset($_SESSION['welcome']['eventTime']) && $_SESSION['welcome']['eventTime'] == 0 ? 'checked="checked"':'';?>>
              <label for="lbl-01" class="rdnew">Afternoon (1pm-5pm)</label>
            </div><br />
            <div class="row">
              <input type="radio" id="time-evening" name="eventTime" value="1"  <?php echo isset($_SESSION['welcome']['eventTime']) && $_SESSION['welcome']['eventTime'] == 0 ? '':'checked="checked"';?>>
              <label for="lbl-02" class="rdnew">Evening (7:30pm-11:30pm or later)</label>
            </div>
          </div><!--box-->
        </p>
        
        <p class="w100">
          <label class="lblname">Flexible Dates:</label>
          <div class="box box-frame wlckbox">
            <div class="row row-radio fl pr10">
              <input type="radio" id="time-flex-yes" name="flexibleDateStatus" value="1" <?php echo isset($_SESSION['welcome']['flexibleDateStatus']) && $_SESSION['welcome']['flexibleDateStatus'] == 1 ? 'checked="checked"':'';?>>
              <label for="lbl-01" class="rdnew">Yes</label>
            </div>
            <div class="row">
              <input type="radio" name="flexibleDateStatus" id="time-flex-no" value="0" <?php echo isset($_SESSION['welcome']['flexibleDateStatus']) && $_SESSION['welcome']['flexibleDateStatus'] == 1 ? '':'checked="checked"';?>>
              <label for="lbl-02" class="rdnew">No</label>
            </div>
          </div><!--box-->
        </p>
        <p class="w100">
          <label class="lblname">Please Contact:</label>
					<div class="box box-frame wlckbox">
            <div class="row row-radio fl pr10">
              <input type="radio" name="contactStatus"  id="contact-yes" value="1"  <?php echo isset($_SESSION['welcome']['contactStatus']) && $_SESSION['welcome']['contactStatus'] == 0 ? '' : 'checked="checked"';?>>
              <label for="lbl-01" class="rdnew">Yes</label>
            </div>
            <div class="row">
              <input name="contactStatus" type="radio" id="contact-no" value="0" <?php echo isset($_SESSION['welcome']['contactStatus']) && $_SESSION['welcome']['contactStatus'] == 0 ? 'checked="checked"':'';?>>
              <label for="lbl-02" class="rdnew">No</label>
            </div>
          </div><!--box-->
        </p>
      </div><!--topcontent-->  
      
      <div class="bottombtn">
        <p class="k-formsep subavailable">
          Dates and times are subject to availability
        </p>
        <p class="k-form-left">
         <a href="common_page" class="red startover">Start Over</a>
        </p>
        <p class="k-form-right">
          <a href="event_view" class="pp">Previous</a>
          <a href="javascript:void(0)" class="pn" onclick="submitWelcome()">Next</a>
        </p>
      </div><!--bottombtn-->
		</form>
  
  	<div class="sidebar fr">
      <a href="<?php echo drupal_get_path('module','welcome')?>/images/Welcome_v2.png" class="" rel="shadowbox">
      	<img class="mainimg gallery" src="<?php echo drupal_get_path('module','welcome')?>/images/Welcome_v2.png" />
      </a>
      
      <div class="sidetxt">
         <p>Duis varius est eu velit varius vitae egestas metus dictum. Vestibulum et laoreet dui. Proinnec dolor mauris, ut rthoncus orci.</p>
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
		
  </div><!-- /end -->
</div><!-- /end -->
<script>
	$( document ).ready(function() {
		jQuery('a.gallery').colorbox();
	});
</script>

<?php

$outputWelcome = ob_get_contents();
ob_end_clean();

return $outputWelcome;