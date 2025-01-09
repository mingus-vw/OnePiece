<?php

include 'header.php';
include '../Database/connection.php';

if (isset($_GET['id'])) {
    $characterStmt = $pdo->prepare("SELECT * FROM Islands WHERE id = :id");
    $characterStmt->execute(['id' => intval($_GET['id'])]);
    $character = $characterStmt->fetch();

    if (!$character) {
        header('Location: islands.php');
        exit;
    }
} else {
    header('Location: islands.php');
    exit;
}

// Handle form submission for deletion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $island_id = intval($_POST['id']);

    // Delete the Island
    $deleteStmt = $pdo->prepare("DELETE FROM Islands WHERE id = :id");
    $deleteStmt->execute(['id' => $island_id]);

    // Redirect after deletion
    header('Location: islands.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($character['name']); ?> - Island Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../Css/specific_character.css">
</head>
<body>
<div class="container my-5">
    <div class="text-center mb-4">
      <h1><?php echo htmlspecialchars($character['name']); ?></h1>
      <p><em>"<?php echo htmlspecialchars($character['name_japanese']); ?>"</em></p>
      <img src="<?php echo htmlspecialchars($character['image_url']); ?>" alt="<?php echo htmlspecialchars($character['name']); ?>" class="img-fluid rounded" style="max-width: 300px;">
    </div>

    <div class="row">
      <div class="col-lg-8">
        <h2>Island Information</h2>
        <table class="table table-striped">
            
          <tbody>
            <tr>
              <th scope="row">Name</th>
              <td><?php echo htmlspecialchars($character['name']); ?></td>
            </tr>
            <tr>
              <th scope="row">Japanese Name</th>
              <td><?php echo htmlspecialchars($character['name_japanese']); ?></td>
            </tr>
            <tr>
              <th scope="row">Description</th>
              <td><?php echo htmlspecialchars($character['island_description']); ?></td>
            </tr>
            <tr>
              <th scope="row">First Appearance (Anime)</th>
              <td><?php echo htmlspecialchars($character['debut_anime']); ?></td>
            </tr>
            <tr>
              <th scope="row">First Appearance (Manga)</th>
              <td><?php echo htmlspecialchars($character['debut_manga']); ?></td>
            </tr>
            </tbody>
        </table>
        </div>
        <div class="col-lg-4">
          <h2>Island Description</h2>
          <p><?php echo htmlspecialchars($character['island_description']); ?></p>
        </div>
        </div>

    <div class="mt-4">
      <a href="islands.php" class="btn btn-secondary">Back to Islands</a>
      <a href="edit_island.php?id=<?php echo intval($character['id']); ?>" class="btn btn-primary">Edit Island</a>
    </div>
    <?php if (isset($_GET['id'])) : ?>
    <form method="post" action="delete_island.php" onsubmit="return confirm('Are you sure you want to delete this island?');">
        <input type="hidden" name="id" value="<?php echo intval($_GET['id']); ?>">
        <button type="submit" class="btn btn-danger">Delete Island</button>
    </form>
    <?php endif; ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>