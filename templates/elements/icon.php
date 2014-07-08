<div class="blog-post-type">
<?php if (get_post_type() == 'podcast') { ?>
	<i class="icon-sound"> </i>
<?php } else { ?>
	<?php $format = get_post_format();
	switch ($format) { 
		case "video": ?>
			<i class="icon-video"> </i>
		<?php case "audio": ?>
			<i class="icon-sound"> </i>
		<?php case "quote": ?>
			<i class="fa fa-quote-left"> </i>
		<?php case "link": ?>
			<i class="icon-clip"> </i>
		<?php case "gallery": ?>
			<i class="icon-photo"> </i>
		<?php default: ?>
		<i class="icon-ink-pen-streamline"> </i>
		<?php } ?>
<?php } ?>
</div>