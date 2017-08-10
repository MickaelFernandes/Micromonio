<?php
$this->layout('layout', array('title' => 'Sign in'));
?>

<?php
//début du bloc main_content
$this->start('main_content');
?>

<div class="formSignIn">
    <div class="formBox">
        <div class="headFormBoxIn">
            <h1> <p>MICROMONIO</p></h1>
        </div>
        <form method="POST" action="">
                <div class="form-group">
                  <label for="username">E-mail</label>
                  <input type="email"  name="signin_email" required="required"/>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password"  name="singin_password" required="required"/>
                </div>
                <div class="form-group" >
                  <button type="submit" id="buttonSignIn">MICROMONIO IN!</button>
                </div>
          </form>
    </div>
</div>


<?php
//fin du bloc
$this->stop('main_content');
?>
