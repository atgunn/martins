<?php 
ob_start();
session_start();
drupal_add_js(drupal_get_path('module','beverage').'/js/beverage.js'); 
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
			<form method="post" action="beverage/prerecordadd" id="beverageNextForm" class="fl">
      	<div class="topcontent fl">
        	<div class="fl">
            <!--<label class="lblname">Private Party</label>-->
            <div class="list fl w100">
            	<ul class="nbevul fl">
              	<li class="bev">
                	<label class="fl bevlbl">1st Hour</label>
                  <div class="box box-frame nbevso">
                    <select class="sel">
                      <option value="0">Opean Bar</option>   
                      <option value="1">Beer/Wine/Soda</option>
                      <option value="2">Soda Bar</option>
                    </select>
                  </div>
                </li>
                <li class="bev">
                	<label class="fl bevlbl">2nd Hour</label>
                  <div class="box box-frame nbevso">
                    <select class="sel">
                      <option value="0">Opean Bar</option>   
                      <option value="1">Beer/Wine/Soda</option>
                      <option value="2">Soda Bar</option>
                    </select>
                  </div>
                </li>
                <li class="bev">
                	<label class="fl bevlbl">3rd Hour</label>
                  <div class="box box-frame nbevso">
                    <select class="sel">
                      <option value="0">Beer/Wine/Soda</option>   
                      <option value="1">Soda Bar</option>
                      <option value="2">Opean Bar</option> 
                    </select>
                  </div>
                </li>
                <li class="bev bevlilast">
                	<label class="fl bevlbl">4th Hour</label>
                  <div class="box box-frame nbevso">
                    <select class="sel">
                      <option value="0">Beer/Wine/Soda</option>   
                      <option value="1">Soda Bar</option>
                      <option value="2">Opean Bar</option> 
                    </select>
                  </div>
                </li>
              </ul>
              
            </div><!--list-->
          </div>
        	
        </div><!--topcontent-->     
        
        <div class="bottombtn">
          <p class="k-formsep subavailable">
            Additional hours are available.
          </p>
          <p class="k-form-left">
            <a href="#" class="red startover">Start Over</a>
          </p>
          <p class="k-form-right">
            <a href="beverage_view" class="pp">Previous</a>
            <a href="javascript:void(0)" class="pn" onclick="submitNextBeverage()">Next</a>
          </p>
        </div><!--bottombtn-->
      </form>
      
      <div class="sidebar fr">
      	<a href="<?php echo drupal_get_path('module','beverage')?>/images/bevreges.png" rel="shadowbox">
	      	<img class="mainimg" src="<?php echo drupal_get_path('module','beverage')?>/images/bevreges.png" />
        </a>
        
        <div class="sidetxt">
        	<!--<h2>Wedding Receptions</h2>-->
          <p>We don't just ost an event. We host YOUR event! Look at some of the types of events we can ost. If your type is not listed, call us to help you design your special event!</p>
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