<div class="blog-post-type">
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
	<i class="icon-pen"> </i>
	<?php } ?>
</div>