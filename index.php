<?php
  include_once('init.php');
  $rows = $db->query('SELECT * FROM book ORDER BY title');
    foreach ($rows as $row) {
        echo '<pre>' . print_r($row) . '</pre>';
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  
  <div class="container">
    
      <nav class="navbar bg-light">
      <div class="container-fluid">
        <a class="navbar-brand">Books</a>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>

      <table class="table table-striped table-responsive-lg">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">ISBN</th>
          <th scope="col">Title</th>
          <th scope="col">Author</th>
          <th scope="col">Stock</th>
          <th scope="col">Price</th>
          
        </tr>
      </thead>
      <tbody>
        <?php 
          echo 
        ?>
        <tr>
          <th scope="row">1</th>
          <td>9780061120084</td>
          <td>To Kill A Mockingbird</td>
          <td>Harper Lee</td>
          <td>2</td>
          <td>10</td>
        </tr>

        <tr>
          <th scope="row">1</th>
          <td>9780061120084</td>
          <td>To Kill A Mockingbird</td>
          <td>Harper Lee</td>
          <td>2</td>
          <td>10</td>
        </tr>

      </tbody>
    </table>
    <button class="btn btn-primary" type="submit">Add Book <i class="bi bi-plus-circle-fill"></i></button>
 
  </div>


  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
