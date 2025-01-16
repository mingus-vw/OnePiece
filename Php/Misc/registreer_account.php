<?php
include('../../Database/connection.php');

$newEmail = $_POST['new-email'];
$newPassword = $_POST['new-password'];

if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
    echo "Ongeldig e-mailadres. Voer een geldig e-mailadres in.";
    exit(); 
}

try {
    $checkQuery = "SELECT * FROM Accounts WHERE email = :email";
    $checkStmt = $pdo->prepare($checkQuery);
    $checkStmt->bindParam(':email', $newEmail);
    $checkStmt->execute();

    if ($checkStmt->rowCount() > 0) {
        echo "Deze email is al in gebruik.";
    } else {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $insertQuery = "INSERT INTO Accounts (email, password) VALUES (:email, :password)";
        $insertStmt = $pdo->prepare($insertQuery);
        $insertStmt->bindParam(':email', $newEmail);
        $insertStmt->bindParam(':password', $hashedPassword);
        $insertStmt->execute();

        header('Location: ../main.php');
        exit();
    }
} catch (PDOException $e) {
    echo "Er is een fout opgetreden: " . $e->getMessage();
}
?>
