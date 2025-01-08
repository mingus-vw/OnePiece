<?php
include '../../Database/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare('DELETE FROM Characters WHERE id = :id');
  if ($stmt->execute(['id' => $_POST['id']])) {
    header('Location: characters.php');
    exit;
  } else {
    echo "Error deleting character.";
    exit;
  }
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
<html>
<head>
  <title>Delete Character</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1>Are you sure you want to delete this character?</h1>
    <?php if (isset($character)): ?>
      <p><strong><?= htmlspecialchars($character['name']) ?></strong></p>
      <form method="POST" action="delete_charachter.php">
        <input type="hidden" name="id" value="<?= htmlspecialchars($character['id']) ?>">
        <button type="submit" class="btn btn-danger">Delete Character</button>
        <a href="characters.php" class="btn btn-secondary">Cancel</a>
      </form>
    <?php endif; ?>
  </div>
</body>
</html>
