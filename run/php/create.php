<?php
session_start();
include_once 'conexao.php';

$name= $_POST['name'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$message = $_POST['message'];

   $sqlinsert = "INSERT INTO contato(name, email, phone_no, message) VALUES ('$name', '$email', '$phone_no', '$message')";

   mysqli_query($link, $sqlinsert) or die("Não foi possivel inserir no banco de dados");

   echo "<script> alert('Informações enviadas para o Banco de Dados!!') </script>
        <meta http-equiv='refresh' content=0.1;url='./form-process.php'>";

?> 

