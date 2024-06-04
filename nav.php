<?php

session_start();

?>
<nav class="flex items-center justify-between py-6 px-4 text-xl sticky top-0 bg-zinc-800 z-[999]">
    <div class="">
        <h2><span class="text-orange-600 font-bold">Daily</span> Blog</h2>
    </div>
    <div class="gap-8 flex">
        <a href="index.php">Home</a>
        <a href="service.php">Service</a>
        <a href="about.php">About</a>
        <a href="blog.php">Blogs</a>
        <a href="contact.php">Contact</a>
    </div>
    <?php if(isset($_SESSION['is-login'])) { ?>
        <div class="">
        <a class="bg-orange-600 px-4 py-1 rounded-sm text-white" href="logout.php">Logout</a>

    </div>

        <?php } else{?>
            <div class="">
        <a class="bg-pink-600 px-4 py-1 rounded-sm text-white" href="login.php">Login</a>

    </div>

            <?php } ?>
</nav>