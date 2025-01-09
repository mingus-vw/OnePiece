<?php
include '../../Database/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    try {
        $stmt = $pdo->prepare("DELETE FROM Characters WHERE id = :id");
        $stmt->execute(['id' => $id]);

        header('Location: characters.php');
        exit;
    } catch (PDOException $e) {
        echo "Error deleting Character: " . $e->getMessage();
    }
} else {
    header('Location: characters.php');
    exit;
}
?>
