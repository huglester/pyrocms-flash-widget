<fieldset id="filters" class="flash-options">
		<label for="swf_file">Select SWF File</label>
		<ul>
				<li class="even">
								
				<?php
						if(empty ($swfs)) {
								echo '<a href="admin/files" class="btn red">No SWF files available. Upload here.</a>.';
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