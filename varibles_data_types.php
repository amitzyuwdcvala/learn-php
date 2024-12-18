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
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body>
    <div class="container ">

        <h1 class="p-3 m-0 bg-blue-500 text-whte font-bold text-3xl h-full "><?= $heading ?></h1>

        <?php
        $name = "Amit"; #string
        $age = 22; #integer
        $salary = 25000.50; #float
        $isMarried = false; #boolean
        $colors = ["red", "green", "blue"]; #Array (Indexed Array) keys are numeric
        $student = ["name" => "Amit", "age" => 22, "phone_no" => "9875297927", "email" => "amitvala065@gmail.com"]; #Array (Associative Array) keys are user define string or numbers

        $detals = ["name" => $name, "age" => $age, "salary" => $salary, "isMarried" => $isMarried, "colors" => $colors];

        $matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9], [10, 11, 12]]; #multi-dimensional array

        $person = new stdClass(); #Object

        $nullVarible = null #null variable

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

        <h2>
            <pre>
                <?php print_r($person);?>
            </pre>
        </h2>

    </div>

</body>

</html>