<?php
$title = "Varibles and Data Types";
$heading = "Varibles and DataTypes";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container-fluid ">

        <h1 class="p-2 m-0 mb-2 bg-primary"><?= $heading ?></h1>

        <?php
        $name = "Amit"; #string
        $age = 22; #integer
        $salary = 25000.50; #float
        $isMarried = false; #boolean
        $colors = ["red", "green", "blue"]; #Array (Indexed Array) keys are numeric
        $student = ["name" => "Amit", "age" => 22, "phone_no" => "9875297927", "email" => "amitvala065@gmail.com"]; #Array (Associative Array) keys are user define string or numbers

        $detals = ["name" => $name, "age" => $age, "salary" => $salary, "isMarried" => $isMarried, "colors" => $colors];

        $matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9], [10, 11, 12]]; #multi-dimensional array

        ?>

        <h2>Name : <?= var_dump($name) ?></span></h2>
        <h2>Age : <?= var_dump($age) ?></h2>
        <h2>Salary : <?= var_dump($salary) ?></h2>
        <h2>Am i Married (true/false) : <?= var_dump($isMarried)  ?></h2>
        <h2>Colors : <?= var_dump($colors) ?></h2>
        <h2>student Detail : <?= var_dump($student) ?></h2>
        <h2>Details : <?= var_dump($detals) ?></h2>
        <h2>Multi-dimensional Array : <?= var_dump($matrix) ?></h2>
        <h2>
            <?php echo implode(", ", $colors) ?>
        </h2>
        <h2>Matrix array : <br>

            <?php
            foreach ($matrix as $row) {
                echo implode(' ', $row) . '<br>';
            }
            ?>

        </h2>

    </div>

</body>

</html>