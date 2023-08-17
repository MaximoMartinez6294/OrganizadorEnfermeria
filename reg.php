<?php
include("conex.php");
//strlen: cantidad de caracteres
//isset= se apreto el boton
//trim : eliminar espacios
 
if (isset($_POST['register'])) {
   if (
       strlen($_POST['name']) >=1 &&
        strlen($_POST['estado']) >=1 &&
        strlen($_POST['direccion']) >=1 &&
        strlen($_POST['phone']) >=1 &&
        strlen($_POST['ved']) >=1 &&
        strlen($_POST['horas']) >=1 &&
        strlen($_POST['enfermero']) >=1 &&
        strlen($_POST['cuidadoras']) >=1 &&
        strlen($_POST['insumos']) >=1 &&
        strlen($_POST['observacion']) >=1

      ) {
            $name = trim($_POST['name']);
            $estado = trim($_POST['estado']);
            $direccion = trim($_POST['direccion']);
            $phone = trim($_POST['phone']);
            $ved = trim($_POST['ved']);
            $horas = trim($_POST['horas']);
            $enfermero = trim($_POST['enfermero']);
            $cuidadoras = trim($_POST['cuidadoras']);
            $insumos = trim($_POST['insumos']);
            $observacion = trim($_POST['observacion']);
            $consulta = "INSERT INTO `registro de pacientes`(`name`, `estado`, `direccion`, `phone`, `ved`, `horas`, `enfermero`, `cuidadoras`, `insumos`, `observacion`) VALUES ('$name','$estado','$direccion','$phone','$ved','$horas','$enfermero','$cuidadoras','$insumos','$observacion')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
            ?>
            <a  class="ok" href="#"  onClick="location.href='reg_pacientes.php'">¡Los datos se han registrado correctamente, click para guardar!</a>
            <?php 
            } else{
                ?>
                <h3 class="bad">Ocurrio un error!</h3>
                <?php
            } 
        }
    }


?>