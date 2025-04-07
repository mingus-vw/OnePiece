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
  <?php include '../../Database/connection.php'; ?>
  <?php include '../Misc/header.php'; ?>

  <div class="container pt-3 justify-content-center d-flex">
    <a href="create_character.php" class="btn btn-success">Create New Character</a>
  </div> 

  <div class="container pt-3">
    <form method="GET" action="" class="d-flex justify-content-center mb-4">
      <select name="sort" class="form-select w-auto">
        <option value="">ID</option>
        <option value="pirates">Pirates</option>
        <option value="marines">Marines</option>
        <option value="others">Others</option>
        <option value="alphabetical">Alphabetical</option>
        <option value="bounty">Bounty</option>
      </select>
      <button type="submit" class="btn btn-primary ms-2">Sort</button>
    </form>
  </div>

  <div class="container pt-5">
    <div class="row">
      <?php
      $query = "SELECT id, name, image_url, character_description FROM Characters";

      if (isset($_GET['sort'])) {
        $sortOption = $_GET['sort'];

        if ($sortOption === 'pirates') {
          $query = "SELECT id, name, image_url, character_description FROM Characters WHERE is_pirate = TRUE";
        } elseif ($sortOption === 'marines') {
          $query = "SELECT id, name, image_url, character_description FROM Characters WHERE is_marine = TRUE";
        } elseif ($sortOption === 'others') {
          $query = "SELECT id, name, image_url, character_description FROM Characters WHERE is_pirate = FALSE AND is_marine = FALSE";
        } elseif ($sortOption === 'alphabetical') {
          $query = "SELECT id, name, image_url, character_description FROM Characters ORDER BY name ASC";
        } elseif ($sortOption === 'bounty') {
          $query = "SELECT id, name, image_url, character_description FROM Characters ORDER BY bounty DESC";
        }
      }

      $stmt = $pdo->query($query);

      while ($row = $stmt->fetch()) { ?>
        <div class="col-md-4 mb-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo htmlspecialchars($row['image_url']); ?>" class="card-img-top" alt="Character image">
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
              <p class="card-text"><?php echo htmlspecialchars($row['character_description']); ?></p>
              <a href="specific_character.php?id=<?php echo urlencode($row['id']); ?>" class="btn btn-primary">View character</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <?php include '../Misc/footer.php'; ?>
</body>
</html>
