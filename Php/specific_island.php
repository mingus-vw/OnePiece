<?php

include 'header.php';
include '../Database/connection.php';

if (isset($_GET['id'])) {
  $islandStmt = $pdo->prepare("SELECT * FROM Islands WHERE id = :id");
  $islandStmt->execute(['id' => intval($_GET['id'])]);
  $islands = $islandStmt->fetch();

  if (!$islands) {
    header('Location: islands.php');
    exit;
  }
} else {
    header('Location: islands.php');
    exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($islands['name']); ?> - Island Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../Css/specific_character.css">
</head>
<body>
  <div class="container my-5">
    <div class="text-center mb-4">
      <h1><?php echo htmlspecialchars($islands['name']); ?></h1>
      <p><em>"<?php echo htmlspecialchars($islands['name_japanese']); ?>"</em></p>
      <img src="<?php echo htmlspecialchars($islands['image_url']); ?>" alt="<?php echo htmlspecialchars($islands['name']); ?>" class="img-fluid rounded" style="max-width: 300px;">
    </div>

    <div class="row">
      <div class="col-lg-8">
        <h2>Island Information</h2>
        <table class="table table-striped">
          <tbody>
            <tr>
              <th>Location</th>
              <td><?php echo htmlspecialchars($islands['island_location']); ?></td>
            </tr>
            <tr>
              <th>Type</th>
              <td><?php echo htmlspecialchars($islands['island_type']); ?></td>
            </tr>
            <tr>
              <th>Debut</th>
              <td>Anime: <?php echo htmlspecialchars($islands['debut_anime']); ?><br>Manga: <?php echo htmlspecialchars($islands['debut_manga']); ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-lg-4">
        <h2>Description</h2>
        <p><?php echo nl2br(htmlspecialchars($islands['island_description'])); ?></p>
      </div>
    </div>

    <div class="mt-4">
      <a href="islands.php" class="btn btn-secondary">Back to Islands</a>
    </div>
  </div>
</body>
</html>
