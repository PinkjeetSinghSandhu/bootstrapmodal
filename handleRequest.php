<?php
  $requestingPage = $_GET['task'];

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  switch ($requestingPage):
    case "adminLogin":
      if ($_SERVER["REQUEST_METHOD"] == 'POST'){
        $username = test_input($_POST['username']);
        $password = test_input($_POST['password']);
        
        $servername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "send";

        // Create connection
        $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);

        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM admin";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_row();

        echo $row;

        mysqli_close($conn);
        
        
        
        // if(empty($username) || empty($password)){
        //   $response = ['status' => 0, 'message' =>$result->fetch_assoc()];
        //   $conn->close();
        // }elseif(!($mysqli)){
        //   $response = ['status' => 0, 'message' => "Invalid Username"];
        // }else{
        //   if (password_verify($password, $mysqli[0]['password'])){
        //     $response = ['status' => 1, 'message' => 'Successful'];
        //   }else{
        //     $response = ['status' => 0, 'message' => 'Invalid Login Details'];
        //   }
        // }
      }
      echo json_encode($response);
    break;

  endswitch;
?>
