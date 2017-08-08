<?php
$this->layout('layout', array('title' => 'Sign up'));
?>

<?php
//début du bloc main_content
$this->start('main_content');
?>

<form method="POST" action="">
    <input type="text" name="signup_username" placeholder="Username" /><br />
    <input type="email" name="signup_email" placeholder="Email address" /><br />
    <input type="password" name="signup_pw1" value="" placeholder="Your password" /><br />
    <input type="password" name="signup_pw2" value="" placeholder="Confirm your password" /><br />
    <button type="submit">Submit</button>
</form>

<?php
//fin du bloc
$this->stop('main_content');
?>
