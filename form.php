<?php
if(isset($_POST['submit'])){
    $nombre = $_POST['first_name'];
    $subject = "Nuevo correo LLDM - test";
    $correo = $_POST['Email'];
    $num_contacto = $_POST['num_contacto'];
    $comentarios = $_POST['comentarios'];


    $mailTo = "edo.pstr@gmail.com";
    $headers = "From: ".$correo;
    $txt = "Test Email LLDM de ".$nombre.".\n\n".$comentarios;

    mail($mailTo,$subject,$comentarios,$headers);
    header("Location: index.php?mailsend");
}

<?