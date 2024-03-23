<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>
<body class="App">
    <div class="App-inner">
      <form action="calculator.php" method="post">
        <div class="display-block">
            <p>0</p>
            <p class="display__operator">_</p>
            <p>0</p>
            <p class="display__operator display__operator--active">=</p>
            <p>0</p>
        </div>


        <div class="buttons-block">
          <div class="buttons-block__row is__number">
              <!-- 数字ボタン -->
              <?php
              $numbers = ["7", "8", "9", "4", "5", "6", "1", "2", "3", "0", "00", "."];
              foreach ($numbers as $num) {
                  echo "<button onclick='numBtnHandler(\"$num\")'>{$num}</button>";
              }
              ?>
          </div>


          <div class="buttons-block__row is__op">
              <!-- リセットボタン -->
              <button class="reset" onclick="resetHandler()">C・CE</button>

              <!-- 演算子ボタン -->
              <?php
              $operators = ["+", "-", "*", "/"];
              foreach ($operators as $op) {
                  echo "<button onclick='optHandler(\"$op\")'>{$op}</button>";
              }
              ?>

              <!-- =ボタン -->
              <button class="answer" onclick="calcHandler()"> = </button>
          </div>


          <!-- <input type="number" name="num1" required="required" />
          <select name="operation">
              <option value="add">足し算</option>
              <option value="subtract">引き算</option>
              <option value="multiply">掛け算</option>
              <option value="divide">割り算</option>
          </select>
          <input type="number" name="num2" required="required" />
          <input type="submit" name="submit" value="計算" /> -->
      </form>
    </div>
</body>
</html>
