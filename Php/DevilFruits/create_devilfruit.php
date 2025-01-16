<?php
    include '../Misc/header.php';
    include '../../Database/connection.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $name_japanese = $_POST['name_japanese'];
        $type = $_POST['type'];
        $devilfruit_description = $_POST['devilfruit_description'];
        $user_id = !empty($_POST['user_id']) ? intval($_POST['user_id']) : null;
        $former_user_id = !empty($_POST['former_user_id']) ? intval($_POST['former_user_id']) : null;
        $debut_anime = $_POST['debut_anime'];
        $debut_manga = $_POST['debut_manga'];
        $image_url = $_POST['image_url'];

        $stmt = $pdo->prepare("
        INSERT INTO DevilFruits 
        (name, name_japanese, type, devilfruit_description, user_id, former_user_id, debut_anime, debut_manga, image_url) 
        VALUES 
        (:name, :name_japanese, :type, :devilfruit_description, :user_id, :former_user_id, :debut_anime, :debut_manga, :image_url)
    ");

        $stmt->execute([
            'name' => $name,
            'name_japanese' => $name_japanese,
            'type' => $type,
            'devilfruit_description' => $devilfruit_description,
            'user_id' => $user_id,
            'former_user_id' => $former_user_id,
            'debut_anime' => $debut_anime,
            'debut_manga' => $debut_manga,
            'image_url' => $image_url,
        ]);

        header('Location: devilfruits.php');
        exit;
    }

    $characters = $pdo->query("SELECT id, name FROM Characters")->fetchAll(PDO::FETCH_ASSOC);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Devil Fruit</title>
</head>
<body>
    <h1>Create a New Devil Fruit</h1>
    <form action="create_devilfruit.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="name_japanese">Name (Japanese):</label>
        <input type="text" id="name_japanese" name="name_japanese" required><br>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required><br>

        <label for="devilfruit_description">Description:</label>
        <textarea id="devilfruit_description" name="devilfruit_description" required></textarea><br>

        <label for="user_id">User:</label>
        <select id="user_id" name="user_id">
            <option value="">None</option>
            <?php foreach ($characters as $character) : ?>
                <option value="<?php echo htmlspecialchars($character['id']); ?>">
                    <?php echo htmlspecialchars($character['name']); ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label for="former_user_id">Former User:</label>
        <select id="former_user_id" name="former_user_id">
            <option value="">None</option>
            <?php foreach ($characters as $character) : ?>
                <option value="<?php echo htmlspecialchars($character['id']); ?>">
                    <?php echo htmlspecialchars($character['name']); ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label for="debut_anime">Debut (Anime):</label>
        <input type="text" id="debut_anime" name="debut_anime" required><br>

        <label for="debut_manga">Debut (Manga):</label>
        <input type="text" id="debut_manga" name="debut_manga" required><br>

        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="image_url" required><br>

        <button type="submit">Create</button>
    </form>

    <?php include '../Misc/footer.php'; ?>
</body>
</html>
