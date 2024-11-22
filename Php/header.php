<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['email']);
}

function getEmail() {
    return $_SESSION['email'];
}
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../Css/header.css">
<nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar-base">
    <a href="index.php">
    <img src="../Images/One_Piece_Logo-min.png" alt="Logo" id="navbar-logo">
    </a>
    <form class="form-inline my-2 my-lg-0" id="search-bar">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn my-2 my-sm-0" type="submit">Search</button>
        </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active" id="navbar-text">
                <a class="nav-link" href="characters.php">Characters</a>
            </li>
            <li class="nav-item active" id="navbar-text">
                <a class="nav-link" href="marines.php">Marines</a>
            </li>
            <li class="nav-item active" id="navbar-text">
                <a class="nav-link" href="crews.php">Crews</a>
            </li>
            <li class="nav-item active" id="navbar-text">
                <a class="nav-link" href="devilfruits.php">Devil fruits</a>
            </li>
        </ul>
    </div>

    <div class="sign-in-button">
        <?php if (isLoggedIn()): ?>
            <div class="user-info">
                <span>Welcome, <?php echo getEmail(); ?></span>
                <div class="dropdown">
                    <button class="dropbtn"><?php echo getEmail(); ?></button>
                    <div class="dropdown-content">
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="signinbutton" id="open-login">Sign In -></div>
        <?php endif; ?>
    </div>

    <div class="overlay" id="login-overlay">
        <div class="login-popup">
            <span class="close-btn" id="close-login-popup">X</span>
            <div class="sign-in-logo">
                <img src="../Images/MV5BMTNjNGU4NTUtYmVjMy00YjRiLTkxMWUtNzZkMDNiYjZhNmViXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="Logo">
            </div>
            <div class="login-content">
                <h2>Login</h2>
                <form action="login_account.php" method="post">
                    <div class="sign-in-inputfield">
                        <input type="text" name="email" placeholder="email">
                    </div>
                    <div class="sign-in-inputfield">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Log In" class="login-button">
                    <div class="pt-2">
                    <a href="#" id="open-register">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="overlay" id="register-overlay">
        <div class="login-popup">
            <span class="close-btn" id="close-register-popup">X</span>
            <div class="register-in-logo">
                <img src="../Images/Dragon_at_Age_33.webp" alt="Logo">
            </div>
            <div class="login-content">
                <h2>Create an account</h2>
                <form action="registreer_account.php" method="post">
                    <div class="sign-in-inputfield">
                        <input type="text" name="new-email" placeholder="email">
                    </div>
                    <div class="sign-in-inputfield">
                        <input type="password" name="new-password" placeholder="Password">
                    </div>
                    <input type="submit" value="Sign up" class="login-button">
                </form>
            </div>
        </div>
    </div>
    <script src="../Js/login.js"></script>
</nav>
