<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact page</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>


<main>
   
<div class="bg-zinc-800 text-white p-6">

<?php  require_once("nav.php");  ?>

<div class="flex items-center justify-center flex-col mt-9">
    <h1 class="text-4xl font-bold">Welcome to contact page</h1>
   
</div>
</div>

<div class="p-9 flex gap-9">
    <div class="h-[50vh] w-[40vw] bg-red-100 ">
        <img class="w-full h-full object-cover" src="https://plus.unsplash.com/premium_photo-1716396589811-69274847ce9f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyNXx8fGVufDB8fHx8fA%3D%3D" alt="">
    </div>
    <div class="">
<form action="contact.php" method="post">
    <p class="mb-5">
       
        <input class="border-b-2 border-zinc-900 px-6 py-1" type="text" name="name" id="" placeholder="name">
    </p>
    <p class="mb-5">
        <input class="border-b-2 border-zinc-900 px-6 py-1" type="text" name="email" id="" placeholder="email">
    </p>
    <p class="mb-5">
        <input class="border-b-2 border-zinc-900 px-6 py-1" type="text" name="subject" id="" placeholder="subject">
    </p>

    <p class="mb-5">
        <textarea placeholder="Message" class="border-b-2 border-zinc-900 px-6 py-1" name="message" id=""></textarea>
    </p>
    <p>
        <input class="bg-blue-500 text-white text-sm px-4 py-1" type="submit" name="" id="">
    </p>
</form>
    </div>
</div>


    <div class="">
        <?php  require_once("footer.php") ?>
    </div>
</main>
    
</body>
</html>