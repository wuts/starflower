<h2><?php echo lang('newsletters.list_title');?></h2>

<?php foreach($newsletters as $newsletter): ?>
<div class="articleHolder">
	<strong><?php echo  anchor('newsletters/archive/' . $newsletter->id, $newsletter->title); ?></strong>
	<em><?php echo date('d M y', $newsletter->created_on); ?></em>
	<div class="clear-both"></div>
</div>
<?php endforeach; ?>