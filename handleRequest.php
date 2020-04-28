<?php
  $requestingPage = $_GET['task'];

  // For securit measures
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data); // This removes any special character if user provides one.
    return $data;
  }

  switch ($requestingPage):
    case "adminLogin":
      if ($_SERVER["REQUEST_METHOD"] == 'POST'){
        $loginName = test_input($_POST['username']);
        $loginPassword = test_input($_POST['password']);
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "send";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }else{
          // If connection is okay
          $sql = "SELECT * FROM admin"; //Admin a table in the database
          $result = $conn->query($sql);

          if(empty($loginName)){ // If user didn't provide any name
            $response = ['status' => 0, 'message' =>"Sorry, username is required."];
          }elseif(empty($loginPassword)){ // If user didn't provide a password
            $response = ['status' => 0, 'message' =>"Sorry, password is required."];
          }elseif($loginName != $result->fetch_row()[1]){ // If user's name isn't the same with the one in the database
            $response = ['status' => 0, 'message' =>"Invalid login detail."];
          }elseif($loginPassword != $result->fetch_row()[2]){ // If user's password isn't the same with the one in the database
            $response = ['status' => 0, 'message' =>"Invalid login detail."];
          }elseif($loginName != $result->fetch_row()[1] && $loginPassword != $result->fetch_row()[2]){ //If everything is okay.
            $response = ['status' => 0, 'message' =>"You successfully logged in."];
          }

        }
      }
      echo json_encode($response); // This gets all responses.
    break;

  endswitch;
?>
