<?php

include '../Database/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare('INSERT INTO Crews (name, jolly_roger_image_url, crew_description, captain_name, debut_anime, debut_manga, main_ship_name, main_ship_description, main_ship_image_url) VALUES (:name, :jolly_roger_image_url, :crew_description, :captain_name, :debut_anime, :debut_manga, :main_ship_name, :main_ship_description, :main_ship_image_url)');
  $stmt->execute([
    'name' => $_POST['name'],
    'jolly_roger_image_url' => $_POST['jolly_roger_image_url'],
    'crew_description' => $_POST['crew_description'],
    'captain_name' => $_POST['captain_name'],
    'debut_anime' => $_POST['debut_anime'],
    'debut_manga' => $_POST['debut_manga'],
    'main_ship_name' => $_POST['main_ship_name'],	
    'main_ship_description' => $_POST['main_ship_description'],
    'main_ship_image_url' => $_POST['main_ship_image_url']
  ]);

  header('Location: crews.php');
  exit;
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Crew</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../Css/characters.css">
</head>
<body>
  <?php include 'header.php'; ?>

<form method="POST">
  <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="jolly_roger_image_url" class="form-label">Jolly Roger Image URL</label>
      <input type="text" class="form-control" id="jolly_roger_image_url" name="jolly_roger_image_url">
    </div>
    <div class="mb-3">
      <label for="crew_description" class="form-label">Description</label>
      <textarea class="form-control" id="crew_description" name="crew_description"></textarea>
    </div>
    <div class="mb-3">
      <label for="captain_name" class="form-label">Captain Name</label>
      <input type="text" class="form-control" id="captain_name" name="captain_name">
    </div>
    <div class="mb-3">
      <label for="debut_anime" class="form-label">Debut Anime</label>
      <input type="text" class="form-control" id="debut_anime" name="debut_anime">
    </div>
    <div class="mb-3">
      <label for="debut_manga" class="form-label">Debut Manga</label>
      <input type="text" class="form-control" id="debut_manga" name="debut_manga">
    </div>
    <div class="mb-3">
      <label for="main_ship_name" class="form-label">Main Ship Name</label>
      <input type="text" class="form-control" id="main_ship_name" name="main_ship_name">
    </div>
    <div class="mb-3">
      <label for="main_ship_description" class="form-label">Main Ship Description</label>
      <textarea class="form-control" id="main_ship_description" name="main_ship_description"></textarea>
    </div>
    <div class="mb-3">
      <label for="main_ship_image_url" class="form-label">Main Ship Image URL</label>
      <input type="text" class="form-control" id="main_ship_image_url" name="main_ship_image_url">
    </div>
    <button type="submit" class="btn btn-primary">Create Crew</button>
  </form>

</body>
