<!DOCTYPE html>
<html>
<head>
  <title>Sergio Schimpf 67e203a2</title>
  <meta charset="UTF-8">
</head>
<body>
<h1>Guessing Game</h1>

<?php
$correctnumber = 33;

if (!isset($_GET['guess'])) {
    echo "Missing guess parameter";
} elseif (strlen($_GET['guess']) < 1) {
    echo "Your guess is too short";
} elseif (!is_numeric($_GET['guess'])) {
    echo "Your guess is not a number";
} else {
    $guess = intval($_GET['guess']);
    if ($guess < $correctnumber) {
        echo "Your guess is too low";
    } elseif ($guess > $correctnumber) {
        echo "Your guess is too high";
    } else {
        echo "Congratulations - You are right";
    }
}
?>
</body>
</html>
