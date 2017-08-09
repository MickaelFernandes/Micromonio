<?php $this->layout('layout', ['title' => 'Micromonio - Home']) ?>

<?php $this->start('main_content') ?>
<main>
		<div id='bg'>
			<div class='inside'>
				<h1>MICROMONIO</h1>
				<h2>Store all your games in a simple click</h2>
				<a href="<?= $this->url('user_signin') ?>">Start</a>
			</div>
		</div>
		<div class="middleBox">
			<?php foreach ($gameInfos as $currentRow) : ?>
			<a href="
				<?= $this->url(
						'game_get_game',
						[
							'id' => $currentRow['vid_id'] ,
						]
					)?>
					" class="card">
				<img src="<?= $currentRow["vid_image"] ?>">
				<div class="txtCard">
					<p> <?= $currentRow["vid_name"] ?></p>
					<p><?= $currentRow["console_con_id"] ?></p>
				</div>
			</a>
	<?php endforeach; ?>
		</div>
		<div class="titleEndBox">
			<h1>TEAM MICROMONIO</h1>
		</div>
		<div class="endBox">
			<div class="leftEndBox">
				<img src="../public/assets/images/mickael.png" alt="" class="imageEnd">
				<h2>MICKAEL FERNANDES</h2>
				<h3>FRONT DEVELOPER</h3>
			</div>
			<div class="rightEndBox">
				<img src="../public/assets/images/johnny.png" alt="" class="imageEnd">
				<h2>JOHNNY LIMA</h2>
				<h3>BACK DEVELOPER</h3>
			</div>
		</div>
</main>


<?php $this->stop('main_content') ?>
