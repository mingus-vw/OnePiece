<?php

include '../Database/connection.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Character Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card-img-top {
      width: 100%; /* Sets width to fit the card */
      height: 250px; /* Fixed height for all images */
      object-fit: contain; /* Ensures the full image is visible without cropping */
      background-color: #f0f0f0; /* Optional: sets background to grey for contrast */
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <?php
      $stmt = $pdo->query("SELECT name, image_url FROM Characters");

      while ($row = $stmt->fetch()) { ?>
        <div class="col-md-4 mb-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo htmlspecialchars($row['image_url']); ?>" class="card-img-top" alt="Character image">
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</body>
</html>
