<?php

include 'header.php';
include '../Database/connection.php';

if (isset($_GET['id'])) {
  $characterStmt = $pdo->prepare("SELECT * FROM DevilFruits WHERE id = :id");
  $characterStmt->execute(['id' => intval($_GET['id'])]);
  $character = $characterStmt->fetch();

    if (!$character) {
        header('Location: devilfruits.php');
        exit;
    }
} else {
    header('Location: devilfruits.php');
    exit;

    $userStmt = $pdo->query("SELECT * FROM Users");
    $users = $userStmt->fetchAll(PDO::FETCH_ASSOC);

    $characterUser = null;
    foreach ($users as $user) {
        if ($user['id'] === $character['user_id']) {
            $characterUser = $user;
            break;
        }
    }

    $formerUserStmt = $pdo->query("SELECT * FROM Users");
    $formerUsers = $formerUserStmt->fetchAll(PDO::FETCH_ASSOC);

    $characterFormerUser = null;
    foreach ($formerUsers as $formerUser) {
        if ($formerUser['id'] === $character['former_user_id']) {
            $characterFormerUser = $formerUser;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($character['name']); ?> - Devilfruit Details</title>
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
        <h2>Devilfruit Information</h2>
        <table class="table table-striped">
          <tbody>
            <tr>
              <th>Name</th>
              <td><?php echo htmlspecialchars($character['name']); ?></td>
            </tr>
            <tr>
              <th>Japanese Name</th>
                <td><?php echo htmlspecialchars($character['name_japanese']); ?></td>
            </tr>
            <tr>
              <th>Type</th>
              <td><?php echo htmlspecialchars($character['type']); ?></td>
            </tr>
            <tr>
              <th>User</th>
                <td><?php echo htmlspecialchars($character['user_id']); ?></td>
            </tr>
            <tr>
              <th>Former User</th>
              <td><?php echo htmlspecialchars($character['former_user_id']); ?></td>
            </tr>
            <tr>
                <th>Debut Anime</th>
                <td><?php echo htmlspecialchars($character['debut_anime']); ?></td>
            </tr>
            <tr>
                <th>Debut Manga</th>
                <td><?php echo htmlspecialchars($character['debut_manga']); ?></td>
            </tr>
            </tbody>
        <div class="col-lg-4">
        <h2>Description</h2>
        <p><?php echo nl2br(htmlspecialchars($character['devilfruit_description'])); ?></p>
      </div>
    </div>

    <div class="mt-4">
      <a href="devilfruits.php" class="btn btn-secondary">Back to Devilfruits</a>
    </div>
  </div>