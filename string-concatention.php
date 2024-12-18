<?php
    $name = "amit vala";
    $age = 22;

    $fullname = $name . $age;
    echo $fullname;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Concatenation</title>
</head>
<body>
    <div class="container">
        <h1><?= 'my name is' . $name ?></h1>
        <h1><?= "hello, my name is {$name}" ?></h1>
        <h1><?= "hello, my name is \"Amit\"" ?></h1>
    </div>
</body>
</html>