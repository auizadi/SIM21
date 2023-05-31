
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type= "text/cs" href="login.css">
</head>
<body id= "bg_login">
   <div class="box-login"> 
    <h3>pilih pesanan</h3>
    <form>
        <input type="text" name="username" placeholder="username" class= "input_control">
        <input type="text" name="pass" placeholder="password" class= "input_control">
        <input type="submit" name="submit" placeholder="login" class = "btn">
    </form>
    <?php
        if(isset($_POST['submit'])){
            include 'db_php.php';
            
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            
            $cek = mysqli_query ($conn, "SELECT * FROM tb_admin WHERE username = '$user' AND password ='$pass' ");
            
        }?>
    
   </div> 

</body>
</html>

