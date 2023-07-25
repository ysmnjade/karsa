<?php 
   if (isset ($_POST['email']) && $_POST['email'] != '') {

    if (filter_var ($_POST ['email'], FILTER_VALIDATE_EMAIL) ) {
      $name = $_POST['name'];
      $position = $_POST['position'];
      $experience = $_POST['experience'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];

      $conn = new mysqli('localhost','root','','job');
      if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
      } else {
        $stmt = $conn->prepare ("insert into job (name, position, experience, email, phone)
            values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss",$name, $position, $experience, $email, $phone);
        $stmt->execute();
        echo "<script> alert ('Thank you! Our HR Team will contact you soon.') </script>";
        $stmt->close();
        $conn->close();
      }
    }
   }
   ?>
   

