<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my website</title>
</head>

<body>
    <!-- Sessions -->
    <?php if ($success = getFlash('success')): ?>
        <div><?php echo $success ?></div>
    <?php endif ?>
    <?php if ($error = getFlash('error')): ?>
        <div><?php echo $error ?></div>
    <?php endif ?>
    <header>
        <h1>My website header</h1>
    </header>
    <main><?php echo $content ?></main>
    <footer>
        <h1>My website footer</h1>
    </footer>
</body>

</html>