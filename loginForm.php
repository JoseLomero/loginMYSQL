<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
    </head>
    <body>
    <?php
        echo "<h3>LOG IN</h3>";
        echo "<form action='' method='post'>";
            echo "User name: <input type='text' name='user' value='' placeholder='username'><br>";
            echo "Password: <input type='password' name='user' value='' placeholder='password'><br>";
            echo "<input type='submit' name='submit'>";
        echo "</form>";


        if ($_POST != null) {
            # Conexión a la bdd
            $conn = mysqli_connect('localhost','jose','jose123');
            mysqli_select_db($conn, 'usuarios');
            $consulta = "SELECT * FROM Usuarios;";
            $resultat = mysqli_query($conn, $consulta);
            if (!$resultat) {
                $message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
                $message .= 'Consulta realitzada: ' . $consulta;
                die($message);
            }
        }
    ?>
    </body>
</html>