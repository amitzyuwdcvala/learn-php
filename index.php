<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World php</title>
</head>
<body>
    <h1>This is php</h1>

    <?php
        echo "Hello, World!";
   ?>

    <?php
        $name = "John Doe";
        echo "My name is $name";
   ?>

    <?php
        $numbers = array(1, 2, 3, 4, 5);
        foreach ($numbers as $number) {
            echo "$number, ";
        }
   ?>

   
</body>
</html>