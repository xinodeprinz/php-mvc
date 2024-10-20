<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <h1><?php echo $title ?></h1>
    <p><?php echo $content ?></p>

    <form action="/submit" method="post">
        <label for="name">Name</label>
        <input type="text" placeholder="Enter Name" name="name">
        <button type="submit">Submit</button>
    </form>
</body>

</html>