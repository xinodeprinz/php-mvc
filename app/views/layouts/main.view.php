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
    <div id="alerts">
        <?php if ($success = getFlash('success')): ?>
            <div class="alert success"><?php echo $success ?></div>
        <?php endif ?>
        <?php if ($error = getFlash('error')): ?>
            <div class="alert error"><?php echo $error ?></div>
        <?php endif ?>
    </div>
    <header class="bg-black text-white py-5">
        <div class="w-5/6 mx-auto flex items-center justify-between">
            <a href="/" class="font-bold text-2xl">
                <h1><span class="text-orange-500">PHP</span> MVC</h1>
            </a>
            <ul class="flex gap-10 font-semibold">
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/login">Login</a></li>
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