<h1> hi </h1>

<ul>
<?php foreach ($poll as $polls) { ?>
	<li><?php echo $this->tag->linkTo(array('poll/show', $polls->question)); ?></li>
<?php } ?>
</ul>