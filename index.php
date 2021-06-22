<?php

require './config.php';



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    
        
        <div class="form-group">

            <?php

            if(isset($_SESSION['access_token'])){ ?>
                
                <table><tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td><?php echo $_SESSION['user_data']['id']; ?></td>
                    <td><?php echo $_SESSION['user_data']['name']; ?></td>
                    <td><?php echo $_SESSION['user_data']['name']; ?></td>
                </tr>
                <tr>
                    <img src="<?php echo $_SESSION['user_data']['picture']['url']; ?>">
                </tr>
                </table>

                <a href="logout.php">Log OUT</a>

            <?php } else{ ?>
             
            
            
            <a href="<?php echo $login_url;?>">Login With Facebook</a>

        <?php } ?>
        </div>
               
    
    
</div>
</body>
</html>