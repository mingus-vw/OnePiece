<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Island Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../Css/characters.css">
</head>
<body>
  <?php include '../Database/connection.php' ?>
  <?php include 'header.php'; ?>

  <div class="container pt-5">
    <div class="row">
      <?php
      $stmt = $pdo->query("SELECT id, name, image_url, island_description FROM Islands");

      while ($row = $stmt->fetch()) { ?>
        <div class="col-md-4 mb-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo htmlspecialchars($row['image_url']); ?>" class="card-img-top" alt="Character image">
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
              <p class="card-text"><?php echo htmlspecialchars($row['island_description']); ?></p>
              <a href="specific_island.php?id=<?php echo urlencode($row['id']); ?>" class="btn btn-primary">View island</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>
