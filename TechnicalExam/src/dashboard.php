<?php
require '../assets/header.php';
require '../server.php';
session_start();

$query = "SELECT * FROM userdetails LEFT JOIN department on department.Id = userdetails.DepartmentID WHERE UserAccountsID ='" . $_SESSION['UserId'] . "'";
$result = $conn->query($query);
$userdetails = mysqli_fetch_assoc($result);

if(isset($_SESSION['UserId'])){
?>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Personnel Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="users.php">Users</a>
        </li>
      </ul>
    </div>
    <form class="d-flex">
      <button class="btn btn-light logoutbtn" type="submit">Log Out</button>
    </form>
  </div>
</nav>
<?php include 'userdetails.php';
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
 $(document).ready(function(){
   
        $(".logoutbtn").click(function(){

            $.ajax({
                url: 'logout.php',
                type: 'POST',
                success:function(response){
                   window.location.href ='../index.php'
                },
                error:function(xhr, status, error){
                    
                }
            })
        })
        
    });
</script>
<?php
}
else{
 header('location: ../index.php');
}?>