<?php $this->layout('layout', ['title' => 'Micromonio - Home']) ?>

<?php $this->start('main_content') ?>
<main>
		<div id='bg'>
			<div class='inside'>
				<h1>MICROMONIO</h1>
				<h2>Store all your games in a simple click</h2>
				<a href="#">Start</a>
			</div>
		</div>
		<div class="middleBox">
			<?php foreach ($gameInfos as $currentRow) : ?>
			<div class="card">
				<img src="<?= $currentRow["vid_image"] ?>" alt="">
				<div class="txtCard">
					<a class="title"><?= $currentRow["vid_name"] ?></a>
					<a class="console">Console</a>
				</div>
			</div>
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
<footer>

	<h1>Copyright &copy; Mickael Fernandes &amp; Johnny Lima 2017</h1>
</footer>

<?php $this->stop('main_content') ?>
