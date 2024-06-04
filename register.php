<?php

require_once("php/connect.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register.php</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>


<main class="h-screen w-full ">


<div class=" bg-zinc-300 p-10 rounded-lg flex items-center justify-center absolute top-[30%] left-[35%] flex-col">

<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];

    $select="Select * from users where email='$email'";
    $row=mysqli_query($conn,$select);
    $result=mysqli_num_rows($row);

    if($result==0){
        $sql="INSERT INTO users (name, email,number, password) VALUES ('$name', '$email', '$number', '$password')";
        mysqli_query($conn,$sql);

    }
    else{
   echo"Please use another email address.";
    }


   
}

?>

<form action="register.php" method="post" class="text-xl mt-5">
    <div class="mb-3">
        <label for="name">Name</label>
        <input class="px-5" type="text" name="name" id="">
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input class="px-6" type="text" name="email" id="">
    </div>
    <div class="mb-3">
        <label for="number">Phone no.</label>
        <input class="px-2" type="number" name="number" id="">
    </div>
    <div class="mb-3">
        <label for="password">password</label>
        <input class="px-3" type="password" name="password" id="">
    </div>
    <div class="mb-3 mt-6">
        <input class="bg-blue-500 px-4 py-1 rounded-lg text-white " type="submit" name="submit" id="submit" value="Register ">
    </div>
</form>


<div class="absolute bottom-3 left-9">Already have an account.<a class=" text-green-600 border-b-2" href="login.php"><b>login</b></a>

</div>



</div>

</main>
    
</body>
</html>