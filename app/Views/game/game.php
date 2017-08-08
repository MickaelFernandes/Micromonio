<?php $this->layout('layout', ['title' => 'GAME']) ?>

<?php $this->start('main_content') ?>
	<h2>Details of :  <strong><?php echo $currentRow["vid_name"] ?></strong> ! </h2>

	<container id="containerGames">
        <div class="displayGames">
            <img src="<?= $currentRow["vid_image"] ?>">
			<p>ID       : <?= $currentRow["vid_id"] ?></p>
			<p>NAME     : <?= $currentRow["vid_name"] ?></p>
			<p>YEAR     : <?= $currentRow["vid_year"] ?></p>
			<p>EDITOR   : <?= $currentRow["vid_editor"] ?></p>
            <p>IMAGE    : <?= $currentRow["vid_image"] ?></p>
            <p>INSERTED : <?= $currentRow["vid_inserted"] ?></p>
    	</div>
	</container>


<?php $this->stop('main_content') ?>
