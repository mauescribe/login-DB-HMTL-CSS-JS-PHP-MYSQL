<?php
$conex=mysqli_connect('localhost:3307','root','123','arboles');
if ($conex){
    echo 'conectado';
}else {
    echo 'no conectado';
}
?>