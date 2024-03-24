<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body class="App">
    <div class="App-inner">
      <form action="calculator.php" method="post" class='js-form'>
        <div class="display-block">
            <p class="js-firstNum">0</p>
            <p class="js-displayOperator display__operator">_</p>
            <p class="js-secondNum">0</p>
            <!-- <p class="display__operator display__operator--active">=</p>
            <p>0</p> -->
        </div>


        <div class="buttons-block">
          <div class="buttons-block__row is__number">
            <!-- 数字ボタン -->
            <?php
            $numbers = ["7", "8", "9", "4", "5", "6", "1", "2", "3", "0", "00", "."];
            foreach ($numbers as $num) {
                echo "<button type='button' class='js-numBtn'>{$num}</button>";
            }
            ?>
          </div>


          <div class="buttons-block__row is__op">
            <!-- リセットボタン -->
            <button type="button" class="js-resetBtn reset">C・CE</button>

            <!-- 演算子ボタン -->
            <?php
            $operators = ["+", "-", "*", "/"];
            foreach ($operators as $op) {
                echo "<button class='js-operatorBtn' type='button'>{$op}</button>";
            }
            ?>

            <!-- =ボタン -->
            <button type="button" class="js-calcBtn answer"> = </button>
            <input id="js-submitNum1" type="number" name='num1' style="display: none;" value="0">
            <input id="js-submitNum2" type="number" name='num2' style="display: none;" value="0">
            <input id="js-submitOp" type="hidden" name='operation' value="_">
          </div>
        </div>
      </form>
    </div>

    <script src="./js/main.js"></script>
</body>
</html>
