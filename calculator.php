<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    $result = '';
    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
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
