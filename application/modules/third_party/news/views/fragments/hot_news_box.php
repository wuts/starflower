<h4><?php echo lang('news_hot_news_label');?></h4>
<div class="spacer-left-dbl">	
	<?php if(isset($hot_news)): ?>
	   <?php echo anchor('news/'.$category->slug,$hot_news); ?>
	<?php endif;?>
</div>
