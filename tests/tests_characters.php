<?php
include_once(__DIR__ . '/../Database/connection.php');

function output($label, $success) {
    echo $label . ": " . ($success ? "✅ Gelukt" : "❌ Mislukt") . "\n";
}

// Test 1: Alle personages ophalen
$query = "SELECT * FROM Characters";
$stmt = $pdo->prepare($query);
$stmt->execute();
$allCharacters = $stmt->fetchAll();
output("TEST 1 - Alle personages ophalen", count($allCharacters) > 0);

// Test 2: Piraten ophalen
$query = "SELECT * FROM Characters WHERE is_pirate = TRUE";
$stmt = $pdo->prepare($query);
$stmt->execute();
$pirates = $stmt->fetchAll();
$allPiratesCorrect = true;
foreach ($pirates as $p) {
    if (!$p['is_pirate']) {
        $allPiratesCorrect = false;
        break;
    }
}
output("TEST 2 - Alleen piraten ophalen", $allPiratesCorrect);

// Test 3: Marines ophalen
$query = "SELECT * FROM Characters WHERE is_marine = TRUE";
$stmt = $pdo->prepare($query);
$stmt->execute();
$marines = $stmt->fetchAll();
$allMarinesCorrect = true;
foreach ($marines as $m) {
    if (!$m['is_marine']) {
        $allMarinesCorrect = false;
        break;
    }
}
output("TEST 3 - Alleen marines ophalen", $allMarinesCorrect);

// Test 4: Others (geen piraat, geen marine)
$query = "SELECT * FROM Characters WHERE is_pirate = FALSE AND is_marine = FALSE";
$stmt = $pdo->prepare($query);
$stmt->execute();
$others = $stmt->fetchAll();
$allOthersCorrect = true;
foreach ($others as $o) {
    if ($o['is_pirate'] || $o['is_marine']) {
        $allOthersCorrect = false;
        break;
    }
}
output("TEST 4 - Others ophalen", $allOthersCorrect);

// Test 5: Alfabetische sortering
$query = "SELECT * FROM Characters ORDER BY name ASC";
$stmt = $pdo->prepare($query);
$stmt->execute();
$alphabetical = $stmt->fetchAll();
$sorted = $alphabetical === array_values(array_sort($alphabetical, fn($a, $b) => strcmp($a['name'], $b['name'])));
output("TEST 5 - Alfabetische volgorde", $sorted);

// Test 6: Bounty sortering
$query = "SELECT * FROM Characters ORDER BY bounty DESC";
$stmt = $pdo->prepare($query);
$stmt->execute();
$bountyList = $stmt->fetchAll();
$bountySorted = true;
for ($i = 0; $i < count($bountyList) - 1; $i++) {
    if ($bountyList[$i]['bounty'] < $bountyList[$i + 1]['bounty']) {
        $bountySorted = false;
        break;
    }
}
output("TEST 6 - Bounty sortering van hoog naar laag", $bountySorted);

// --- Helpers ---
function array_sort($array, $callback) {
    usort($array, $callback);
    return $array;
}


// Hulp: tijdelijk personage aanmaken om mee te testen
function createTestCharacter($pdo) {
    $stmt = $pdo->prepare("INSERT INTO Characters (name, image_url, character_description, is_pirate, is_marine, bounty)
        VALUES ('Test Character', 'test.jpg', 'For delete test', 1, 0, 1000000)");
    $stmt->execute();
    return $pdo->lastInsertId();
}

// Hulp: check of character bestaat
function characterExists($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM Characters WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch() !== false;
}

// Test 1: Verwijder bestaand personage
$id = createTestCharacter($pdo);
$delete = $pdo->prepare("DELETE FROM Characters WHERE id = ?");
$delete->execute([$id]);
output("TEST 1 - Verwijder bestaand personage", !characterExists($pdo, $id));

// Test 2: Probeer te verwijderen met niet-bestaand ID
$fakeId = 999999;
$delete = $pdo->prepare("DELETE FROM Characters WHERE id = ?");
$result = $delete->execute([$fakeId]);
output("TEST 2 - Verwijderen met niet-bestaand ID", $result);

// Test 3: Probeer te verwijderen zonder ID (simulatie)
try {
    $stmt = $pdo->prepare("DELETE FROM Characters WHERE id = :id");
    $stmt->execute([]); // geen ID meegegeven
    output("TEST 3 - Geen ID meegegeven", false);
} catch (PDOException $e) {
    output("TEST 3 - Geen ID meegegeven", true);
}

// Test 4: Ongeldig ID (tekst in plaats van getal)
try {
    $invalidId = "abc";
    $stmt = $pdo->prepare("DELETE FROM Characters WHERE id = :id");
    $stmt->execute(['id' => $invalidId]);
    output("TEST 4 - Ongeldig ID (tekst)", true);
} catch (PDOException $e) {
    output("TEST 4 - Ongeldig ID (tekst)", false);
}