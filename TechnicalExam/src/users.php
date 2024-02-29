<?php
require '../assets/header.php';
require '../server.php';

session_start();
if(isset($_SESSION['UserId'])){

    $query = "SELECT * FROM userdetails LEFT JOIN useraccounts ON userdetails.UserAccountsID = useraccounts.ID LEFT JOIN department ON department.Id = userdetails.DepartmentID LEFT JOIN roles ON roles.Id = useraccounts.Roles";
    $result = $conn->query($query);

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
                <a class="nav-link" aria-current="page" href="#">Dashboard</a>
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
    <div class="container mt-5 card p-5">
        <div class="row">
            <div class="col-10"><h3>User Information</h3></div>
            <div class="col-2"><button type="button"  class="btn  m-1 btn-primary addUserModalbtn">Add User</button></div>
        </div>
        
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th> 
      <th scope="col">Department</th> 
      <th scope="col">Status</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $counter = 1;
        while($userdetails = mysqli_fetch_array($result)){
            echo '<tr>' .
                    '<td>' . $counter++ . '</td>' .
                    '<td>' . $userdetails['UserId'] . '</td>' .
                    '<td>' . $userdetails['DepartmentName'] . '</td>'  .
                    '<td>' . $userdetails['Status'] . '</td>'  .
                    '<td>' . $userdetails['RoleType'] . '</td>'  .
                    '<td>' . 
                        '<button type="button" value="'. $userdetails['UserId'] .'" class="btn btn-sm m-1 btn-success userViewbtn">View</button>' . 
                    '</td>';
        }

?>
  </tbody>
</table>
    </div>
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

        $("#adduser").click(function(){

            $.ajax({
                url: 'adduser.php',
                type: 'POST',
                datatype: 'JSON',
                data: $('#adduserform').serialize(),
                success:function(response){
                
                },
                error:function(xhr, status, error){
                    
                }
            })
        })

        $('body').on('click', '#updateuserbtn1', function(){
            $('#viewUser').modal('hide')
            $.ajax({
                url: 'updateuserdetails.php',
                type: 'POST',
                datatype: 'JSON',
                data: $('#updateFormUser').serialize(),
                success:function(response){
                
                },
                error:function(xhr, status, error){
                    
                }
            })
            })


        $(".addUserModalbtn").click(function(){
            $('.adduserModal').modal('show')
        })

        $(".updateuserbtn").click(function(){
             var id = $(".userViewbtn").val()
             console.log(id)
             $('.updateData').append('<input name="iidd" type="text" class="form-control" Value="'+ id+ '" hidden>')
            $('.fname').html('<input name="ufname" type="text" class="form-control" Value="'+ data.FirstName+ '">')
            $('.forgender').html(data.Gender)
            $('.mname').html('<input name="umname "type="text" class="form-control" Value="'+ data.MiddleName+ '">')
            $('.lname').html('<input name="ulname" type="text" class="form-control" Value="'+ data.LastName+ '">')
            $('.bdate').html('<input name="ubirthday" type="text" class="form-control" Value="'+ data.Birthdate+ '">')
            $('.address').html('<input name="uaddress" type="text" class="form-control" Value="'+ data.Address+ '">')
            $('.sss').html('<input name="usss" type="text" class="form-control" Value="'+ data.SSS+ '">')
            $('.tin').html('<input name="utin" type="text" class="form-control" Value="'+ data.TIN+ '">')
            $('.philhealth').html('<input name="uphilhealth" type="text" class="form-control" Value="'+ data.PhilHealth+ '">')
            $('.updateData').append('<div class="row p-2">' +
                                    '<div class="col-5">User Role:</div>' +
                                     '<div class=col>'+
                                        '<select name="urole" class="form-select" aria-label="Default select example">' +
                                            '<option value="1">Admin</option>' +
                                            '<option value="2">Basic</option>' +
                                        '</select>' +
                                      '</div>' +
                                    '</div>')
            $('.updateData').append('<div class="row p-2">' +
                                    '<div class="col-5">User Status:</div>' +
                                     '<div class=col>'+
                                        '<select name="ustatus" class="form-select" aria-label="Default select example">' +
                                            '<option value="Active">Active</option>' +
                                            '<option value="Disabled">Disable</option>' +
                                        '</select>' +
                                      '</div>' +
                                    '</div>')
            $('.updateData').append('<div class="row p-2">' +
                                    '<div class="col-5">Gender:</div>' +
                                     '<div class=col>'+
                                        '<select name="ugender" class="form-select" aria-label="Default select example">' +
                                            '<option value="Male">Male</option>' +
                                            '<option value="Female">Female</option>' +
                                        '</select>' +
                                      '</div>' +
                                    '</div>')
            $('.updatepart').html('<button value="'+id+'" type="button" class="btn btn-warning" id="updateuserbtn1" name="uidd">Save Changes</button>')  
    });
        $(".userViewbtn").click(function(){
             var id = $(".userViewbtn").val()
        $.ajax({
            url: 'fetchuserdetails.php?',
            type: 'POST',
            datatype: 'JSON',
            data:{
                id : id
            },
            success:function(response){
              data =  JSON.parse(response)
              console.log(data.Department)

            $('#viewUser').modal('show')
            $('.forfullname').text(data.Name)
            $('.fordepartmentname').text(data.Department)
            $('.forgender').text(data.Gender)
            $('.fname').text(data.FirstName)
            $('.mname').text(data.MiddleName)
            $('.lname').text(data.LastName)
            $('.bdate').text(data.Birthdate)
            $('.address').text(data.Address)
            $('.sss').text(data.SSS)
            $('.tin').text(data.TIN)
            $('.philhealth').text(data.PhilHealth)
            $('.forrole').text(data.Roles)

            if(data.Status == "Active"){
                $('.status').addClass('bg-success')
            }
                else{
                    $('.status').addClass('bg-secondary')
                }
            
            $('.status').text(data.Status)
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
   }


include 'userviewmodal.php';
include 'addusermodal.php';
   ?>


