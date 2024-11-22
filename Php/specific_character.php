<?php

include 'header.php';
include '../Database/connection.php';

if (isset($_GET['id'])) {
  $characterStmt = $pdo->prepare("SELECT * FROM Characters WHERE id = :id");
  $characterStmt->execute(['id' => intval($_GET['id'])]);
  $character = $characterStmt->fetch();

  if (!$character) {
    header('Location: characters.php');
    exit;
  }

  $crewStmt = $pdo->query("SELECT * FROM Crews");
  $crews = $crewStmt->fetchAll(PDO::FETCH_ASSOC);

  $characterCrew = null;
  foreach ($crews as $crew) {
    if ($crew['id'] === $character['crew_id']) {
      $characterCrew = $crew;
      break;
    }
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
  <title><?php echo htmlspecialchars($character['name']); ?> - Character Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../Css/specific_character.css">
</head>
<body>
  <div class="container my-5">
    <div class="text-center mb-4">
      <h1><?php echo htmlspecialchars($character['name']); ?></h1>
      <p><em>"<?php echo htmlspecialchars($character['epithet']); ?>"</em></p>
      <img src="<?php echo htmlspecialchars($character['image_url']); ?>" alt="<?php echo htmlspecialchars($character['name']); ?>" class="img-fluid rounded" style="max-width: 300px;">
    </div>

    <div class="row">
      <div class="col-lg-8">
        <h2>Character Information</h2>
        <table class="table table-striped">
          <tbody>
            <tr>
              <th>Alias</th>
              <td><?php echo htmlspecialchars($character['alias']); ?></td>
            </tr>
            <tr>
              <th>Race</th>
              <td><?php echo htmlspecialchars($character['race']); ?></td>
            </tr>
            <tr>
              <th>Status</th>
              <td><?php echo htmlspecialchars($character['status']); ?></td>
            </tr>
            <tr>
              <th>Origin</th>
              <td><?php echo htmlspecialchars($character['origin']); ?></td>
            </tr>
            <tr>
              <th>Age</th>
              <td><?php echo htmlspecialchars($character['age']); ?> (Pre-Timeskip), <?php echo htmlspecialchars($character['age_post_timeskip']); ?> (Post-Timeskip)</td>
            </tr>
            <tr>
              <th>Occupation</th>
              <td><?php echo htmlspecialchars($character['occupation']); ?></td>
            </tr>
            <tr>
              <th>Is Pirate?</th>
              <td><?php echo $character['is_pirate'] ? 'Yes' : 'No'; ?></td>
            </tr>
            <tr>
              <th>Is Marine?</th>
              <td><?php echo $character['is_marine'] ? 'Yes' : 'No'; ?></td>
            </tr>
            <tr>
                <th>Crew</th>
                <td class="d-flex justify-content-between align-items-center">
                    <?php 
                    if ($characterCrew) {
                        echo htmlspecialchars($characterCrew['name']);
                    } else {
                        echo 'None';
                    }
                    ?>
                    <?php if ($characterCrew): ?>
                    <a href="../specific_crew.php?id=<?php echo $characterCrew['id']; ?>" class="btn btn-secondary ms-3">See crew</a>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
              <th>Bounty</th>
              <td><?php echo number_format($character['bounty']); ?> Berries</td>
            </tr>
            <tr>
              <th>Devil Fruit</th>
              <td><?php echo htmlspecialchars($character['devil_fruit'] ?: 'None'); ?></td>
            </tr>
            <tr>
              <th>Haki Abilities</th>
              <td>
                Armament: <?php echo $character['armement_haki'] ? 'Yes' : 'No'; ?><br>
                Observation: <?php echo $character['observation_haki'] ? 'Yes' : 'No'; ?><br>
                Conqueror's: <?php echo $character['conqueror_haki'] ? 'Yes' : 'No'; ?>
              </td>
            </tr>
            <tr>
              <th>Debut</th>
              <td>Anime: <?php echo htmlspecialchars($character['debut_anime']); ?><br>Manga: <?php echo htmlspecialchars($character['debut_manga']); ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-lg-4">
        <h2>Description</h2>
        <p><?php echo nl2br(htmlspecialchars($character['character_description'])); ?></p>
      </div>
    </div>

    <div class="mt-4">
      <a href="characters.php" class="btn btn-secondary">Back to Characters</a>
    </div>
  </div>
</body>
</html>
