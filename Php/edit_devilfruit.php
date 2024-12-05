<?php
include 'header.php';
include '../Database/connection.php';

if (!isset($_GET['id'])) {
    header('Location: devilfruits.php');
    exit;
}

$devilfruit_id = intval($_GET['id']);

$devilfruitStmt = $pdo->prepare("SELECT * FROM DevilFruits WHERE id = :id");
$devilfruitStmt->execute(['id' => $devilfruit_id]);
$devilfruit = $devilfruitStmt->fetch();

if (!$devilfruit) {
    header('Location: devilfruits.php');
    exit;
}

$charactersStmt = $pdo->query("SELECT id, name FROM Characters ORDER BY name ASC");
$characters = $charactersStmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $name_japanese = $_POST['name_japanese'];
    $type = $_POST['type'];
    $description = $_POST['devilfruit_description'];
    $user_id = !empty($_POST['user_id']) ? intval($_POST['user_id']) : null;
    $former_user_id = !empty($_POST['former_user_id']) ? intval($_POST['former_user_id']) : null;
    $debut_anime = $_POST['debut_anime'];
    $debut_manga = $_POST['debut_manga'];
    $image_url = $_POST['image_url'];

    try {
        $updateStmt = $pdo->prepare("
            UPDATE DevilFruits
            SET name = :name, name_japanese = :name_japanese, type = :type,
                devilfruit_description = :description, user_id = :user_id,
                former_user_id = :former_user_id, debut_anime = :debut_anime,
                debut_manga = :debut_manga, image_url = :image_url
            WHERE id = :id
        ");
        $updateStmt->execute([
            'name' => $name,
            'name_japanese' => $name_japanese,
            'type' => $type,
            'description' => $description,
            'user_id' => $user_id,
            'former_user_id' => $former_user_id,
            'debut_anime' => $debut_anime,
            'debut_manga' => $debut_manga,
            'image_url' => $image_url,
            'id' => $devilfruit_id
        ]);

        header("Location: specific_devilfruit.php?id=$devilfruit_id");
        exit;
    } catch (PDOException $e) {
        echo "Error updating Devil Fruit: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Devil Fruit</title>
</head>
<body>
    <h1>Edit Devil Fruit: <?php echo htmlspecialchars($devilfruit['name']); ?></h1>
    <form method="POST" action="edit_devilfruit.php?id=<?php echo $devilfruit_id; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($devilfruit['name']); ?>" required>

        <label for="name_japanese">Japanese Name:</label>
        <input type="text" id="name_japanese" name="name_japanese" value="<?php echo htmlspecialchars($devilfruit['name_japanese']); ?>" required>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" value="<?php echo htmlspecialchars($devilfruit['type']); ?>" required>

        <label for="devilfruit_description">Description:</label>
        <textarea id="devilfruit_description" name="devilfruit_description" required><?php echo htmlspecialchars($devilfruit['devilfruit_description']); ?></textarea>

        <label for="user_id">User:</label>
        <select id="user_id" name="user_id">
            <option value="">None</option>
            <?php foreach ($characters as $character): ?>
                <option value="<?php echo $character['id']; ?>" <?php echo $devilfruit['user_id'] == $character['id'] ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($character['name']); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="former_user_id">Former User:</label>
        <select id="former_user_id" name="former_user_id">
            <option value="">None</option>
            <?php foreach ($characters as $character): ?>
                <option value="<?php echo $character['id']; ?>" <?php echo $devilfruit['former_user_id'] == $character['id'] ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($character['name']); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="debut_anime">Debut (Anime):</label>
        <input type="text" id="debut_anime" name="debut_anime" value="<?php echo htmlspecialchars($devilfruit['debut_anime']); ?>" required>

        <label for="debut_manga">Debut (Manga):</label>
        <input type="text" id="debut_manga" name="debut_manga" value="<?php echo htmlspecialchars($devilfruit['debut_manga']); ?>" required>

        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="image_url" value="<?php echo htmlspecialchars($devilfruit['image_url']); ?>" required>

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
