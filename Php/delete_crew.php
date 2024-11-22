<?php
include '../Database/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare('DELETE FROM Crews WHERE id = :id');
  if ($stmt->execute(['id' => $_POST['id']])) {
    header('Location: crews.php');
    exit;
  } else {
    echo "Error deleting crew.";
    exit;
  }
}

if (isset($_GET['id'])) {
  $crewStmt = $pdo->prepare("SELECT * FROM Crews WHERE id = :id");
  $crewStmt->execute(['id' => intval($_GET['id'])]);
  $crew = $crewStmt->fetch();

  if (!$crew) {
    header('Location: crews.php');
    exit;
  }
} else {
  header('Location: crews.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Delete Crew</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1>Are you sure you want to delete this crew?</h1>
    <?php if (isset($crew)): ?>
      <p><strong><?= htmlspecialchars($crew['name']) ?></strong></p>
      <form method="POST" action="delete_crew.php">
        <input type="hidden" name="id" value="<?= htmlspecialchars($crew['id']) ?>">
        <button type="submit" class="btn btn-danger">Delete Crew</button>
        <a href="crews.php" class="btn btn-secondary">Cancel</a>
      </form>
    <?php endif; ?>
  </div>
</body>
</html>
