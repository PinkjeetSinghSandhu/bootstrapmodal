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

        require_once 'fetch.php';
        $checkIfAdminIsRegistered = $fetch->accessAdmin($username);

        if(empty($username) || empty($password)){
        $response = ['status' => 0, 'message' => "You forgot to type in the required values !"];
        }elseif(!($checkIfAdminIsRegistered)){
          $response = ['status' => 0, 'message' => "Invalid Username"];
        }else{
          if (password_verify($password, $checkIfAdminIsRegistered[0]['password'])){
            $response = ['status' => 1, 'message' => 'Successful'];
          }else{
            $response = ['status' => 0, 'message' => 'Invalid Login Details'];
          }
        }
      }
      echo json_encode($response);
    break;

  endswitch;
?>
