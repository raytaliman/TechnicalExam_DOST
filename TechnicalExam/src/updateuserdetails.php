<?php
require '../server.php';


$id = filter_var(trim($_POST['iidd']), FILTER_SANITIZE_STRING);
$fname = filter_var(trim($_POST['ufname']), FILTER_SANITIZE_STRING);
$mname = filter_var(trim($_POST['umname']), FILTER_SANITIZE_STRING);
$lname = filter_var(trim($_POST['ulname']), FILTER_SANITIZE_STRING);
$bdate = filter_var(trim($_POST['ubirthday']), FILTER_SANITIZE_STRING);
$address = filter_var(trim($_POST['uaddress']), FILTER_SANITIZE_STRING);
$sss = filter_var(trim($_POST['usss']), FILTER_SANITIZE_STRING);
$tin = filter_var(trim($_POST['utin']), FILTER_SANITIZE_STRING);
$philhealth = filter_var(trim($_POST['uphilhealth']), FILTER_SANITIZE_STRING);
$userrole = filter_var(trim($_POST['urole']), FILTER_SANITIZE_STRING);
$gender= filter_var(trim($_POST['ugender']), FILTER_SANITIZE_STRING);
$status= filter_var(trim($_POST['ustatus']), FILTER_SANITIZE_STRING);


$query = "SELECT * FROM useraccounts WHERE UserId ='$id'";

$result =$conn->query($query);

if($result->num_rows >0){
    session_start();
    $userid = mysqli_fetch_assoc($result);
    $uid = $userid['ID'];

    $sql = "UPDATE userdetails SET Gender='$gender',FirstName='$fname',MiddleName='$fname' WHERE UserAccountsID ='$uid'";
    $sql1 = "UPDATE useraccounts SET roles='$userrole', Status ='$status' WHERE ID ='$uid'";
mysqli_query($conn, $sql);
mysqli_query($conn, $sql1);
}
?>

