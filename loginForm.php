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
            echo "Password: <input type='password' name='password' value='' placeholder='password'><br>";
            echo "<input type='submit' name='submit'>";
        echo "</form>";

        
        if ($_POST != null) {
            # Conexión a la bdd
            $conn = mysqli_connect('localhost','jose','jose123');
            mysqli_select_db($conn, 'usuarios');

            if(isset($_REQUEST['submit']))

            $user = $_POST['user'];
            $password = $_POST['password'];

            $consulta = "SELECT * FROM usuarios WHERE username='".$user."' AND password=SHA2('".$password."',512);";
            echo "$consulta<br>";
            
            $resultat = mysqli_query($conn, $consulta);
            if (!$resultat) {
                $message  = 'Consulta invàlida: ' . mysqli_error($conn) . "\n";
                $message .= 'Consulta realitzada: ' . $consulta;
                die($message);
            }

            while( $registre = mysqli_fetch_assoc($resultat) ) {
                echo "<p class='azul'> Hello ".$registre['username']."</p>";
            }
        }
    ?>
    </body>
</html>