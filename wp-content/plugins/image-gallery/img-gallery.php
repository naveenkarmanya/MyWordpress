<?php
/*
Author: JB Braendel
Plugin Name: Image Gallery
Plugin URI: http://www.polarisplace.com
Description: An image gallery which transitions between each image using a fade effect, where each image has the option to link to a URL
Version: 0.8
Author URI: http://www.polarisplace.com/
*/


class IMG_Gallery extends WP_Widget {
	
	/*
	
	NOTES:
		
	
	
	
	WIDGET SETTINGS:
		* Image Set (array of rel/abs-link images, with their associated link)
		* Width/Height
	
	*/
	
	
	
	//
	//
	// DEFAULT VALUES
	private $def_image    = array('image' => '',
								  'link'  => '');
	private $def_width    = 400;
	private $def_height   = 350;
	private $def_fadeIn   = 1000;
	private $def_fadeOut  = 1200;
	private $def_fadeWait = 4000;
	
	
	private $def_hPadding = -10;
	private $def_vPadding = 10;
	private $def_vspace   = 4;
	private $def_title    = '';   // RENAME THIS for the title/text above the image gallery
	
	
	
	
	
	// Setup the widget itself, and the control options
	function IMG_Gallery() {
		
		$widget_options = array('classname'    =>  'Image Gallery',
								'description'  =>  __('Simple Image Gallery with transitional effects'));
							
		$control_options = array('height'      => 300,
								 'width'       => 250);
							
		$this->WP_Widget( 'IMG_Gallery', __('Image Gallery'), $widget_options, $control_options );
	}
	
	
	// Display an INSTANCE of this widget
	function widget($args, $instance) {

		
		
		
		// Generate HTML
		extract($args, EXTR_SKIP);
		
		
		
		// In case of MULTIPLE instances of this widget, define which one this belongs to
		$nInstance = $this->get_field_id('instance');
		$nInstance = str_replace('-', '_', $nInstance);
		
		
		// Image Gallery info
		$nImages  = $instance['numFields']; 
		$imageSet = array();
		for($i=0; $i<$nImages; $i++)
			array_push($imageSet, array('image'=>$instance['fieldImage'.$i],
										'link'=>$instance['fieldLink'.$i]));
		$header   = $instance['header'];
		$footer   = $instance['footer'];
		$width    = $instance['width'];
		$height   = $instance['height'];
		$fadeIn   = $instance['fadeIn'];
		$fadeOut  = $instance['fadeOut'];
		$fadeWait = $instance['fadeWait'];
		?>
        
        
        
        
        <!-- IMAGE GALLERY HERE -->
        <div id="<?php echo $this->get_field_id('IMG_Gal'); ?>" style="width:<?php echo $width+(2*$this->def_hPadding); ?>px; height:<?php echo $height+(2*$this->def_vPadding); ?>px;">
        	<table height="<?php echo $height+(2*$this->def_vPadding); ?>px" width="<?php echo $width+(2*$this->def_hPadding); ?>px" style="border:0 none; background: none transparent;">
            <tr><td height="<?php echo $this->def_vPadding; ?>" width="<?php echo $width+(2*$this->def_hPadding); ?>px" style="border:none; background: none transparent;">
        	<?php echo $header; ?>
            </td></tr><tr><td height="<?php echo $height+5; ?>px" style="border:none; background: none transparent;">
            
        	<div>
            	<a id="<?php echo $this->get_field_id('IMG_Gal_ahref'); ?>" href="">
                	<img id="<?php echo $this->get_field_id('IMG_Gal_pic'); ?>" onerror="this.style.display='none'" />
                </a>
            </div>
            
            </td></tr><tr><td height="<?php echo $this->def_vPadding; ?>" style="border:none; background: none transparent;">
            <?php echo $footer ?>
            </td></tr>
            </table>
        </div>
        
        
		
		<!-- FADEout/FADEin Transition Effect HERE -->
        <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script> -->
        <script type="text/javascript">

		if(typeof jQuery === "undefined") {
    			document.write("<scr" + "ipt src='https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js'></scr" + "ipt>");
  		}
	</script>
        <script type="text/javascript">

		
			var <?php echo $nInstance; ?>_fadeIn    = <?php echo $fadeIn; ?>;
			var <?php echo $nInstance; ?>_fadeOut   = <?php echo $fadeOut; ?>;
			var <?php echo $nInstance; ?>_fadeWait  = <?php echo $fadeWait; ?>;
		
			var <?php echo $nInstance; ?>_numPics = <?php echo $nImages; ?>;
			var <?php echo $nInstance; ?>_curPic  = 0;
			var <?php echo $nInstance; ?>_pics = new Array();
			var <?php echo $nInstance; ?>_pics_collection = new Array();
			var <?php echo $nInstance; ?>_pics_lastdisplayed = -1;
			
			<?php
			
				$i=0;
				foreach ($imageSet as $image) {
					echo $nInstance.'_pics.i'.$i.'=new Array();
					';
					echo $nInstance.'_pics.i'.$i.'.image="'.$image['image'].'";
					';
					echo $nInstance.'_pics.i'.$i.'.link="'.$image['link'].'";
					';
					
					echo $nInstance.'_pics_collection.push('.$i.');
					';
					$i++;
				}
			?>
			

			
			// Pick a random image from the picture collection, then remove it from the collection (if the collection is empty, simply reset it while removing the last displayed image)
			function <?php echo $nInstance; ?>_rndPic() {
			
				// RESET the collection before continuing (do NOT include the last displayed image)
				if (!<?php echo $nInstance; ?>_pics_collection.length || <?php echo $nInstance; ?>_pics_collection.length==0)
				{
					<?php echo $nInstance; ?>_pics_collection = new Array();
					for(var i = 0; i < <?php echo $nInstance; ?>_numPics; i++) {
						if (i==<?php echo $nInstance; ?>_pics_lastdisplayed)
							continue;
						<?php echo $nInstance; ?>_pics_collection.push(i);
					}

				}

				
				// Pick a random element from the collection
				var iRND = Math.floor(Math.random()*(<?php echo $nInstance; ?>_pics_collection.length));
				iRND = <?php echo $nInstance; ?>_pics_collection[iRND];
				<?php echo $nInstance; ?>_pics_lastdisplayed = iRND;


				// Remove the number from the collection
				var _arrayTmp = new Array();
				for(var i = 0; i < <?php echo $nInstance; ?>_pics_collection.length; i++) {
					if (<?php echo $nInstance; ?>_pics_collection[i]==iRND)
						continue;
					_arrayTmp.push(<?php echo $nInstance; ?>_pics_collection[i]);
				}
				<?php echo $nInstance; ?>_pics_collection=_arrayTmp;				

				return iRND;
			}
		
		
			// Load up the picture
			function <?php echo $nInstance; ?>_loadPic(nPic) {
				
				if (nPic<0 || nPic>=<?php echo $nInstance; ?>_numPics)
					return false;
				
				var img = <?php echo $nInstance; ?>_pics['i'+nPic]['image'];
				var lnk = <?php echo $nInstance; ?>_pics['i'+nPic]['link'];
				
				jQuery('#<?php echo $this->get_field_id('IMG_Gal_ahref'); ?>').attr('href', lnk);
				
				var imgTag = jQuery('#<?php echo $this->get_field_id('IMG_Gal_pic'); ?>');
				imgTag.attr('src', img);
				imgTag.css('max-width', <?php echo $width; ?>);
				imgTag.css('max-height', <?php echo $height; ?>);
				imgTag.attr('vspace', <?php echo $this->def_vspace; ?>);
				
			}
			
			
			
			// Fadeout/Fadein the picture
			function <?php echo $nInstance; ?>_fadePic() {
				
				var imgTag = jQuery('#<?php echo $this->get_field_id('IMG_Gal_pic'); ?>');
				imgTag.fadeOut(<?php echo $nInstance; ?>_fadeOut, function() {
					
					/*<?php echo $nInstance; ?>_curPic++;
					if (<?php echo $nInstance; ?>_curPic>=<?php echo $nInstance; ?>_numPics)
						<?php echo $nInstance; ?>_curPic=0;*/

					<?php echo $nInstance; ?>_loadPic(<?php echo $nInstance; ?>_rndPic());
					
					// Wait until the new image has loaded
					imgTag.ready(function() {
						imgTag.fadeIn(<?php echo $nInstance; ?>_fadeIn, function() {
							
							setTimeout(function() {
								<?php echo $nInstance; ?>_fadePic(); }, <?php echo $nInstance; ?>_fadeWait);
						});
					});
				});
			}
			
			
			
			
			// Initialize the image-gallery
			if (<?php echo $nInstance; ?>_numPics>1)
			{
				setTimeout(function(){ <?php echo $nInstance; ?>_fadePic(); }, 1);
			}
			else if (<?php echo $nInstance; ?>_numPics==1)
			{
				<?php echo $nInstance; ?>_loadPic(0);
			}

		
		</script>
		



		<?php
	}
	
	
	// Display the FORM for this widget (admin/backend)
	function form($instance) {
		
		
		
		// In case of MULTIPLE instances of this widget, define which one this belongs to
		$nInstance = $this->get_field_id('instance');
		$nInstance = str_replace('-', '_', $nInstance);
		
		
		// User interface for configuring widget
		$nImages  = $instance['numFields']; 
		$imageSet = array();
		for($i=0; $i<$nImages; $i++)
			array_push($imageSet, array('image'=>$instance['fieldImage'.$i],
										'link'=>$instance['fieldLink'.$i]));
		$header   = $instance['header'];
		$footer   = $instance['footer'];
		$width    = $instance['width'];
		$height   = $instance['height'];
		$fadeIn   = $instance['fadeIn'];
		$fadeOut  = $instance['fadeOut'];
		$fadeWait = $instance['fadeWait'];
		
		
		
		// Sanitize the configurations
		if (!$imageSet or !is_array($imageSet) or empty($imageSet))
		{
			$instance['images'] = array($this->def_image);
			$imageSet = $instance['images'];
		}
		if (is_nan($nImages) or $nImages <= 0)
		{
			$instance['numFields'] = count($imageSet);
			$nImages = $instance['numFields'];	
		}
        if (is_nan($width) or $width <= 0)
        {
			$instance['width'] = $this->def_width;
			$width = $instance['width'];
        }
		if (is_nan($height) or $height <= 0)
        {
			$instance['height'] = $this->def_height;
			$height = $instance['height'];
        }
		if (is_nan($fadeIn) or $fadeIn <= 0)
        {
			$instance['fadeIn'] = $this->def_fadeIn;
			$fadeIn = $instance['fadeIn'];
        }
		if (is_nan($fadeOut) or $fadeOut <= 0)
        {
			$instance['fadeOut'] = $this->def_fadeOut;
			$fadeOut = $instance['fadeOut'];
        }
		if (is_nan($fadeWait) or $fadeWait <= 0)
        {
			$instance['fadeWait'] = $this->def_fadeWait;
			$fadeWait = $instance['fadeWait'];
        }
        ?>	
        
        
        
        
        
        
        <!-- FORM/CONFIGURATIONS -->
        <!--<form action="" name="">-->
        
        
        	<!-- Total number of Fields -->
        	<input type="hidden" id="<?php echo $this->get_field_id('numFields'); ?>" name="<?php echo $this->get_field_name('numFields'); ?>" value="<?php echo $nImages; ?>"  />
            
            
            
            <!-- Header/Footer settings -->
            <table>
            <th colspan="2">Header/Footer</th>
            <tr><td>
            Header:<br/>
            <!--<input type="text" id="<?php echo $this->get_field_id('header'); ?>" name="<?php echo $this->get_field_name('header'); ?>" value="<?php echo $header; ?>" />-->
            <textarea rows="2" cols="25" id="<?php echo $this->get_field_id('header'); ?>" name="<?php echo $this->get_field_name('header'); ?>"><?php echo $header; ?></textarea><br/>
            </td></tr><tr><td>
            Footer:<br/>
            <!--<input type="text" id="<?php echo $this->get_field_id('footer'); ?>" name="<?php echo $this->get_field_name('footer'); ?>" value="<?php echo $footer; ?>" />-->
            <textarea rows="2" cols="25" id="<?php echo $this->get_field_id('footer'); ?>" name="<?php echo $this->get_field_name('footer'); ?>"><?php echo $footer; ?></textarea><br/>
            </td></tr>
            </table>
            
            
            
            <br/><br/>
            
            
            <!-- Image-Gallery settings -->
            <table>
            <th colspan="2">General Settings</th>
            <tr><td>
            Max-Width: 
            </td><td>
            <input type="text" id="<?php echo $this->get_field_id('width'); ?>" name="<?php echo $this->get_field_name('width'); ?>" value="<?php echo $width; ?>" /><br/>
            </td></tr>
            <tr><td>
            Max-Height: 
            </td><td>
            <input type="text" id="<?php echo $this->get_field_id('height'); ?>" name="<?php echo $this->get_field_name('height'); ?>" value="<?php echo $height; ?>" /><br/>
            </td></tr>
            <tr><td>
            fadeIn: 
            </td><td>
            <input type="text" id="<?php echo $this->get_field_id('fadeIn'); ?>" name="<?php echo $this->get_field_name('fadeIn'); ?>" value="<?php echo $fadeIn; ?>" /><br/>
            </td></tr>
            <tr><td>
            fadeOut: 
            </td><td>
            <input type="text" id="<?php echo $this->get_field_id('fadeOut'); ?>" name="<?php echo $this->get_field_name('fadeOut'); ?>" value="<?php echo $fadeOut; ?>" /><br/>
            </td></tr>
            <tr><td>
            fadeWait: 
            </td><td>
            <input type="text" id="<?php echo $this->get_field_id('fadeWait'); ?>" name="<?php echo $this->get_field_name('fadeWait'); ?>" value="<?php echo $fadeWait; ?>" /><br/>
            </td></tr>
            </table>
            
            
            <br/><br/>
            
            
            <!-- Images Field -->
            <div id="<?php echo $this->get_field_id('images'); ?>">
            <table width="100%">
            <col width="95%" />
            <col width="5%" />
            <th>Images/Links</th>
            </table>
			<?php
				$i=0;
				foreach($imageSet as $image)
				{
					?>
					<input type="text" id="<?php echo $this->get_field_id('fieldImage'.$i); ?>" name="<?php echo $this->get_field_name('fieldImage'.$i); ?>" value="<?php echo $image['image']; ?> style="width:100%" placeholder="Image Link"  />
					<input type="text" id="<?php echo $this->get_field_id('fieldLink'.$i); ?>" name="<?php echo $this->get_field_name('fieldLink'.$i); ?>" value="<?php echo $image['link']; ?> style="width:100%" placeholder="URL Link"  />
					 <a class="ntdelbutton" id="<?php echo $this->get_field_id('X'.$i); ?>" value="<?php echo $i; ?>" style="float:right;">X</a>
                     <br id="<?php echo $this->get_field_id('BR'.$i); ?>"/>
					 <?php	
					 $i++;
				}
			?>
            </div>
            
            <br/>
            <input type="button" id="<?php echo $this->get_field_id('addField'); ?>" name="addfield" class="button-primary" value="Add Field" />
        <!--</form>-->
        
        
        
        
        
        
        
        <!-- FORM/CONFIG JAVASCRIPT -->
        <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script> -->
	<script type="text/javascript">

		if(typeof jQuery === "undefined") {
    			document.write("<scr" + "ipt src='https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js'></scr" + "ipt>");
  		}
		jQuery.noConflict();
	</script>
        <script type="text/javascript">

			
			var <?php echo $nInstance; ?>_numFields = <?php echo $nImages; ?>;
			
			// Set the generic field id's / name's ;  This will make it easier for adding/removing/renaming fields
			var <?php echo $nInstance; ?>_fieldImage_id   = "<?php echo $this->get_field_id('fieldImage'); ?>";
			var <?php echo $nInstance; ?>_fieldImage_name = "<?php echo substr($this->get_field_name('fieldImage'), 0, strlen($this->get_field_name('fieldImage'))-1); ?>";
			var <?php echo $nInstance; ?>_fieldLink_id    = "<?php echo $this->get_field_id('fieldLink'); ?>";
			var <?php echo $nInstance; ?>_fieldLink_name  = "<?php echo substr($this->get_field_name('fieldLink'), 0, strlen($this->get_field_name('fieldLink'))-1); ?>";
			var <?php echo $nInstance; ?>_fieldRemove_id = "<?php echo $this->get_field_id('X'); ?>";
			var <?php echo $nInstance; ?>_fieldBr_id     = "<?php echo $this->get_field_id('BR'); ?>";
			
			
			
			
			
			
			// Add Field (image/link) onclick
			jQuery('#<?php echo $this->get_field_id('addField'); ?>').click(function(){
				var divField  = jQuery('#<?php echo $this->get_field_id('images'); ?>');
				var append    = '<input type="text" id="'+<?php echo $nInstance; ?>_fieldImage_id+''+<?php echo $nInstance; ?>_numFields+'" name="'+<?php echo $nInstance; ?>_fieldImage_name+''+<?php echo $nInstance; ?>_numFields+']" value="" style="width:100%" placeholder="Image Link" /> <input type="text" id="'+<?php echo $nInstance; ?>_fieldLink_id+''+<?php echo $nInstance; ?>_numFields+'" name="'+<?php echo $nInstance; ?>_fieldLink_name+''+<?php echo $nInstance; ?>_numFields+']" value="" style="width:100%;" placeholder="URL Link" /><a class="ntdelbutton" id="'+<?php echo $nInstance; ?>_fieldRemove_id+''+<?php echo $nInstance; ?>_numFields+'" value="'+<?php echo $nInstance; ?>_numFields+'" style="float:right;">X</a><br id="'+<?php echo $nInstance; ?>_fieldBr_id+''+<?php echo $nInstance; ?>_numFields+'" />';
				
				divField.append(append);
				<?php echo $nInstance; ?>_numFields++;
				jQuery('#<?php echo $this->get_field_id('numFields'); ?>').val(<?php echo $nInstance; ?>_numFields);
				
				
				// Setup the remove's
				<?php echo $nInstance; ?>_setRemove_click();
			});
			
			
			
			// Setup the Remove button for every field
			function <?php echo $nInstance; ?>_setRemove_click() {
				
				for (var i=0; i<<?php echo $nInstance; ?>_numFields; i++) {
					jQuery('#'+<?php echo $nInstance; ?>_fieldRemove_id+''+i).unbind('click');
					jQuery('#'+<?php echo $nInstance; ?>_fieldRemove_id+''+i).click(function() {
						<?php echo $nInstance; ?>_removeField(jQuery(this).attr('value'));
					});
				}
			}
			
			
			// Remove a single field
			function <?php echo $nInstance; ?>_removeField(fieldNum) {
				
				if (fieldNum<0 || fieldNum>=<?php echo $nInstance; ?>_numFields || <?php echo $nInstance; ?>_numFields<=1)
					return false;
				
				
				// Remove the Field itself
				jQuery('#'+<?php echo $nInstance; ?>_fieldImage_id+''+fieldNum).remove();
				jQuery('#'+<?php echo $nInstance; ?>_fieldLink_id+''+fieldNum).remove();
				jQuery('#'+<?php echo $nInstance; ?>_fieldRemove_id+''+fieldNum).remove();
				jQuery('#'+<?php echo $nInstance; ?>_fieldBr_id+''+fieldNum).remove();
				
				
				// Rename all the post-fields:  (n-1)
				for (var i=fieldNum; i<<?php echo $nInstance; ?>_numFields; i++) {
					jQuery('#'+<?php echo $nInstance; ?>_fieldImage_id+''+i).attr('name', <?php echo $nInstance; ?>_fieldImage_name+''+(i-1)+']');
					jQuery('#'+<?php echo $nInstance; ?>_fieldImage_id+''+i).attr('id', <?php echo $nInstance; ?>_fieldImage_id+''+(i-1));
					
					jQuery('#'+<?php echo $nInstance; ?>_fieldLink_id+''+i).attr('name', <?php echo $nInstance; ?>_fieldLink_name+''+(i-1)+']');
					jQuery('#'+<?php echo $nInstance; ?>_fieldLink_id+''+i).attr('id', <?php echo $nInstance; ?>_fieldLink_id+''+(i-1));
					
					
					jQuery('#'+<?php echo $nInstance; ?>_fieldRemove_id+''+i).attr('value', i-1);
					jQuery('#'+<?php echo $nInstance; ?>_fieldRemove_id+''+i).attr('id', <?php echo $nInstance; ?>_fieldRemove_id+''+(i-1));
					jQuery('#'+<?php echo $nInstance; ?>_fieldBr_id+''+i).attr('id', <?php echo $nInstance; ?>_fieldBr_id+''+(i-1));
				}
				
				
				<?php echo $nInstance; ?>_numFields--;
				jQuery('#<?php echo $this->get_field_id('numFields'); ?>').val(<?php echo $nInstance; ?>_numFields);
				
				
				<?php echo $nInstance; ?>_setRemove_click();
			}
			
			
			
			// Initialize the Form
			<?php echo $nInstance; ?>_setRemove_click(); // Setup the remove buttons
		
		</script>
        
        
        
        
        <?php
	}
	
	
	
	
	// Save/Update Configurations
	function update($new_instance, $old_instance) {
		
	
		// Save configuration data
		$numFields = $new_instance['numFields'];
		
		
		// Trim each field's image/link val
		for ($i = 0; $i < $numFields; $i++)
		{
			$new_instance['fieldImage'.$i] = trim($new_instance['fieldImage'.$i]);
			$new_instance['fieldImage'.$i] = str_replace(array('"', "'"), '', $new_instance['fieldImage'.$i]);
			$new_instance['fieldLink'.$i] = trim($new_instance['fieldLink'.$i]);
			$new_instance['fieldLink'.$i] = str_replace(array('"', "'"), '', $new_instance['fieldLink'.$i]);
		}
		
		
		
		// Sanitize the number-variables
		if (is_nan($new_instance['width']) or $new_instance['width'] <= 0)
			$new_instance['width']=$this->def_width;	
		if (is_nan($new_instance['height']) or $new_instance['height'] <= 0)
			$new_instance['height']=$this->def_height;	
		if (is_nan($new_instance['fadeIn']) or $new_instance['fadeIn'] <= 0)
			$new_instance['fadeIn']=$this->def_fadeIn;	
		if (is_nan($new_instance['fadeOut']) or $new_instance['fadeOut'] <= 0)
			$new_instance['fadeOut']=$this->def_fadeOut;	
		if (is_nan($new_instance['fadeWait']) or $new_instance['fadeWait'] <= 0)
			$new_instance['fadeWait']=$this->def_fadeWait;	
		
		
		return $new_instance;
	}
	
	
	

}


// Initialize the Gallery
function img_gallery_widget_init() {
	register_widget('IMG_Gallery');
}





add_action('widgets_init', 'img_gallery_widget_init');

?>