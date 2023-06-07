<?php

  $dbHost = "192.168.1.103";
  $dbUsername = "root";
  $dbPassword = "root";
  $dbName = "user";
  
  $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
  
  if($conexao->connect_errno) 
  {
    echo "erro";
  }
  
  else 
  {
    echo "conexao efetuada";
  }
  
?>
