<?php $this->layout('layout', ['title' => 'Ajouter un nouveau VideoGame']) ?>

<?php $this->start('main_content') ?>
	<h2>ADD NEW GAME</h2>

    <form method="POST" action="">

      <div class="">
          <label>GAME Name:</label>
          <input type="text" name="name" name="" placeholder="Enter email" >
      </div>

      <div class="">
          <label>GAME YEAR:</label>
          <input type="text" name="year" name="" placeholder="Enter email" >
      </div>

      <div class="">
          <label>GAME Editor:</label>
          <input type="text" name="editor" name="" placeholder="Enter email" >
      </div>

      <div class="">
          <label>GAME Image:</label>
          <input type="text" name="image" name="" placeholder="Enter email" >
      </div>

      <div class="">
          <label>WHAT Console ?:</label>
          <input type="text" name="console" name="" placeholder="Enter email" >
      </div>

      <div class="">
          <label>WHAT Genre ?:</label>
          <input type="text" name="genre" name="" placeholder="Enter email" >
      </div>

      <button type="submit">Submit</button>
    </form>

<?php $this->stop('main_content') ?>
