<?php

$servername = '127.0.0.1';




try{
  $db_connection = new PDO('mysql:host=localhost;dbname=auth_system', 'todo','todo');
  // $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo " <h1  style='color:green;'>Connected    sucessfully</h1>";          
} catch (PDOException $e) {
  echo "Connection Failed:" . $e->getMessage();
}                
                                                                        
?>