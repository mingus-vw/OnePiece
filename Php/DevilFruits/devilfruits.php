<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Devilfruit Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../Css/characters.css">
</head>
<body>
  <?php include '../../Database/connection.php'; ?>
  <?php include '../Misc/header.php'; ?>

  <div class="container pt-3 justify-content-center d-flex">
    <a href="create_devilfruit.php" class="btn btn-success">Create New Devilfruit</a>
  </div>

  <div class="container pt-3">
    <form method="GET" action="" class="d-flex justify-content-center mb-4">
      <select name="sort" class="form-select w-auto">
        <option value="id">ID</option>
        <option value="paramecia">Paramecia</option>
        <option value="zoan">Zoan</option>
        <option value="logia">Logia</option>
        <option value="alphabetical">Alphabetical</option>
      </select>
      <button type="submit" class="btn btn-primary ms-2">Sort</button>
    </form>
  </div>

  <div class="container pt-5">
    <div class="row">
      <?php
      $query = "SELECT id, name, image_url, devilfruit_description FROM DevilFruits";

      if (isset($_GET['sort'])) {
        $sortOption = $_GET['sort'];

        if ($sortOption === 'id') {
          $query = "SELECT id, name, image_url, devilfruit_description FROM DevilFruits ORDER BY id ASC";
        } elseif ($sortOption === 'paramecia') {
          $query = "SELECT id, name, image_url, devilfruit_description FROM DevilFruits WHERE type = 'Paramecia'";
        } elseif ($sortOption === 'zoan') {
          $query = "SELECT id, name, image_url, devilfruit_description FROM DevilFruits WHERE type = 'Zoan'";
        } elseif ($sortOption === 'logia') {
          $query = "SELECT id, name, image_url, devilfruit_description FROM DevilFruits WHERE type = 'Logia'";
        } elseif ($sortOption === 'alphabetical') {
          $query = "SELECT id, name, image_url, devilfruit_description FROM DevilFruits ORDER BY name ASC";
        }
      }

      $stmt = $pdo->query($query);

      while ($row = $stmt->fetch()) { ?>
        <div class="col-md-4 mb-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo htmlspecialchars($row['image_url']); ?>" class="card-img-top" alt="Devilfruit image">
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
              <p class="card-text"><?php echo htmlspecialchars($row['devilfruit_description']); ?></p>
              <a href="specific_devilfruit.php?id=<?php echo urlencode($row['id']); ?>" class="btn btn-primary">View Devilfruit</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <?php include '../Misc/footer.php'; ?>
  
</body>
</html>
