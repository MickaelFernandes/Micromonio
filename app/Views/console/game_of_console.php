<?php $this->layout('layout', ['title' => 'Consoles']) ?>

<?php $this->start('main_content') ?>

<div id="bggg">
	<div class="inside3">
		<h2><strong><?php echo $consolesInfos["con_name"] ?></strong> GAMES AVAILABLE</h2>
		<div class="consoleBoxInfo">
	    <?php foreach ($gameInfos as $currentRow) : ?>
				
		        <a href="
						<?= $this->url(
							'game_get_game',
							[
								'id' => $currentRow['vid_id'] ,
							]
						)?>
						" class="displayGames">
		            <img src="<?= $currentRow["vid_image"] ?>">
					<p>NAME   : <?= $currentRow["vid_name"] ?></p>
					<p>YEAR   : <?= $currentRow["vid_year"] ?></p>
					<p>EDITOR : <?= $currentRow["vid_editor"] ?></p>
				</a>
	    <?php endforeach; ?>

</div>
</div>
</div>


<?php $this->stop('main_content') ?>
