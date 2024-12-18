<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>

<body>
    <h1>Php Operators</h1>

    <div class="arithmatic">
        <h3>Arithmatic Operator</h3>
        <?php

        /*
            +,
            -,
            *,
            /,
            %
        */

        $a = 10;
        $b = 20;

        $add = $a + $b;
        $multiplication = $a * $b;
        $sub = $a - $b;
        $division = $a / $b;
        $modules = $a % $b;

        $artimaticResult = ["+" => $add, "*" => $multiplication, "-" => $sub, "/" => $division, "%" => $modules];
        ?>

        <table cellspacing="0" cellpadding="5" border="1">
            <thead>
                <tr>
                    <th>Operator</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($artimaticResult as $key => $value){
                        echo "<tr>
                                <td>$key</td>
                                <td>$value</td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>

    </div>

    <div class="arithmatic">
        <h3>Assignment Operator</h3>
        <?php
        /*
           =,
           +=,
           -=,
           *=,
           /=,
           %=
         */
        $a = 10;
        $b = 5;

        $equal = $a = $b;
        $plusandEqualTo = $a += $b;
        $minusEqualTo = $a -= $b;
        $divisionEqualTo = $a /= $b;
        $multiplyEqualTo = $a *= $b;
        $mudulesEqualTo = $a %= $b;

        $assignmanrResult = ["=" => $equal, "+=" => $plusandEqualTo, "-=" => $minusEqualTo, "/=" => $divisionEqualTo, "*=" => $multiplyEqualTo, "%=" =>  $minusEqualTo];
        ?>

        <table cellspacing="0" cellpadding="5" border="1">
            <thead>
                <tr>
                    <th>Operator</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($assignmanrResult    as $key => $value){
                        echo "<tr>
                                <td>$key</td>
                                <td>$value</td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>

    </div>

    <div class="arithmatic">
        <h3>Comparison Operator</h3>
        <?php
        /*
           ==, Equal
           ===, Indentical (equal and same type)
           !=, Not Equal
           !==, Not Indentical
           <, Less than
           >, Gretar than
           <=, Less than equal
           >=, Greater than equal
           <=>

           ouput : (true / false)
         */
        $c = 10;
        $d = 5;

        $qualto = $c == $d;
        $Identical = $c === $d;
        $notEqual = $c != $d;
        $notIndentical = $c !== $d;
        $lessthan = $c < $d;
        $graterthan = $c > $d;
        $lessthanEqual = $c <= $d;
        $graterthanEqual = $c >= $d;
        $Spaceship = $c <=> $d;

        $assignmanrResult = ["==" => $qualto, "===" => $Identical, "!=" => $notEqual, "!==" => $notIndentical, "<" => $lessthan, ">" =>  $graterthan, "<=" => $lessthanEqual, ">=" => $graterthanEqual, "<=>" => $Spaceship];
        ?>

        <table cellspacing="0" cellpadding="5" border="1">
            <thead>
                <tr>
                    <th>Operator</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($assignmanrResult    as $key => $value){
                        
                        $displayValue = $value ? "1" : "0";

                        echo "<tr>
                                <td>$key</td>
                                <td>$displayValue   </td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>

    </div>

    <div class="logical">
    <h3>Logical Operators</h3>
    <?php
    /*
        Logical Operators:
        &&, AND (True if both conditions are true)
        ||, OR (True if at least one condition is true)
        !, NOT (Reverses the condition)
        xor, XOR (True if only one condition is true)
        
        Output: (true/false)
    */

    $a = true;
    $b = false;

    // Logical operations
    $andResult = $a && $b; // AND
    $orResult = $a || $b; // OR
    $notResult = !$a; // NOT
    $xorResult = $a xor $b; // XOR

    // Storing the results in an associative array
    $logicalResult = [
        "&&" => $andResult,
        "||" => $orResult,
        "!" => $notResult,
        "xor" => $xorResult
    ];
    ?>

    <table cellspacing="0" cellpadding="5" border="1">
        <thead>
            <tr>
                <th>Operator</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($logicalResult as $key => $value) {
                $displayValue = $value ? "True" : "False";
                echo "<tr>
                        <td>$key</td>
                        <td>$displayValue</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>

</html>