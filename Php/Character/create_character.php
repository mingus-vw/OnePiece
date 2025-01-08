<?php
include '../../Database/connection.php';

$stmt = $pdo->prepare('SELECT id, name FROM Crews');
$stmt->execute();
$crews = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare('INSERT INTO Characters (name, alias, epithet, race, status, origin, age, age_post_timeskip, occupation, is_pirate, is_marine, crew_id, bounty, devil_fruit, armement_haki, observation_haki, conqueror_haki, debut_anime, debut_manga, character_description, image_url) VALUES (:name, :alias, :epithet, :race, :status, :origin, :age, :age_post_timeskip, :occupation, :is_pirate, :is_marine, :crew_id, :bounty, :devil_fruit, :armement_haki, :observation_haki, :conqueror_haki, :debut_anime, :debut_manga, :character_description, :image_url)');
    $stmt->execute([
        'name' => $_POST['name'],
        'alias' => $_POST['alias'],
        'epithet' => $_POST['epithet'],
        'race' => $_POST['race'],
        'status' => $_POST['status'],
        'origin' => $_POST['origin'],
        'age' => intval($_POST['age']),
        'age_post_timeskip' => intval($_POST['age_post_timeskip']),
        'occupation' => $_POST['occupation'],
        'is_pirate' => $_POST['is_pirate'] === 'yes' ? 1 : 0,
        'is_marine' => $_POST['is_marine'] === 'yes' ? 1 : 0,
        'crew_id' => $_POST['crew_id'] ?: null, 
        'bounty' => $_POST['bounty'],
        'devil_fruit' => $_POST['devil_fruit'],
        'armement_haki' => isset($_POST['armement_haki']) ? 1 : 0,
        'observation_haki' => isset($_POST['observation_haki']) ? 1 : 0,
        'conqueror_haki' => isset($_POST['conqueror_haki']) ? 1 : 0,
        'debut_anime' => $_POST['debut_anime'],
        'debut_manga' => $_POST['debut_manga'],
        'character_description' => $_POST['character_description'],
        'image_url' => $_POST['image_url']
    ]);

    header('Location: characters.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Character</title>
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
        <label for="alias" class="form-label">Alias</label>
        <input type="text" class="form-control" id="alias" name="alias">
    </div>
    <div class="mb-3">
        <label for="epithet" class="form-label">Epithet</label>
        <input type="text" class="form-control" id="epithet" name="epithet">
    </div>
    <div class="mb-3">
        <label for="race" class="form-label">Race</label>
        <input type="text" class="form-control" id="race" name="race">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="status" name="status">
    </div>
    <div class="mb-3">
        <label for="origin" class="form-label">Origin</label>
        <input type="text" class="form-control" id="origin" name="origin">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" required>
    </div>
    <div class="mb-3">
        <label for="age_post_timeskip" class="form-label">Age Post Timeskip</label>
        <input type="number" class="form-control" id="age_post_timeskip" name="age_post_timeskip">
    </div>
    <div class="mb-3">
        <label for="occupation" class="form-label">Occupation</label>
        <input type="text" class="form-control" id="occupation" name="occupation">
    </div>
    <div class="mb-3">
        <label for="is_pirate" class="form-label">Is Pirate</label>
        <select class="form-control" id="is_pirate" name="is_pirate">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="is_marine" class="form-label">Is Marine</label>
        <select class="form-control" id="is_marine" name="is_marine">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="crew_id" class="form-label">Crew</label>
        <select class="form-control" id="crew_id" name="crew_id">
            <option value="">None</option>
            <?php foreach ($crews as $crew): ?>
                <option value="<?= htmlspecialchars($crew['id']) ?>">
                    <?= htmlspecialchars($crew['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="bounty" class="form-label">Bounty</label>
        <input type="text" class="form-control" id="bounty" name="bounty">
    </div>
    <div class="mb-3">
        <label for="devil_fruit" class="form-label">Devil Fruit</label>
        <input type="text" class="form-control" id="devil_fruit" name="devil_fruit">
    </div>
    <div class="mb-3">
        <label for="armement_haki" class="form-label">Armement Haki</label>
        <input type="checkbox" id="armement_haki" name="armement_haki" value="1">
    </div>
    <div class="mb-3">
        <label for="observation_haki" class="form-label">Observation Haki</label>
        <input type="checkbox" id="observation_haki" name="observation_haki" value="1">
    </div>
    <div class="mb-3">
        <label for="conqueror_haki" class="form-label">Conqueror Haki</label>
        <input type="checkbox" id="conqueror_haki" name="conqueror_haki" value="1">
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
        <label for="character_description" class="form-label">Description</label>
        <textarea class="form-control" id="character_description" name="character_description"></textarea>
    </div>
    <div class="mb-3">
        <label for="image_url" class="form-label">Image URL</label>
        <input type="text" class="form-control" id="image_url" name="image_url">
    </div>
    <button type="submit" class="btn btn-primary">
