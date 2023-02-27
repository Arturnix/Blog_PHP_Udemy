<?php

    require 'includes/init.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $conn = require 'includes/db.php';
        
        if (User::authenticate($conn, $_POST['username'], $_POST['password'])) { 
          
          Auth::login();
          
          Url::redirect('/OOP/?page=1'); 

        } else { 
          $error = "login incorrect"; 
        } 
      } 
    ?>

<?php require 'includes/header.php'; ?>

<article><h2>Login</h2></article>

<?php if (! empty($error)) : ?>
<p><?= $error ?></p>
<?php endif; ?>

<form method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input class="form-control" name="username" id="username" />
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input class="form-control" type="password" name="password" id="password" />
  </div>

  <button class="btn btn-primary">Log in</button>
</form>

<?php require 'includes/footer.php'; ?>
