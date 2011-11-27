<style type="text/css">
		.flash-options .message{color:#FF6400 !important; font-weight: bold;}
</style>
<fieldset id="filters" class="flash-options">
		<label for="swf_file">Select SWF File</label>
		<ul>
				<li class="even">
								
				<?php
						if(empty ($swfs)) {
								echo '<p class="message">No SWF files available. <a href="admin/files" class="message">Upload Here</a></p>';
						}		
						else {
								echo form_dropdown('swf_file', $swfs, $options['swf_file']);
						}

				?>
				
				</li>
				<li class="odd">
				<label for="width">Width</label>
				
				<?php echo form_input('width', $options['width']); ?>
				
				</li>
				<li class="even">
						<label for="height">Height</label>
						
						<?php echo form_input('height', $options['height']); ?>
				
				</li>
		</ul>
</fieldset>