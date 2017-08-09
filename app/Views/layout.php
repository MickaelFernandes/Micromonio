<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<header>
		<nav class="navbar">
			<div class="containerNav">
				<a href="<?= $this->url('default_home') ?>" class="LOGO">Micromonio</a>
				<ul id="menu">
					<a class="linkMenu" href="<?= $this->url('default_home') ?>"><li>Home</li></a>
					<a class="linkMenu" href="<?= $this->url('console_consoles') ?>"><li>Consoles</li></a>
					<a class="linkMenu" href="<?= $this->url('user_signin') ?>"><li>Sign In</li></a>
					<a class="linkMenu" href="<?= $this->url('user_signup') ?>"><li>Sign Up</li></a>
				</ul>
			</div>
		</nav>
	</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
			<h1>Copyright &copy; Mickael Fernandes &amp; Johnny Lima 2017</h1>
		</footer>

</body>
</html>
