<?php
    echo "<br><a href='index.php'>戻る</a>";
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    echo "num1: $num1, num2: $num2, operation: $operation<br>";

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
?>
