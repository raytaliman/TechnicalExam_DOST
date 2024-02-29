<?php
require '../server.php';

$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$fname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
$mname = filter_var(trim($_POST['middlename']), FILTER_SANITIZE_STRING);
$lname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
$bdate = filter_var(trim($_POST['birthday']), FILTER_SANITIZE_STRING);
$bdate = filter_var(trim($_POST['department']), FILTER_SANITIZE_STRING);
$cnumber = filter_var(trim($_POST['contactnumber']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$gender= filter_var(trim($_POST['gender']), FILTER_SANITIZE_STRING);
$brgy= filter_var(trim($_POST['brgy']), FILTER_SANITIZE_STRING);
$city= filter_var(trim($_POST['city']), FILTER_SANITIZE_STRING);
$province= filter_var(trim($_POST['province']), FILTER_SANITIZE_STRING);
$sss = filter_var(trim($_POST['sss']), FILTER_SANITIZE_STRING);
$tin = filter_var(trim($_POST['tin']), FILTER_SANITIZE_STRING);
$philhealth = filter_var(trim($_POST['philhealth']), FILTER_SANITIZE_STRING);
$userrole = filter_var(trim($_POST['role']), FILTER_SANITIZE_STRING);
$dept = filter_var(trim($_POST['department']), FILTER_SANITIZE_STRING);

$query = "SELECT * FROM roles where RoleType = '" . $userrole . "'";
$result =$conn->query($query);
$data = mysqli_fetch_assoc($result);
$roleId = $data['Id'];

$query = "SELECT * FROM department where DepartmentName = '" . $dept . "'";
$result =$conn->query($query);
$data = mysqli_fetch_assoc($result);
$DeptId = $data['Id'];

$query = "INSERT INTO useraccounts(UserId, Password, Roles, Status)VALUES('$username', '$username', '$roleId','Active')";
$result =$conn->query($query);
    $last_id = $conn->insert_id;

    $query1 = "INSERT INTO userdetails(UserAccountsID, FirstName, MiddleName, LastName, Birthday, Gender, Barangay, City, Province, ContactNumber, Email,DepartmentID,SSS,TIN,Philhealth)
                                VALUES('$last_id','$fname','$mname','$lname','$bdate','$gender','$brgy','$city','$province','$cnumber','$email','$DeptId','$sss','$tin','$philhealth')";
    $result =$conn->query($query1);
  
    

