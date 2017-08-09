<?php $this->layout('layout', ['title' => 'GAME']) ?>

<?php $this->start('main_content') ?>

<div class="gameDisplay">
	<div class="imageGame">
		<img src="<?= $currentRow["vid_image"] ?>">
	</div>
	<div class="contentGame">
		<h1><?php echo $currentRow["vid_name"] ?></h1>
		<p>ID       : <?= $currentRow["vid_id"] ?></p>
		<p>YEAR     : <?= $currentRow["vid_year"] ?></p>
		<p>EDITOR   : <?= $currentRow["vid_editor"] ?></p>
		<p>INSERTED : <?= $currentRow["vid_inserted"] ?></p>
	</div>
</div>

<?php $this->stop('main_content') ?>
