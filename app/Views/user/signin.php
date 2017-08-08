<?php
$this->layout('layout', array('title' => 'Sign in'));
?>

<?php
//début du bloc main_content
$this->start('main_content');
?>

<form method="post" action="">
    <input type="text"  name="emailToto" placeholder="Username or Email address" /><br />
    <input type="password"  name="passwordToto1" placeholder="Your password" /><br />
    <button type="submit">Submit</button>
</form>

<?php
//fin du bloc
$this->stop('main_content');
?>
