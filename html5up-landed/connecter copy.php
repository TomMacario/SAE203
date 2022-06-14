<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="assets/css/connecter.css" media="screen" type="text/css" />
</head>

<body>
    <div id="container">
        <!-- zone de connexion -->

        <form action="verification.php" method="POST">
            <h1>Connexion</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='LOGIN'>
            <?php
            require_once "config.php";
            $username = $password = $confirm_password = "";
            $username_err = $password_err = $confirm_password_err = "";

            // Processing form data when form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // Validate username
                if (empty(trim($_POST["username"]))) {
                    $username_err = "Veuillez entrer un nom d'utilisateur";
                } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
                    $username_err = "Les noms d'utilisateurs doivent uniquement contenir des lettres et/ou chiffres.";
                } else {
                    // Prepare a select statement
                    $sql = "SELECT id FROM users WHERE username = ?";

                    if ($stmt = mysqli_prepare($link, $sql)) {
                        // Bind variables to the prepared statement as parameters
                        mysqli_stmt_bind_param($stmt, "s", $param_username);

                        // Set parameters
                        $param_username = trim($_POST["username"]);

                        // Attempt to execute the prepared statement
                        if (mysqli_stmt_execute($stmt)) {
                            /* store result */
                            mysqli_stmt_store_result($stmt);

                            if (mysqli_stmt_num_rows($stmt) == 1) {
                                $username_err = "Ce nom d'utilisateur est déjà pris.";
                            } else {
                                $username = trim($_POST["username"]);
                            }
                        } else {
                            echo "Oups ! Quelque chose c'est mal passé.";
                        }

                        // Close statement
                        mysqli_stmt_close($stmt);
                    }
                }

                // Validate password
                if (empty(trim($_POST["password"]))) {
                    $password_err = "Please enter a password.";
                } elseif (strlen(trim($_POST["password"])) < 6) {
                    $password_err = "Password must have atleast 6 characters.";
                } else {
                    $password = trim($_POST["password"]);
                }

                // Validate confirm password
                if (empty(trim($_POST["confirm_password"]))) {
                    $confirm_password_err = "Please confirm password.";
                } else {
                    $confirm_password = trim($_POST["confirm_password"]);
                    if (empty($password_err) && ($password != $confirm_password)) {
                        $confirm_password_err = "Password did not match.";
                    }
                }

                // Check input errors before inserting in database
                if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

                    // Prepare an insert statement
                    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

                    if ($stmt = mysqli_prepare($link, $sql)) {
                        // Bind variables to the prepared statement as parameters
                        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

                        // Set parameters
                        $param_username = $username;
                        $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

                        // Attempt to execute the prepared statement
                        if (mysqli_stmt_execute($stmt)) {
                            // Redirect to login page
                            header("location: login.php");
                        } else {
                            echo "Oops! Something went wrong. Please try again later.";
                        }

                        // Close statement
                        mysqli_stmt_close($stmt);
                    }
                }

                // Close connection
                mysqli_close($link);
            }
            ?>
        </form>
    </div>
</body>

</html>