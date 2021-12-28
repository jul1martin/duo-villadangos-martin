<?php

if (isset($_POST['enviar']))
{
    if (!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['email']) && !empty($_POST['msg']))
    {
        $nombre= $_POST['nombre'];
        $asunto= $_POST['asunto'];
        $email= $_POST['email'];
        $msg= $_POST['msg'];
        $mailenviado = "julianmartiniscoff@gmail.com";
        // $header = "From: noreply@example.com"."\r\n";
        // $header.= "Reply-To: noreply@example.com"."\r\n";
        // $header.= "X-Mailer: PHP/".phpversion();
        // $mail= @mail($email,$asunto,$msg,$header);
        $msg= "Mensaje enviado por".$nombre.", \n Email del usuario: ".$email;
        $enviar= @mail($mailenviado,$asunto, $msg);

        if($enviar)
        {
        ?> <script>alert("Mail enviado exitosamente!");</script> <?php
        } else
        {
            ?> <script>alert("No se ha podido enviar el mensaje, reintente en otro momento.");</script> <?php
        }
    }
}


?>