<?php
session_start();
include_once 'conexao.php';

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nome do Cliente Recebido ";
} else {
    $name = $_POST["name"];
}
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "E-mail do Cliente Recebido ";
} else {
    $email = $_POST["email"];
}

// MSG Guest
if (empty($_POST["phone_no"])) {
    $errorMSG .= "Número de Telefone Recebido ";
} else {
    $phone_no = $_POST["phone_no"];
}


// MSG Event

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Mensagem do Cliente Recebida ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "bhsoftwaressuporte@gmail.com";
$Subject = "Nova Mensagem recebida";

// prepare email body text
$Body = "";
$Body .= "name: ";
$Body .= '$name';
$Body .= "\n";
$Body .= "email: ";
$Body .= '$email';
$Body .= "\n";
$Body .= "phone_no: ";
$Body .= '$phone_no';
$Body .= "\n";
$Body .= "message: ";
$Body .= '$message';
$Body .= "\n";

 if ($_POST['submit']) {
        if (mail ($EmailTo, $Subject, $Body, $success)) {
            echo '<p>Your message has been sent!</p>';
        } else {
            echo '<p>Something went wrong, go back and try again!</p>';
        }
    }

 /*"From:, mail "*/
// ($EmailTo, $Subject, $Body, "From:" $email) = mail(, .$email);  redirect to success page  
if ($success && $errorMSG == ""){
   echo "Sucesso! Mensagem Recebida.";
}else{
    if($errorMSG == ""){
        echo "Mensagem não recebida, Houve algum erro.";
    } else {
        echo $errorMSG;
    }
}

/*echo "<script> alert('Informações enviadas para o E-mail!!') </script>
        <meta http-equiv='refresh' content=0;url='../index.html'>";*/

?>