<?php
    include("conexion.php");
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    session_start();
    $_SESSION['email']=$email;

    $conexion = mysqli_connect("localhost", "root", "", "sistema");
    //query a la BD
    $consulta="SELECT*FROM usuarios WHERE email_user='$email' AND password_user='$pass'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if ($filas) {
        header("location:../inicio/index.php");
    }else{
        ?>
        <?php
        include('login.html')?>
        <h1 class="bad">DATOS ERRONEOS</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    ?>
