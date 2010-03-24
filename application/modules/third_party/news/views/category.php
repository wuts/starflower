<h2>"<?php echo $category->title; ?>"<?php echo lang('news_articles_of_category_suffix');?></h2>
<div class="float-left width-two-thirds">
	<?php if (!empty($news)): ?>	
		<?php foreach ($news as $article): ?>
			<h3><?php echo anchor('news/'.date('Y/m', $article->created_on).'/'.$article->slug,$article->title);?></h3>			<p><em><?php echo lang('news_posted_label');?>: <?php echo date('M d, Y', $article->created_on);?></em>&nbsp;</p>			
			<p><?php echo nl2br($article->intro);?> <?php echo anchor('news/'.date('Y/m',$article->created_on).'/'.$article->slug,lang('news_read_more_label'))?></p>
		
			
		<?php endforeach; ?>		
		<p><?php echo $pagination['links'];?></p>		
	<?php else: ?>
		<p><?php echo lang('news_currently_no_articles');?></p>
	<?php endif; ?>
</div>

<div class="float-right width-quater">
        <?php $this->load->view('fragments/hot_news_box');?>
	<?php $this->load->view('fragments/archive_box');?>
       	
</div>
