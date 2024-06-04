<?php

require_once("php/connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<main class='min-h-screen w-full '>
    <!-- nav part1 -->
<div class="bg-zinc-800 text-white">

<?php  require_once("nav.php");  ?>

<div class="flex items-center justify-center flex-col mt-9">
    <h1 class="text-5xl font-bold">Welcome to Blog page</h1>
    <p class="text-sm mt-7 pb-12">Lorem ipsum icing elit. Ullam labore reprehenderit inventore, <br>ducimus eaque ab m magni qui sunt deleniti similique!  Asperiores  ?</p>
    <i>Learn-more ></i>
</div>
</div>


    <!-- nav part2 -->


    <div class="nav-part2 gap-[20vw] px-9 py-4 border-b-2 border-zinc-500 flex  ">

        <div class="">
        <a class="hover:text-blue-900 hover:font-bold hover:border-b-2 hover:border-green-700" href="index.php">All</a>
        </div>
        <div class="">
        <a class="hover:text-blue-900 hover:font-bold hover:border-b-2 hover:border-green-700" href="startup.php">Startups</a>
        </div>
        <div class="">
        <a class="hover:text-blue-900 hover:font-bold hover:border-b-2 hover:border-green-700" href="security.php">Security</a>
        </div>
       <div class="">
       <a  class="hover:text-blue-900 hover:font-bold hover:border-b-2 hover:border-green-700" href="ai.php">AI</a>
       </div>
        <div class="">
        <a class="hover:text-blue-900 hover:font-bold hover:border-b-2 hover:border-green-700" href="tech.php">Tech</a>
        </div>
 
</div>

<!-- main part  -->

<!-- left part -->


<div class="min-h-screen w-full flex">
<div class="left h-full w-[75%] grid grid-cols-3 ">
    <!-- ......... -->

    <?php  
    $select="Select * from blogs";
    $data=mysqli_query($conn,$select);
    while ($row=mysqli_fetch_array($data))
    {?>

<div class="p-6">
    <div class="h-[54vh] w-[22vw] bg-zinc-200 p-3 ">
        <div class="bg-red-300 w-full h-[50%]">
            <img class="h-full w-full object-cover" src="blogImage/<?= $row['image'] ?>" alt="">
        </div>
        <div class="font-bold">
        <h3><?= $row['heading'] ?></h3>
    </div>
    <div class="">
        <h2><?= $row['author'] ?></h2>
    </div>
    <div class="">
        <p>Published:- <?= $row['Rdate'] ?></p>
    </div>
    </div>
   
</div>
<?php } ?>
<!-- ............ -->







</div>

<!-- right part -->
<div class="right min-h-full w-[25%] border-l-2 border-zinc-500">
    <!-- letest blog -->
    <div class="p-9">
        <h1 class="text-xl font-bold">Latest Blogs</h1>

        <?php
        $select="Select * from blogs";
        $data=mysqli_query($conn,$select);
        while ($row=mysqli_fetch_array($data))
        {?>

        <div class="mt-4 mb-4">
            <p><?= $row['popular'] ?></p>
            <i class="text-green-400">read more></i>
        </div>

        <?php }?>


      
        
    </div>
<!-- popular blog -->
    <div class="p-9">
        <h1 class="text-xl font-bold">popular Blogs</h1>
        

       <?php 
       $select="Select * from blogs";
       $data=mysqli_query($conn,$select);
       while ($row=mysqli_fetch_array($data))
        { ?>


        <div class="mt-4 mb-4">
            <p><?= $row['latest'] ?></p>
            <i class="text-green-400">read more></i>
        </div>

<?php  } ?>
        
    </div>

</div>
<!-- right part end -->


</div>



<?php  require_once("footer.php");  ?>
</main>

</body>
</html>