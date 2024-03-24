<?php

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $operation = $_POST['operation'];

    $result = '';
    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                $result = '0で割ることはできません';
            } else {
                $result = $num1 / $num2;
            }
            break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body class="App">
    <div class="App-inner">
        <p style="text-align: center;">結果</p>
        <div class="display-block">
            <p class="js-secondNum">
                <?php echo $result; ?>
            </p>
        </div>
        <p style="text-align: center;"><a href='index.php'>戻る</a></p>
    </div>
</body>
</html>
