<?php
$this->layout('layout', array('title' => 'Sign up'));
?>

<?php
//début du bloc main_content
$this->start('main_content');
?>
<div class="formSignUp">
<div class="formBox">
    <div class="headFormBox">
        <h1>JOIN THE COMMUNITY <p>MICROMONIO</p></h1>

    </div>
    <form method="POST" action="">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" id="username" name="signup_username" required="required"/>
            </div>
            <div class="form-group">
              <label for="username">E-mail</label>
              <input type="email" id="username" name="signup_email" required="required"/>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="signup_pw1" required="required"/>
            </div>
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" id="password" name="signup_pw2" required="required"/>
            </div>
            <div class="form-group">
              <button type="submit" id="buttonSignUp">MICROMONIO UP!</button>
            </div>
          </form>
</div>
</div>

<?php
//fin du bloc
$this->stop('main_content');
?>









      <div class="form-group">
          <label class="form-remember">
              <input type="checkbox"/>Remember Me
          </label><a class="form-recovery" href="#">Forgot Password?</a>
      </div>
