<?php
    include 'header.php';
    include '../Database/connection.php';

// Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $name_japanese = $_POST['name_japanese'];
        $island_location = $_POST['island_location'];
        $island_type = $_POST['island_type'];
        $island_description = $_POST['island_description'];
        $image_url = $_POST['image_url'];
        $debut_anime = $_POST['debut_anime'];
        $debut_manga = $_POST['debut_manga'];

        // Insert the new Island
        $stmt = $pdo->prepare("
        INSERT INTO Islands
        (name, name_japanese, island_location, island_type, island_description, image_url, debut_anime, debut_manga)
        VALUES
        (:name, :name_japanese, :island_location, :island_type, :island_description, :image_url, :debut_anime, :debut_manga)
    ");
    
            $stmt->execute([
                'name' => $name,
                'name_japanese' => $name_japanese,
                'island_location' => $island_location,
                'island_type' => $island_type,
                'island_description' => $island_description,
                'image_url' => $image_url,
                'debut_anime' => $debut_anime,
                'debut_manga' => $debut_manga,
            ]);
    
            header('Location: islands.php'); // Redirect to the Islands listing page
            exit;
        }

// Fetch characters for dropdowns
    $characters = $pdo->query("SELECT id, name FROM Characters")->fetchAll(PDO::FETCH_ASSOC);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Island</title>
</head>
<body>
    <h1>Create a New Island</h1>
    <form action="create_island.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="name_japanese">Name (Japanese):</label>
        <input type="text" id="name_japanese" name="name_japanese" required><br>

        <label for="island_location">Location:</label>
        <input type="text" id="island_location" name="island_location" required><br>

        <label for="island_type">Type:</label>
        <input type="text" id="island_type" name="island_type" required><br>

        <label for="island_description">Description:</label>
        <textarea id="island_description" name="island_description" required></textarea><br>

        <label for="image_url">Image URL:</label>
        <input type="url" id="image_url" name="image_url" required><br>

        <label for="debut_anime">Debut Anime:</label>
        <input type="text" id="debut_anime" name="debut_anime" required><br>

        <label for="debut_manga">Debut Manga:</label>
        <input type="text" id="debut_manga" name="debut_manga" required><br>

        <button type="submit">Create Island</button>
    </form>
</body>
</html>
<?php include 'footer.php'; ?>
