<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="pageTitle">Facebook – log in or sign up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico">
    
    <style>
        ::selection{
            background:yellow;
            color:black;
        }
        body{
            font-family: 'Poppins', sans-serif;
            background-color:#8080801c;
            color:#000;
        }
        img{
            width: 300px;
            position: relative;
            top: 12px;
            left: -8px;
        }
        p{
            line-height: 1.5;
        }
        .mt{
            padding-top: 100px;
        }
        .mts{
            box-shadow: 0 0 34px 4px rgb(0 0 0 / 10%);
        }
        
    </style>
</head>
<body>
    
    <div class="container-fluid">
    <form action="" method="post">
        <div class="row justify-content-center mt">
            <div class="col-md-4 me-4">
                <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" style="width: 300px;" alt="">
                <p class="fs-4 ms-4 fw-normal">Facebook helps you connect and share with the people in your life.</p>
            </div>
            <div class="col-md-3 col-12 bg-white d-flex flex-column p-4 rounded mt-4 mts">
                <input type="text" name="username" id="" class="form-control mb-2" placeholder="Email address or phone number">
                <input type="password" name="password" id="" class="form-control mb-3" placeholder="Password">
                <button type="submit" class="btn btn-primary" name="log">Log in</button>
                <a href="#" class="text-center mt-3 text-decoration-none">Forgotten password?</a>
                <hr>
                <button class="btn btn-warning text-white" type="button">Create New Account</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4"></div>
            <div class="col-md-3 text-center mt-2 ms-4" style="font-size:15px;">
                <a href="#" class="text-dark text-decoration-none fw-bold">Create a Page</a> for a celebrity, brand or business.
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <?php if(isset($_POST['log']))
                    {
                        $username=$_POST['username'];
                        $password=$_POST['password'];

                            if(!empty($username) && !empty($password)){
                    ?>
                <h2 class="text-center fw-bold">Login Details</h2>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="row justify-content-center">
                                    <div class="col-md-1 text-center border fw-semibold">#</div>
                                    <div class="col-md-2 text-center border fw-semibold">Username</div>
                                    <div class="col-md-2 text-center border fw-semibold">Password</div>
                                </div>
                                <div class="row justify-content-center mb-4">
                                    <div class="col-md-1 text-center border"><?php echo "#";?></div>
                                    <div class="col-md-2 text-center border"><?php echo $username;?></div>
                                    <div class="col-md-2 text-center border"><?php echo $password;?></div>
                                </div>
                            </div>
                        </div>
                        <?php }
                            else{
                                echo "<script>alert('All Details fill !')</script>";
                            } 
                        }
                        
                    ?>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1><span style="color:red;">Note: </span>Facebook login page clone</h1>
        </div>
    </div>
    </div>
    
</body>
</html>