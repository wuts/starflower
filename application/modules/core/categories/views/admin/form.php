<div class="box">

	<?php if($method == 'create'): ?>
		<h3><?php echo lang('cat_create_title');?></h3>
		
	<?php else: ?>
		<h3><?php echo sprintf(lang('cat_edit_title'), $category->title);?></h3>
		
	<?php endif; ?>
	
	<div class="box-container">

	
	<?php echo form_open($this->uri->uri_string(), 'class="crud"'); ?>
	
		<fieldset>
			<ol>
				<li class="even">
				<label for="title"><?php echo lang('cat_title_label');?></label>
				<?php echo  form_input('title', $category->title); ?>
				<span class="required-icon tooltip"><?php echo lang('required_label');?></span>
				</li>
			</ol>
			<ol>
				<li class="even">
				<label for="slug"><?php echo lang('cat_slug_label');?></label>
				<?php echo  form_input('slug', $category->slug); ?>
				<span class="required-icon tooltip"><?php echo lang('required_label');?></span>
				</li>
			</ol>
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') )); ?>
		</fieldset>
		
	<?php echo form_close(); ?>
	
	</div>
</div>