<?php
require '../server.php';

$id = filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);

$query = "SELECT * FROM userdetails 
          left JOIN useraccounts 
          on userdetails.UserAccountsID = useraccounts.id
          left join roles 
          on roles.Id =useraccounts.Roles 
          LEFT JOIN department 
          ON department.Id = userdetails.DepartmentID 
          where useraccounts.UserId = '" . $id . "'";

$result =$conn->query($query);

if($result->num_rows >0){
    session_start();
    $userdetails = mysqli_fetch_assoc($result);
    
    echo json_encode(array(
                            'Name'              => $userdetails['FirstName'] . " " .$userdetails['MiddleName'] . " " . $userdetails['LastName'],
                            'FirstName'         => $userdetails['FirstName'],
                            'MiddleName'        => $userdetails['MiddleName'],
                            'LastName'          => $userdetails['LastName'],
                            'Address'           => $userdetails['Barangay'] . ", " .$userdetails['City'] . ", " . $userdetails['Province'],
                            'Birthdate'         => $userdetails['Birthday'],
                            'Cellphone Number'  => $userdetails['ContactNumber'],
                            'Email'             => $userdetails['Email'],
                            'SSS'               => $userdetails['SSS'],
                            'TIN'               => $userdetails['TIN'],
                            'PhilHealth'        => $userdetails['Philhealth'],
                            'Roles'             => $userdetails['RoleType'],
                            'Gender'            => $userdetails['Gender'],
                            'Department'        => $userdetails['DepartmentName'],
                            'Status'            => $userdetails['Status'],
                            'id'                => $userdetails['UserId']
    ));
    

    
    
}
else{
    http_response_code(401);
    echo json_encode(array(
                    "message" => "*User not Found!"
                    ));
}







?>
