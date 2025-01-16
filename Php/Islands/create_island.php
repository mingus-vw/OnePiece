<?php

include '../../Database/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare('INSERT INTO Islands (name, image_url, island_description, island_location, island_type, debut_anime, debut_manga) VALUES (:name, :image_url, :island_description, :island_location, :island_type, :debut_anime, :debut_manga)');
    $stmt->execute([
        'name' => $_POST['name'],
        'name_japanese' => $_POST['name_japanese'],
        'image_url' => $_POST['image_url'],
        'island_description' => $_POST['island_description'],
        'island_location' => $_POST['island_location'],
        'island_type' => $_POST['island_type'],
        'debut_anime' => $_POST['debut_anime'],
        'debut_manga' => $_POST['debut_manga']
    ]);

    header('Location: islands.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Island</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Css/characters.css">
</head>
<body>
<?php include '../Misc/header.php'; ?>

<form method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="name_japanese" class="form-label">Japanese Name</label>
        <input type="text" class="form-control" id="name_japanese" name="name_japanese" required>
    </div>
    <div class="mb-3">
        <label for="image_url" class="form-label">Image URL</label>
        <input type="text" class="form-control" id="image_url" name="image_url" required>
    </div>
    <div class="mb-3">
        <label for="island_description" class="form-label">Island Description</label>
        <textarea class="form-control" id="island_description" name="island_description" required></textarea>
    </div>
    <div class="mb-3">
        <label for="island_location" class="form-label">Island Location</label>
        <input type="text" class="form-control" id="island_location" name="island_location" required>
    </div>
    <div class="mb-3">
        <label for="island_type" class="form-label">Island Type</label>
        <input type="text" class="form-control" id="island_type" name="island_type" required>
    </div>
    <div class="mb-3">
        <label for="debut_anime" class="form-label">Debut Anime</label>
        <input type="text" class="form-control" id="debut_anime" name="debut_anime" required>
    </div>
    <div class="mb-3">
        <label for="debut_manga" class="form-label">Debut Manga</label>
        <input type="text" class="form-control" id="debut_manga" name="debut_manga" required>
    </div>
    <button type="submit" class="btn btn-primary">Create Island</button>
</form>

</body>
</html>
