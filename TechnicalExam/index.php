<?php
require 'assets/header.php';
?>

<body class="d-flex justify-content-md-center">
    <form class="loginform">
        <div class="mt-5">
            <div class="form-signin w-100 mt-5">
            <div class="card  p-5">
                <div class="mb-3">
                    <div class="card-body text-center">
                    <svg style="width:40%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3V245.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5V416c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V389.2C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112h32c24 0 46.2 7.5 64.4 20.3zM448 416V394.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176h32c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2V416c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3V261.7c-10 11.3-16 26.1-16 42.3zm144-42.3v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2V448c0 17.7-14.3 32-32 32H288c-17.7 0-32-14.3-32-32V405.2c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112h32c61.9 0 112 50.1 112 112z"/>
                    </svg>
                        <h3 class="card-title text-center">Personnel Management System</h3>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" placeholder="Username" name="username" class="form-control username" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-user"></i></span>
                        <input type="password" placeholder="Password" name="password" class="form-control password" required>
                    </div>
                </div>
                <a class="btn btn-primary loginbtn">Login</a>
                <h6 class="loginValidationMsg mt-1"></h6>
            </div>
        </div>
    </form>
    <div id="alerts"></div>
</div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
        
        $(".loginbtn").click(function(){

            $.ajax({
                url: 'src/login.php',
                type: 'POST',
                datatype: 'JSON',
                data: $('.loginform').serialize(),
                success:function(response){
                    
                    if(response === "account restricted"){
                        $(".loginValidationMsg").text("*Account is disabled.Please contact administrator.")
                        $(".loginValidationMsg").addClass("text-danger")
                        $(".loginValidationMsg").removeClass("text-success")
                    }else if(response === "Active"){
                        $(".loginValidationMsg").text("*Login credentials is valid! Please wait...")
                        $(".loginValidationMsg").addClass("text-success")
                        $(".loginValidationMsg").removeClass("text-danger")
                        window.location.href ='src/dashboard.php'
                    }
                    
                },
                error:function(xhr, status, error){
                    $(".loginValidationMsg").text("*Login credentials is invalid! Please wait...")
                    $(".loginValidationMsg").addClass("text-danger")
                    $(".loginValidationMsg").removeClass("text-success")

                }
            })
        })
    });
</script>
</html>