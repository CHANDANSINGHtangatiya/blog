<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service page</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>


<main>
    <div class="bg-zinc-800 text-white">
    <?php  require_once("nav.php"); ?>

<div class="flex items-center justify-center flex-col mt-9">
    <h1 class="text-5xl font-bold">Welcome to about us page</h1>
    <i class="mt-9">Learn-more ></i>
</div>
    </div>

   <div class="p-24 flex items-center gap-9">
    <div class="h-[40vh] w-[30vw] bg-red-300">
        <img class="w-full h-full obeect-cover" src="https://plus.unsplash.com/premium_photo-1681492889546-4fc969075008?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw5N3x8fGVufDB8fHx8fA%3D%3D" alt="">
    </div>
    <div class="">
    <h4 class="text-orange-400">Who we are</h4>

<h1 class="text-3xl font-bold">We provide high quality <br> Artical & blogs</h1>
<p class="mt-5">Lorem ipsum dolor sit, amet consectetur br br br <br> adipisicing elit. Aut voluptatibus tempora amet.</p>
    </div>
   </div>


    <?php require_once("footer.php"); ?>
</main>



    
</body>
</html>