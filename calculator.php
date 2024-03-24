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
    echo "結果: $result";
}
echo "<br><a href='index.php'>戻る</a>";
?>
