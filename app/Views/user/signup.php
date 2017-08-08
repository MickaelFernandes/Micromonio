<?php
$this->layout('layout', array('title' => 'Sign up'));
?>

<?php
//début du bloc main_content
$this->start('main_content');
?>

<form method="post" action="">
    <input type="text" name="usernameToto" placeholder="Username" /><br />
    <input type="email" name="emailToto" placeholder="Email address" /><br />
    <input type="password" name="passwordToto1" value="" placeholder="Your password" /><br />
    <input type="password" name="passwordToto2" value="" placeholder="Confirm your password" /><br />
    <button type="submit">Submit</button>
</form>

<?php
//fin du bloc
$this->stop('main_content');
?>
