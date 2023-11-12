<?php

if(isset($_POST['enviar'])) {
    if(!empty($_POST['nom_']) && !empty($_POST['apelli_']) && !empty($_POST['corre_']) && 
    !empty($_POST['contra_']) && !empty($_POST['cel_']) {
        $nom_ = $_POST['nom_'];
        $apelli_ = $_POST['apelli_'];
        $corre_ = $_POST['corre_'];
        $contra_ = $_POST['contra_'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($corre_, $header);
        if ($mail) {
            echo "<h4> LISTO </h4>";
        }
    }
}

?>