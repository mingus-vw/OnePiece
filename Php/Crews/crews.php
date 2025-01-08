<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Character Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../Css/characters.css">
</head>
<body>
  <?php include '../../Database/connection.php' ?>
  <?php include '../Misc/header.php'; ?>

  <div class="container pt-5">
    <div class="row">
      <?php
      $stmt = $pdo->query("SELECT id, name, jolly_roger_image_url, crew_description FROM Crews");

      while ($row = $stmt->fetch()) { ?>
        <div class="col-md-4 mb-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo htmlspecialchars($row['jolly_roger_image_url']); ?>" class="card-img-top" alt="Crew image">
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
              <p class="card-text"><?php echo htmlspecialchars($row['crew_description']); ?></p>
              <a href="specific_crew.php?id=<?php echo urlencode($row['id']); ?>" class="btn btn-primary">View crew</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <a href="create_crew.php" class="createButton">Create Crew</a>

  <?php include '../Misc/footer.php'; ?>
</body>
</html>
