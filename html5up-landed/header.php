<?php
session_start();
?>

<header id="header">
    <h1 id="logo">InfoBlog</h1>
    <nav id="nav">
        <ul>
            <?php
            if ($_SERVER['PHP_SELF'] != "/private/index.php") {
                echo '<li><a href="index.php">Accueil</a></li>';
            } else {
                echo '<li><a href="../index.php">Accueil</a></li>';
            }
            if (($_SERVER['PHP_SELF'] != "/private/index.php") && ($_SERVER['PHP_SELF'] != "/erreur.php")) {
                if(isset($_SESSION["loggedin"])) {
                echo '<li>
                    <a href="#">Nos Articles</a>
                    <ul>
                        <li><a href="no-sidebar.php">Ukraine</a></li>
                        <li><a href="right-sidebar.php">Stade de France</a></li>
                        <li><a href="left-sidebar.php">Anarque</a></li>
                    </ul>
                </li>';
                echo '<li><p>Bonjour ' . $_SESSION["username"] . ' !</p></li>';
                echo '<li><a href="deconnexion.php" class="button primary">Se Deconnecter</a></li>';
                } else {
                    if ($_SERVER['PHP_SELF'] != "/login.php" && $_SERVER['PHP_SELF'] != "/signup.php") {
                        echo '<li><a href="login.php" class="button primary">Se Connecter</a></li>';
                    }
                }
            }
            ?>
        </ul>
    </nav>
</header>