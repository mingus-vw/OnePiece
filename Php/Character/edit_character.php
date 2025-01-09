<?php

include '../../Database/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare('
        UPDATE Characters
        SET 
            name = :name,
            alias = :alias,
            epithet = :epithet,
            race = :race,
            status = :status,
            origin = :origin,
            age = :age,
            age_post_timeskip = :age_post_timeskip,
            occupation = :occupation,
            is_pirate = :is_pirate,
            is_marine = :is_marine,
            crew_id = :crew_id,
            bounty = :bounty,
            devil_fruit = :devil_fruit,
            armement_haki = :armement_haki,
            observation_haki = :observation_haki,
            conqueror_haki = :conqueror_haki,
            debut_anime = :debut_anime,
            debut_manga = :debut_manga,
            character_description = :character_description,
            image_url = :image_url
        WHERE id = :id
    ');

    $stmt->execute([
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'alias' => $_POST['alias'],
        'epithet' => $_POST['epithet'],
        'race' => $_POST['race'],
        'status' => $_POST['status'],
        'origin' => $_POST['origin'],
        'age' => $_POST['age'],
        'age_post_timeskip' => $_POST['age_post_timeskip'],
        'occupation' => $_POST['occupation'],
        'is_pirate' => isset($_POST['is_pirate']) ? 1 : 0,
        'is_marine' => isset($_POST['is_marine']) ? 1 : 0,
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

if (isset($_GET['id'])) {
    $characterStmt = $pdo->prepare("SELECT * FROM Characters WHERE id = :id");
    $characterStmt->execute(['id' => intval($_GET['id'])]);
    $character = $characterStmt->fetch();

    if (!$character) {
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
    <title>Update Character</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Css/characters.css">
</head>
<body>
<?php include '../Misc/header.php'; ?>

<form method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($character['id']) ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($character['name']) ?>">
    </div>
    <div class="mb-3">
        <label for="alias" class="form-label">Alias</label>
        <input type="text" class="form-control" id="alias" name="alias" value="<?= htmlspecialchars($character['alias']) ?>">
    </div>
    <div class="mb-3">
        <label for="epithet" class="form-label">Epithet</label>
        <input type="text" class="form-control" id="epithet" name="epithet" value="<?= htmlspecialchars($character['epithet']) ?>">
    </div>
    <div class="mb-3">
    <label for="race" class="form-label">Race</label>
    <input type="text" class="form-control" id="race" name="race" value="<?= htmlspecialchars($character['race']) ?>">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="status" name="status" value="<?= htmlspecialchars($character['status']) ?>">
    </div>
    <div class="mb-3">
        <label for="origin" class="form-label">Origin</label>
        <input type="text" class="form-control" id="origin" name="origin" value="<?= htmlspecialchars($character['origin']) ?>">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" value="<?= htmlspecialchars($character['age']) ?>">
    </div>
    <div class="mb-3">
        <label for="age_post_timeskip" class="form-label">Age Post Timeskip</label>
        <input type="number" class="form-control" id="age_post_timeskip" name="age_post_timeskip" value="<?= htmlspecialchars($character['age_post_timeskip']) ?>">
    </div>
    <div class="mb-3">
        <label for="occupation" class="form-label">Occupation</label>
        <input type="text" class="form-control" id="occupation" name="occupation" value="<?= htmlspecialchars($character['occupation']) ?>">
    </div>
    <div class="mb-3">
        <label for="is_marine" class="form-label">Is Marine</label>
        <input type="checkbox" id="is_marine" name="is_marine" <?= $character['is_marine'] ? 'checked' : '' ?>>
    </div>
    <div class="mb-3">
        <label for="is_pirate" class="form-label">Is Pirate</label>
        <input type="checkbox" id="is_pirate" name="is_pirate" <?= $character['is_pirate'] ? 'checked' : '' ?>>
    </div>
    <div class="mb-3">
        <label for="character_description" class="form-label">Description</label>
        <textarea class="form-control" id="character_description" name="character_description"><?= htmlspecialchars($character['character_description']) ?></textarea>
    </div>
    <div class="mb-3">
        <label for="crew_id" class="form-label">Crew</label>
        <select class="form-select" id="crew_id" name="crew_id">
            <option value="">None</option>
            <?php foreach ($crews as $crew): ?>
                <option value="<?= $crew['id'] ?>" <?= $character['crew_id'] === $crew['id'] ? 'selected' : '' ?>><?= $crew['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="bounty" class="form-label">Bounty</label>
        <input type="number" class="form-control" id="bounty" name="bounty" value="<?= htmlspecialchars($character['bounty']) ?>">
    </div>
    <div class="mb-3">
        <label for="devil_fruit" class="form-label">Devil Fruit</label>
        <input type="text" class="form-control" id="devil_fruit" name="devil_fruit" value="<?= htmlspecialchars($character['devil_fruit']) ?>">
    </div>
    <div class="mb-3">
        <label for="armement_haki" class="form-label">Armement Haki</label>
        <input type="checkbox" id="armement_haki" name="armement_haki" <?= $character['armement_haki'] ? 'checked' : '' ?>>
    </div>
    <div class="mb-3">
        <label for="observation_haki" class="form-label">Observation Haki</label>
        <input type="checkbox" id="observation_haki" name="observation_haki" <?= $character['observation_haki'] ? 'checked' : '' ?>>
    </div>
    <div class="mb-3">
        <label for="conqueror_haki" class="form-label">Conqueror Haki</label>
        <input type="checkbox" id="conqueror_haki" name="conqueror_haki" <?= $character['conqueror_haki'] ? 'checked' : '' ?>>
    </div>
    <div class="mb-3">
        <label for="debut_anime" class="form-label">Debut Anime</label>
        <input type="text" class="form-control" id="debut_anime" name="debut_anime" value="<?= htmlspecialchars($character['debut_anime']) ?>">
    </div>
    <div class="mb-3">
        <label for="debut_manga" class="form-label">Debut Manga</label>
        <input type="text" class="form-control" id="debut_manga" name="debut_manga" value="<?= htmlspecialchars($character['debut_manga']) ?>">
    </div>
    <div class="mb-3">
        <label for="image_url" class="form-label">Image URL</label>
        <input type="text" class="form-control" id="image_url" name="image_url" value="<?= htmlspecialchars($character['image_url']) ?>">
    </div>

    <button type="submit" class="btn btn-primary">Update Character</button>
</form>

<?php include '../Misc/footer.php'; ?>
</body>
</html>
