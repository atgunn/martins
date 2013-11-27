<?php 
function getMusics()
{
	return db_query('select * from music where status = 1 order by orderno');
}

ob_start();
session_start();
?>

<div class="container">
	<div class="k-top">
  	<div class="info fl">
			<p>We have relationships with professional DJs who can provide you with the right music mix for your event, at right price.</p>
    </div><!--info-->
    
    <div class="pageiconimg fr">
    	<img src="<?php echo drupal_get_path('module','event')?>/images/leftimg.png" />
    </div><!--pageiconimg-->
  </div><!-- k-top end -->

	<div class="k-lr">
		<section>
			<form method="post" action="music/recordadd" id="musicForm" class="fl">
      	<div class="topcontent w100 music">
        	<div class="mscdivcont fl">
            <label class="lblname w100 fl msclbl">Musics</label>
            <div class="list fl w100">
            	<ul>
              	 <?php $result = getMusics(); 
						$i = 0;
						$checked = '';
						$imgPath = '';
						$musicDesc = '';
						$musicName = '';

						foreach ($result as $record) 
						{ 
							
							if (isset($_SESSION['music']['musicId']))
							{
								if ($_SESSION['music']['musicId'] == $record->id)
								{
									$checked = 'checked="checked"';
									$imgPath = $record->image;
									$musicDesc = $record->description;
									$musicName = $record->musicName;
								}
							}
							else
							{
								if ($i == 0)
								{
									$checked = 'checked="checked"';
									$imgPath = $record->image;
									$musicDesc = $record->description;
									$musicName = $record->musicName;
								}
							}
							$i++;
							?>
                      <li>
											 <?php /*?><span class="radio" >
													<input type="radio" id="music_<?php echo $record->id; ?>" name="musicId" <?php echo  $checked; ?> value="<?php echo $record->id; ?>" onchange= "changeMusicImage('<?php echo $record->image;?>','<?php echo addslashes($record->description);?>','<?php echo addslashes($record->musicName);?>')" > 
													<label class="radiocss" for="music_<?php echo $record->id; ?>"> <?php echo $record->musicName; ?>  
													</label> 	
												</span><?php */?> 
                        
                        <div class="box box-frame pt10">
                          <div class="row row-radio">
                            <input type="radio" id="music_<?php echo $record->id; ?>" name="musicId" <?php echo  $checked; ?> value="<?php echo $record->id; ?>" onchange= "changeMusicImage('<?php echo $record->image;?>','<?php echo addslashes($record->description);?>','<?php echo addslashes($record->musicName);?>')" >
                            <label class="rdnew" for="music_<?php echo $record->id; ?>">
                              <?php echo $record->musicName; ?>
                            </label>
                          </div><br />
                        </div><!--box-->
                      </li>
                         
						<?php
                             $checked = '';
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
            <a href="cake_view" class="pp">Previous</a>
            <a href="javascript:void(0)" class="pn" onclick="submitMusic()">Next</a>
          </p>
        </div><!--bottombtn-->
      </form>
      
      <div class="sidebar fr">
      	<a href="<?php echo $imgPath; ?>" rel="shadowbox" id="img_music_popup">
      		<img class="mainimg" src="<?php echo $imgPath; ?>" style="width:97%;" id="music_img"/>
        </a>
        
        <div class="sidetxt">
        	<?php /*?><h2 id="music_name"> <?php echo $musicName; ?> </h2><?php */?>
          <p id="music_desc"> <?php echo $musicDesc; ?> </p>
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

$outputMusic = ob_get_contents();
ob_end_clean();

return $outputMusic;