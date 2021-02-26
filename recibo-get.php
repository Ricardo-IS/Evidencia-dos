<?php
echo "Esta es la informacion que se introdujo en el formulario:".'<br>';

echo "Nombre: ".$_POST['nombre'].'<br><hr>';
echo 'Apellido paterno: '.$_POST['Ap'].'<br><hr>';
echo 'Apellido materno: '.$_POST['Am'].'<br><hr>';
echo 'Cd: '.$_POST['Codg'].'<br><hr>';
echo 'Edad: '.$_POST['edad'].'<br><hr>';
echo 'Telefono: '.$_POST['telefono'].'<br><hr>';
echo 'Grado y grupo: '.$_POST[grupo].'<br><hr>';
echo 'N.Matricula: '.$_POST[matricula].'<br><hr>';
echo 'Direccion: '.$_POST[Direccion]. '<br><hr>';

?>
