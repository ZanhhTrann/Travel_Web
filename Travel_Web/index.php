<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/yourcode.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Du lịch</title>
</head>
<body>
    <?php
        require './php/controler/home_control.php';
        $controller = new HomeControler();
        $controller->displayHomeView();
    ?>
    <script src="script.js"></script>
</body>
</html>