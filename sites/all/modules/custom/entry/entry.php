<?php 
function getEntries()
{
	return db_query('select * from entries where status = 1 order by orderno');
}
ob_start();
session_start();
drupal_add_js(drupal_get_path('module','entry').'/js/entry.js');
?>
  
<div class="container">
	<form method="post" action="entry/recordadd" id="entryForm">
  <div class="k-top">
  <div class="info fl">
      <p>Our dinner service includes dinner with a wide selection of entrees! Base packages also include a choice of an appetizer, a vegetable / starch, and coffee and tea beverage service!</p>
      <p>Would you believe our Sit Down, Buffet, and Cocktail parties are all the same price?!</p>
    </div><!--info-->
    
    <div class="pageiconimg fr">
    	<img src="<?php echo drupal_get_path('module','event')?>/images/leftimg.png" />
    </div><!--pageiconimg-->
  </div><!-- /end -->
  
  
  <div class="k-lr">
		<section>
			<ul class="k-tabs">
				<li><a href="#k-entrees" class="activetab" id="type_0">Entrees</a></li>
				<li><a href="#k-appetizers" id="type_1">Appetizers</a></li>
				<li><a href="#k-vegetables" id="type_2">Vegetables</a></li>
				<li><a href="#k-beverage" id="type_3">Beverage</a></li>
			</ul>
      <div class="form k-tab-form fl" id="all-images">
        <div class="k-tab-content" id="k-entrees">
         
          <?php $result = getEntries(); 
 						$i = 0;
						$imgPath = '';  
						$entryName = '';
						$entryDesc = '';    
						$entreeId = ''; 
						$type = '';
            foreach ($result as $record) 
            {
							if ($record->type == 0)
              {
									if (isset($_SESSION['entry']['entreeId']))
									{
										if ($record->id == $_SESSION['entry']['entreeId'])
										{
											$addClass = 'class="activeimg"';
											$imgPath = $record->image;
											$entryName = $record->entriesName;
											$entryDesc = $record->description;  
											$entreeId = $record->id;
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
											$entryName = $record->entriesName;
											$entryDesc = $record->description;  
											$entreeId = $record->id; 
										}
										else
										{
											$addClass = '';		
										}
									}
									$i++;	
								
								?>
								<figure>
									<img src='<?php echo $record->image; ?>' width='164' height='109' alt='Placeholder Image' <?php echo $addClass; ?>  id="<?php echo $record->id; ?>"  name="<?php echo $record->entriesName; ?>"/> 
									<figcaption id="figcaption_<?php echo $record->id; ?>"> <?php echo addslashes($record->entriesName); ?></figcaption>
									<input type="hidden" id="entrydesc_<?php echo $record->id; ?>" value="<?php echo addslashes($record->description); ?>"/>
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
								if (isset($_SESSION['entry']['entreeId']))
								{
										if ($record->id == $_SESSION['entry']['entreeId'])
										{
											$addClass = 'class="activeimg"';
											$imgPath = $record->image;
											$entryName = $record->entriesName;
											$entryDesc = $record->description;  
											$entreeId = $record->id;
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
										$entryName = $record->entriesName;
										$entryDesc = $record->description;  
										$entreeId = $record->id; 
									}
									else
									{
										$addClass = '';		
									}
								}
									$i++;	
								
                ?>
                <figure>
                 	<img src='<?php echo $record->image; ?>' width='164' height='109' alt='Placeholder Image'  <?php echo $addClass; ?>  id="<?php echo $record->id; ?>"  name="<?php echo $record->entriesName; ?>" />
                  <figcaption id="figcaption_<?php echo $record->id; ?>"> <?php echo $record->entriesName; ?></figcaption>
                  <input type="hidden" id="entrydesc_<?php echo $record->id; ?>" value="<?php echo addslashes($record->description); ?>" />
                </figure>
                <?php
              }
            } ?>
          
        </div><!-- /end -->
        <div class="k-tab-content" id="k-vegetables">
        
          <?php $result = getEntries(); 
            foreach ($result as $record) 
            {
              if ($record->type == 2)
              {
								if (isset($_SESSION['entry']['entreeId']))
								{
										if ($record->id == $_SESSION['entry']['entreeId'])
										{
											$addClass = 'class="activeimg"';
											$imgPath = $record->image;
											$entryName = $record->entriesName;
											$entryDesc = $record->description;  
											$entreeId = $record->id;
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
										$entryName = $record->entriesName;
										$entryDesc = $record->description;  
										$entreeId = $record->id; 
									}
									else
									{
										$addClass = '';		
									}
								}
								$i++;	
								
                ?>
                <figure>
                  <img src='<?php echo $record->image; ?>' width='164' height='109' alt='Placeholder Image'  <?php echo $addClass; ?>  id="<?php echo $record->id; ?>"  name="<?php echo $record->entriesName; ?>" />
                  <figcaption id="figcaption_<?php echo $record->id; ?>"> <?php echo $record->entriesName; ?></figcaption>
                  <input type="hidden" id="entrydesc_<?php echo $record->id; ?>" value="<?php echo addslashes($record->description); ?>" />
                </figure>
                <?php
              }
            } ?>
        </div><!-- /end -->
        <div class="k-tab-content" id="k-beverage">
        
          <?php $result = getEntries(); 
            foreach ($result as $record) 
            {
              if ($record->type == 3)
              {
								if (isset($_SESSION['entry']['entreeId']))
								{
										if ($record->id == $_SESSION['entry']['entreeId'])
										{
											$addClass = 'class="activeimg"';
											$imgPath = $record->image;
											$entryName = $record->entriesName;
											$entryDesc = $record->description;  
											$entreeId = $record->id;
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
										$entryName = $record->entriesName;
										$entryDesc = $record->description;  
										$entreeId = $record->id; 
									}
									else
									{
										$addClass = '';		
									}
								}
								$i++;	
								
                ?>
                <figure>
                  <img src='<?php echo $record->image; ?>' width='164' height='109' alt='Placeholder Image'  <?php echo $addClass; ?>  id="<?php echo $record->id; ?>"  name="<?php echo $record->entriesName; ?>" />
                  <figcaption id="figcaption_<?php echo $record->id; ?>"> <?php echo $record->entriesName; ?></figcaption>
                  <input type="hidden" id="entrydesc_<?php echo $record->id; ?>" value="<?php echo addslashes($record->description); ?>" />
                </figure>
                <?php
              }
            } ?>
        </div><!-- /end -->
        <p class="k-formsep allentrysp">
          All entrees are the same price!
        </p>
        <p class="k-form-left">
          <a href="common_page" class="red startover">Start Over</a>
        </p>
        <p class="k-form-right">
          <a href="location_view" class="pp">Previous</a> 
          <a href="javascript:void(0)" class="pn" onclick="submitEntrees()">Next</a>
        </p>
        <div class="clearfix"></div><!-- /end -->
      </div><!-- /end -->
    
    	<div class="sidebar fr">
      	<a href="<?php echo $imgPath; ?>" rel="shadowbox" id="img_entry_popup">
      		<img class="mainimg" src="<?php echo $imgPath; ?>" id="entry_img"/>
        </a>
        
        <div class="sidetxt"> 
        	<!--<h2 id="entry_name"><?php //echo $entryName; ?></h2>-->
          <p id="entry_desc"><?php echo $entryDesc; ?></p>
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
	</div>
  <?php 
		if ($type != '')
		{
			?>
       <script> //chageTabs('<?php //echo $type; ?>'); </script>
      <?php
		}
	?>
 
  <input type="hidden" value="<?php echo $entreeId;?>" id="entree_id" name="entreeId"/>
  </form>
</div><!-- /end -->

 <?php

$outputEntree = ob_get_contents();
ob_end_clean();

return $outputEntree;