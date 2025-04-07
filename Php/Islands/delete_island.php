<?php 

include '../../Database/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];

  $stmt = $pdo->prepare("DELETE FROM Islands WHERE id = :id");
  $stmt->execute(['id' => $id]);

  header('Location: islands.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Island</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Css/characters.css">
</head>
<body>
<?php include '../Misc/header.php'; ?>

<form method="POST">
    <div class="mb-3">
        <label for="id" class="form-label">Island ID</label>
        <input type="number" class="form-control" id="id" name="id" required>
    </div>
    <button type="submit" class="btn btn-primary">Delete Island</button>
</form>

</body>
</html>

