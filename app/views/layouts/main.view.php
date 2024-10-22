<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : "My Website" ?></title>
    <meta name="description" content="<?php echo isset($description) ? $description : "Page description" ?>">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <!-- Sessions -->
    <div id="alerts">
        <?php if ($success = getFlash('success')): ?>
            <div class="alert success"><?php echo $success ?></div>
        <?php endif ?>
        <?php if ($error = getFlash('error')): ?>
            <div class="alert error"><?php echo $error ?></div>
        <?php endif ?>
    </div>
    <header class="header">
        <div class="container">
            <a href="/" class="logo">
                <h1>PHP MVC</h1>
            </a>
            <ul>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
    </header>
    <main><?php echo $content ?></main>
    <footer class="footer">
        <div class="container">
            <p>2024 &copy; All rights reserved</p>
        </div>
    </footer>

    <script src="/js/main.js"></script>
</body>

</html>