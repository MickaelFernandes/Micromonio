<?php $this->layout('layout', ['title' => 'Consoles']) ?>

<?php $this->start('main_content') ?>
	<h2>La CONSOLE <strong><?php echo $consolesInfos["con_name"] ?></strong> a les jeux suivant ! :</h2>

	<container id="containerGames">
	    <?php foreach ($gameInfos as $currentRow) : ?>
			<a href="
				<?= $this->url(
					'game_get_game',
					[
						'id' => $currentRow['vid_id'] ,
					]
				)?>
			">
		        <div class="displayGames">
		            <img src="<?= $currentRow["vid_image"] ?>">
					<p>NAME   : <?= $currentRow["vid_name"] ?></p>
					<p>YEAR   : <?= $currentRow["vid_year"] ?></p>
					<p>EDITOR : <?= $currentRow["vid_editor"] ?></p>
		    	</div>
			</a>
	    <?php endforeach; ?>
	</container>


<?php $this->stop('main_content') ?>
