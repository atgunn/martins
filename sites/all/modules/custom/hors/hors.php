<?php 
function getHors()
{
	return db_query('select * from hors where status = 1 order by orderno');
}

ob_start();
session_start();
?>

<div class="container">

	<form method="post" action="hors/bookadd" id="horsForm" class="fl">
  <div class="k-top">
   	<div class="info fl">
			<p>We offer 2 hors d'ouevres selections.</p>
      <label>6 Hot - </label>
      <ul class="hors_ul">
        <li>1 hour food service</li>
        <li>Choose 6 hot hors d'oeuvres from a large selection</li>
        <li>Bautifully decorated buffet displays (hand passed is potional)</li>
      </ul>
      <label>Continental Butler Service (CBS) - </label>
      <ul class="hors_ul">
        <li>30 minutes food service</li>
        <li>Choose 3 hors d'oeuvres hand passed by our professional white gloved serving staff</li>
        <br />
      </ul>
    </div>
    
    <div class="pageiconimg fr">
    	<img src="<?php echo drupal_get_path('module','event')?>/images/leftimg.png" />
    </div>
  </div><!-- k-top end -->
  
  <div class="k-lr">
		<section>
    	<ul class="k-tabs">
				<li style="width:250px"><a href="#k-entrees" class="activetab">6 Hot</a></li>
				<li style="width:250px"><a href="#k-appetizers">Continental Butler Service</a></li>
			</ul>
      <div class="form k-tab-form fl" id="all-images-hors">
        <div class="k-tab-content" id="k-entrees">
        
         
              <?php $result = getHors(); 
 						$i = 0;
						$imgPath = '';  
						$horsName = '';
						$horsDesc = '';    
						$horsId = ''; 
						$type = '';
            foreach ($result as $record) 
            {
							if ($record->type == 0)
              {
									if (isset($_SESSION['hors']['horsId']))
									{
										if ($record->id == $_SESSION['hors']['horsId'])
										{
											$addClass = 'class="activeimg"';
											$imgPath = $record->image;
											$horsName = $record->horsName;
											$horsDesc = $record->description;  
											$horsId = $record->id;
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
											$horsName = $record->horsName;
											$horsDesc = $record->description;  
											$horsId = $record->id; 
										}
										else
										{
											$addClass = '';		
										}
									}
									$i++;	
								
								?>
								<figure>
									<img src='<?php echo $record->image; ?>' width='164' height='109' alt='Placeholder Image' <?php echo $addClass; ?>  id="<?php echo $record->id; ?>"  name="<?php echo $record->horsName; ?>"/> 
									<figcaption id="figcaption_<?php echo $record->id; ?>"> <?php echo addslashes($record->horsName); ?></figcaption>
									<input type="hidden" id="horsdesc_<?php echo $record->id; ?>" value="<?php echo addslashes($record->description); ?>"/>
								</figure>
              <?php
							}
            }
          ?>
          
        </div><!-- /end -->
        <div class="k-tab-content" id="k-appetizers">
       <?php $result = getHors(); 
            foreach ($result as $record) 
            {
              if ($record->type == 1)
              {
					if (isset($_SESSION['hors']['horsId']))
					{
							if ($record->id == $_SESSION['hors']['horsId'])
							{
								$addClass = 'class="activeimg"';
								$imgPath = $record->image;
								$horsName = $record->horsName;
								$horsDesc = $record->description;  
								$horsId = $record->id;
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
							$horsName = $record->horsName;
							$horsDesc = $record->description;  
							$horsId = $record->id; 
						}
						else
						{
							$addClass = '';		
						}
					}
						$i++;	
					
                ?>
                <figure>
                  <img src='<?php echo $record->image; ?>' width='164' height='109' alt='Placeholder Image'  <?php echo $addClass; ?>  id="<?php echo $record->id; ?>"  name="<?php echo $record->horsName; ?>" />
                  <figcaption id="figcaption_<?php echo $record->id; ?>"> <?php echo $record->horsName; ?></figcaption>
                  <input type="hidden" id="horsdesc_<?php echo $record->id; ?>" value="<?php echo addslashes($record->description); ?>" />
                </figure>
                <?php
              }
            } ?>
          
              
          
        </div><!-- /end -->
        
        <div class="bottombtn">
          <p> 
            <div class="box box-frame horssohp">
              <select class="sel">
                <option value="0">Selct an Hors D'Oeuvres package...</option>   
                <option value="1">6 Hot</option>
                <option value="2">Continental</option>
              </select>
            </div>
          </p>
          <p class="k-form-left">
            <a href="common_page" class="red startover">Start Over</a>
          </p>
          <p class="k-form-right">
          	<a href="beverage_nextview" class="pp">Previous</a>
            <a href="javascript:void(0)" class="pn" onclick="submitHors()">Next</a>
          </p>
        </div>
      </div><!-- /end -->  
        
      <div class="sidebar fr">
      	<a href="<?php echo $imgPath; ?>" rel="shadowbox" id="img_hors_popup">
		      <img class="mainimg" src="<?php echo $imgPath; ?>" style="width:97%;" id="hors_img"/>
       	</a>
        
        <div class="sidetxt">
         <?php /*?> <h2 id="hors_name"><?php echo $horsName; ?></h2><?php */?>
          <p id="hors_desc"><?php echo $horsDesc; ?></p>
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
   <input type="hidden" value="<?php echo $horsId;?>" id="hors_id" name="horsId"/>
  </form>
</div><!-- container /end -->

 <?php

$outputHors = ob_get_contents();
ob_end_clean();

return $outputHors;