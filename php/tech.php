<?php  
session_start();
require_once("admin.php");
require_once("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<main class="h-screen w-full bg-green-300 flex">

   <?php require_once("sidebaar.php") ?>

   <?php

if(isset($_POST['submit'])){
    $file=$_FILES['image'];
    $file_name=$file['name'];
    $tmp_name=$file['tmp_name'];
    $date=$_POST['date'];

    if(isset($_POST['heading'])){
        $heading=$_POST['heading'];

        
        if(isset($_POST['author'])){
            $author=$_POST['author'];
        



        if(isset($_POST['containt'])){
            $containt=$_POST['containt'];
        


        if(isset($_POST['popular'])){
            $popular=$_POST['popular'];
       

        if(isset($_POST['latest'])){
            $latest=$_POST['latest'];
            

         $query="INSERT INTO techs (image,heading,author,Rdate,containt,popular,latest) VALUES ('$file_name', '$heading', '$author', '$date','$containt', '$popular', '$latest')";

            mysqli_query($conn,$query);


            $path="../blogImage/$file_name";
            move_uploaded_file($tmp_name,$path);

        
        
    }
    }
    }
    }
}
}



?>
  




   <div class="main h-full w-[80%] bg-zinc-200 flex items-center justify-center">
    <form action="tech.php" method="post" class=" bg-zinc-400 p-9 rounded-lg" enctype="multipart/form-data" >
<h1 class="text-3xl font-bold mb-9 ml-[10vw] text-pink-900">tech Blogs</h1>

        <div class="mb-3 text-xl ">
            <label class="font-bold" for="image">Image</label>
            <input type="file" name="image" id="">
        </div>
        <div class="mb-3 text-xl">
            <label class="font-bold" for="heading">Heading</label>
            <input type="text" name="heading" id="">
        </div>
        <div class="mb-3 text-xl">
            <label class="font-bold" for="author">Author</label>
            <input type="text" name="author" id="">
        </div>
        <div class="mb-3 text-xl">
            <label class="font-bold" for="date">Date</label>
            <input type="date" name="date" id="">
        </div>
        <div class="mb-3 text-xl">
            <label class="font-bold" for="containt">Containt</label>
            <textarea name="containt" id=""></textarea>
        </div>
        <div class="mb-3 text-xl">
            <label class="font-bold" for="popular">Popular blog</label>
            <input type="text" name="popular" id="">
        </div>
        <div class="mb-3 text-xl">
            <label class="font-bold" for="latest">Latest blog</label>
            <input type="text" name="latest" id="">
        </div>
        <div class="mb-3 text-xl">
            <input class="text-sm text-white bg-red-600 px-5 py-1 rounded-sm" type="submit" name="submit" id="" value="submit">
        </div>
    </form>

    </div>
    
</main>
</body>
</html>