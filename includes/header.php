<!DOCTYPE html>
<html>
  <head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="/OOP/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="/OOP/css/styles.css">
    <script src="https://kit.fontawesome.com/5f0ef8cba2.js" crossorigin="anonymous"></script>
  </head>
  <body>

  <header>
    <h1>My blog</h1>
  </header>  

  <nav class="navbar navbar-light bg-light">
    <ul class="nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="/OOP/?page=1"><i class="nav-icon fa-solid fa-house"></i>Home</a></li>
        <?php if (Auth::isLoggedIn()) : ?>

          <li class="nav-item"><a class="nav-link" href="/OOP/admin/?page=1"><i class="nav-icon fa-regular fa-rectangle-list"></i>Admin</a></li>
        </ul>
        <ul class="nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="/OOP/logout.php"><i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>Log out</a></li>


        <?php else : ?>
          
          </ul>
          <ul class="nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="/OOP/login.php"><i class="nav-icon fa-solid fa-arrow-right-to-bracket"></i>Log in</a></li>

        <?php endif; ?>
    </ul>
  </nav>

  <div class="container">
  <main>