<?php
include '../Database/connection.php';

// Check if the form was submitted via POST and an ID was provided
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    // Sanitize the ID
    $id = intval($_POST['id']);

    try {
        // Prepare the DELETE statement
        $stmt = $pdo->prepare("DELETE FROM DevilFruits WHERE id = :id");
        $stmt->execute(['id' => $id]);

        // Redirect back to the Devil Fruits listing page after deletion
        header('Location: devilfruits.php');
        exit;
    } catch (PDOException $e) {
        // Log the error and display a message (for debugging purposes only)
        echo "Error deleting Devil Fruit: " . $e->getMessage();
    }
} else {
    // If the request method is not POST or the ID is missing, redirect
    header('Location: devilfruits.php');
    exit;
}
?>
