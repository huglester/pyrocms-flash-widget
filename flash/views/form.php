<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<ul>
	
		<?php if(empty ($swfs)): ?>
		
				<li class="odd buttons buttons-small">
						<a href="admin/files" class="button edit">No SWF files available. Upload here.</a>
				</li>
		
		<?php else: ?>

				<li class="even"
						<label for="swf_file">Select SWF File</label>
						<?php echo form_dropdown('swf_file', $swfs, $options['swf_file']); ?>		
				</li>
				<li class="odd">
						<label for="width">Width</label>
						<?php echo form_input('width', $options['width']); ?>
				</li>
				<li class="even">
						<label for="height">Height</label>
						<?php echo form_input('height', $options['height']); ?>
				</li>	
		
		<?php endif; ?>

</ul>