<?php
require '../server.php';


$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);



$query = "SELECT * FROM useraccounts  LEFT JOIN roles ON useraccounts.Roles = roles.Id WHERE UserId ='" . $username ."' && " . "Password ='" . $password . "'";

$result =$conn->query($query);

if($result->num_rows >0){
    session_start();
    $userdetails = mysqli_fetch_assoc($result);
    $_SESSION['UserId'] = $userdetails['ID'];
    $_SESSION['Role'] = $userdetails['RoleType'];
    
    if($userdetails['Status'] == 'Disabled'){
        echo "account restricted";

    }else{
        echo "Active";
    }
    
    
}
else{
    http_response_code(401);
    echo json_encode(array(
                    "message" => "*User not Found!"
                    ));
}







?>
