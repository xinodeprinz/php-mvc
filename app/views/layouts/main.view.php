<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : "My Website" ?></title>
    <meta name="description" content="<?php echo isset($description) ? $description : "Page description" ?>">
    <link rel="stylesheet" href="/css/tailwind.css">
</head>

<body class="relative min-h-screen overflow-y-scroll">
    <!-- Sessions -->
    <div id="alerts" class="z-10">
        <?php if ($success = getFlash('success')): ?>
            <div class="fixed top-0 right-10 bg-green-600 text-white py-2 px-5 rounded"><?php echo $success ?></div>
        <?php endif ?>
        <?php if ($error = getFlash('error')): ?>
            <div class="fixed top-0 right-10 bg-red-600 text-white py-2 px-5 rounded"><?php echo $error ?></div>
        <?php endif ?>
    </div>
    <header class="bg-black py-5">
        <div class="w-5/6 mx-auto flex items-center justify-between">
            <a href="/" class="font-bold text-2xl text-white">
                <h1><span class="text-orange-500">PHP</span> MVC</h1>
            </a>
            <ul class="flex gap-10 font-semibold">
                <li><a class="hover:text-orange-500 text-white" href="/about">About</a></li>
                <li><a class="hover:text-orange-500 text-white" href="/contact">Contact</a></li>
                <li><a class="hover:text-orange-500 text-white" href="/login">Login</a></li>
            </ul>
        </div>
    </header>
    <main><?php echo $content ?></main>
    <footer class="bg-gray-100 text-center py-4 fixed bottom-0 w-full">
        <div class="w-5/6 mx-auto capitalize">
            <p><?php echo date('Y') ?> &copy; All rights reserved</p>
        </div>
    </footer>

    <script src="/js/main.js"></script>
</body>

</html>