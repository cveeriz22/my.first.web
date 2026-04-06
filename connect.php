<?php
      $name = $_POST['Name'];
      $email = $_POST['Email'];
      $message = $_POST['Message'];
        
      //Database connection
        $conn = new mysqli('localhost','root','','Pesan');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into pesan(Name, Email, Message) values(?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $message);
            $stmt->execute();
            echo "Message Sent Successfully...";
            $stmt->close();
            $conn->close();
        }
?>