<?php $this->layout('layout', ['title' => 'Consoles']) ?>

<?php $this->start('main_content') ?>
	<h2>Consoles :</h2>

	<p> Ici la list de tous les consoles : </p>

	<ul>
		<?php foreach ($consolesInfos as $currentRow) : ?>
			<li>
				<a href=
					"
						<?= $this->url(
							'console_get_the_console',
							[
								'id' => $currentRow['con_id'] ,
								'consolessss' => $currentRow['con_name'] ,
							]
						)?>
					">
					<?php echo $currentRow["con_name"] ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>

<?php $this->stop('main_content') ?>
