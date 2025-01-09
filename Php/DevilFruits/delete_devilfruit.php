<?php
include '../../Database/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    try {
        $stmt = $pdo->prepare("DELETE FROM DevilFruits WHERE id = :id");
        $stmt->execute(['id' => $id]);

        header('Location: devilfruits.php');
        exit;
    } catch (PDOException $e) {
        echo "Error deleting Devil Fruit: " . $e->getMessage();
    }
} else {
    header('Location: devilfruits.php');
    exit;
}
?>
