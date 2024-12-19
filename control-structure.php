<?php
session_start(); // Start the session to persist the random number

// Generate a random number between 1 and 10 if not already set
if (!isset($_SESSION['randNum'])) {
    $_SESSION['randNum'] = rand(1, 10);
}

$randNum = $_SESSION['randNum'];
$message = ''; // Initialize an empty message string

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guess'])) {
    $guessNum = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_NUMBER_INT);

    // Validate the input
    if ($guessNum === '' || $guessNum === false || $guessNum < 1 || $guessNum > 10) {
        $message = "<span class='message-fillInput'>Please enter a valid number between 1 and 10.</span>";
    } else {
        $guessNum = intval($guessNum); // Convert to integer

        // Check if the guessed number matches the random number
        if ($guessNum == $randNum) {
            $message = "<span class='message-correct'>Correct! The number is $randNum.</span>";
            // Reset the random number for a new game
            unset($_SESSION['randNum']);
        } else {
            $message = "<span class='message-incorrect'>Incorrect! Try again!</span>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structure - Guess Game</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: lightblue;
        }

        .box {
            width: 40%;
            height: auto;
            border-radius: 8px;
            border: 2px solid blueviolet;
            text-align: center;
            padding: 30px;
            background-color: white;
        }

        .input {
            margin: auto;
            padding: 10px 15px;
            font-size: 20px;
            color: black;
            border-radius: 9px;
            border: 1.5px solid blueviolet;
            background-color: rgb(239, 235, 255);
        }

        .input:focus {
            outline: none;
        }

        .btn {
            background-color: blueviolet;
            padding: 10px 15px;
            font-size: 20px;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
        }

        h3 {
            font-size: 29px;
            color: purple;
            font-weight: bold;
        }

        p {
            font-size: 18px;
            margin-top: 20px;
            font-weight: bold;
        }

        .message-correct {
            color: green;
        }

        .message-incorrect {
            color: red;
        }

        .message-fillInput {
            color: orange;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <h3>Guess Number (1 - 10)</h3>
            <form method="POST" action="">
                <input type="number" class="input" name="number" placeholder="Enter Number" min="1" max="10">
                <button type="submit" class="btn" name="guess">Guess</button>
            </form>
            <p><?php echo $message; ?></p>
        </div>
    </div>
</body>

</html>

