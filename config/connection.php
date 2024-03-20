<?php
  try {

    $conn = new PDO("mysql:host=127.0.0.1;port=3307;dbname=agenda","root","");

    // Ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
    // erro na conexão
    $error = $e->getMessage();
    echo "Erro: $error";
  }