<?php
include('../Database/connection.php');
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

try {
    $query = "SELECT * FROM Accounts WHERE email = :email";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':email', $email);
    $statement->execute();

    if ($statement->rowCount() > 0) {
        $account = $statement->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $account['password'])) {
            $_SESSION['email'] = $email;
            header('Location: index.php');
            exit();
        } else {
            echo "Ongeldig wachtwoord.";
        }
    } else {
        echo "Dit is geen bestaand account.";
    }
} catch (PDOException $e) {
    echo "Er is een fout opgetreden: " . $e->getMessage();
}
?>
