<?php

include 'header.php';
include '../Database/connection.php';

if (isset($_GET['id'])) {
  $crewStmt = $pdo->prepare("SELECT * FROM Crews WHERE id = :id");
  $crewStmt->execute(['id' => intval($_GET['id'])]);
  $crew = $crewStmt->fetch();

  if (!$crew) {
    header('Location: characters.php');
    exit;
  }
} else {
  header('Location: characters.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($crew['name']); ?> - Crew Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../Css/specific_crew.css">
</head>
<body>
  <div class="container my-5">
    <div class="text-center mb-4">
      <h1><?php echo htmlspecialchars($crew['name']); ?></h1>
      <img src="<?php echo htmlspecialchars($crew['jolly_roger_image_url']); ?>" alt="<?php echo htmlspecialchars($crew['name']); ?> Jolly Roger" class="img-fluid rounded" style="max-width: 300px;">
    </div>

    <div class="row">
      <div class="col-lg-8">
        <h2>Crew Information</h2>
        <table class="table table-striped">
          <tbody>
            <tr>
              <th>Description</th>
              <td><?php echo nl2br(htmlspecialchars($crew['crew_description'])); ?></td>
            </tr>
            <tr>
              <th>Captain</th>
              <td><?php echo htmlspecialchars($crew['captain_name']); ?></td>
            </tr>
            <tr>
              <th>Main Ship</th>
              <td><?php echo htmlspecialchars($crew['main_ship_name']); ?></td>
            </tr>
            <tr>
              <th>Debut</th>
              <td>Anime: <?php echo htmlspecialchars($crew['debut_anime']); ?><br>Manga: <?php echo htmlspecialchars($crew['debut_manga']); ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-lg-4">
        <h2>Main Ship</h2>
        <img src="<?php echo htmlspecialchars($crew['main_ship_image_url']); ?>" alt="<?php echo htmlspecialchars($crew['main_ship_name']); ?>" class="img-fluid rounded mb-3">
        <p><?php echo nl2br(htmlspecialchars($crew['main_ship_description'])); ?></p>
      </div>
    </div>

    <div class="mt-4">
      <a href="crews.php" class="btn btn-secondary">Back to Crews</a>
    </div>
  </div>
</body>
</html>
