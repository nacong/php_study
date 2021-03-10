<!DOCTYPE html>
<html>
    <head>
        <meta chaarset="utf-8">
        <title>XSS</title>
    </head>
    <body>
        <h1>Cross Site Scripting</h1>
        <?php
        echo htmlspecialchars('<script>alert("babo")</script>');
        echo basename($_GET['id']);
        unlink('data/'.basename($_POST['id']));
        ?>
    </body>
</html>