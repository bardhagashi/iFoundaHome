<?php
    require_once("db_config.php");

    if(isset($_POST['Email'])){

      // Create connection
      $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

      // Check connection
      if(!$conn){
          die("Connection failed: " . mysqli_connect_error());
      }

      $Email = trim($_POST['Email']);

      // sql to insert values
      $sql = "INSERT INTO subscribers (email) VALUES ('$Email')";
      if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      mysqli_close($conn);
    }
?>