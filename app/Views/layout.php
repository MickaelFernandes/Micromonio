<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1>Project M :: <?= $this->e($title) ?></h1>
			<nav>
				<ul>
					<li><a href="<?= $this->url('default_home') ?>">HOME</a></li>
					<li><a href="<?= $this->url('console_consoles') ?>">Consoles</a></li>
					<li><a href="<?= $this->url('add_add_game') ?>">Add a Videogame</a></li>
				</ul>
			</nav>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>
