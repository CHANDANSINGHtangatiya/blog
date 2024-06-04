<?php

require_once("php/connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<?php

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($result);

    if($total>0){

        session_start();
        $row=mysqli_fetch_array($result);

        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email'];
        $_SESSION['user_type']=$row['user_type'];
        $_SESSION['is-login']="true";
        $_SESSION['user_id']=$row['id'];

        header("Location:index.php");
        exit();


    }

}


?>

<main class="h-screen w-full ">

<div class=" bg-blue-300 p-12 rounded-lg flex items-center justify-center absolute top-[30%] left-[35%]">

<form action="login.php" method="post" class="text-xl">
   
    <div class="mb-3">
        <label for="email">Email</label>
        <input class="px-6" type="text" name="email" id="">
    </div>
    
    <div class="mb-3">
        <label for="password">password</label>
        <input class="px-3" type="password" name="password" id="">
    </div>
    <div class="mb-3 mt-6">
        <input class="bg-green-500 px-4 py-1 rounded-lg text-white " type="submit" name="submit" id="submit" value="login ">
    </div>
</form>

<div class="absolute bottom-3 left-9">
Create an account.<a class=" text-green-500 border-b-2" href="register.php"><b>Register</b></a>

</div>
</div>
</main>
    
</body>
</html>