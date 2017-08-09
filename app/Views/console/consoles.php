<?php $this->layout('layout', ['title' => 'Consoles']) ?>

<?php $this->start('main_content') ?>

<div id="bgg">
	<div class="inside2">
		<div class="consolesBox">
			
			<ul>
				<?php foreach ($consolesInfos as $currentRow) : ?>
					<li class="listeConsoles">
						<a class="listeConsolesLink" href=
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
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
