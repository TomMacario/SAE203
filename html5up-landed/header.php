<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
?>

<header id="header">
    <h1 id="logo">InfoBlog</h1>
    <nav id="nav">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li>
                <a href="#">Nos Articles</a>
                <ul>
                    <li><a href="no-sidebar.php">Ukraine</a></li>
                    <li><a href="right-sidebar.php">Stade de France</a></li>
                    <li><a href="left-sidebar.php">Anarque</a></li>
                </ul>
            </li>
            <?php
            if(isset($_SESSION["loggedin"])) {
                echo '<li><a href="deconnexion.php" class="button primary">Se Deconnecter</a></li>';
            } else {
                echo '<li><a href="login.php" class="button primary">Se Connecter</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>