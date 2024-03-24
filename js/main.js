const operatorDisplayClassName = 'display__operator--active';
const firstNum = document.querySelector('.js-firstNum');
const secondNum = document.querySelector('.js-secondNum');
const operator = document.querySelector('.js-displayOperator');
if (!firstNum || !secondNum || !operator) console.error('Not found firstNum or secondNum or operator');
console.log('Get firstNum and secondNum and operator');

const submitNum1 = document.getElementById('js-submitNum1');
const submitNum2 = document.getElementById('js-submitNum2');
const submitOperator = document.getElementById('js-submitOp');
if (!submitNum1 || !submitNum2 || !submitOperator) console.error('Not found submitNum1 or submitNum2 or submitOperator');
console.log('Get submitNum1 and submitNum2 and submitOperator');

function setNum1(num) {
  firstNum.textContent = num;
  submitNum1.value = parseFloat(num);
}

function setNum2(num) {
  secondNum.textContent = num;
  submitNum2.value = parseFloat(num);
}

function setOperator(op) {
  operator.textContent = op;
  submitOperator.value = op;
}


/**
 * 数字ボタンを押した時の処理
 */
(function numBtnHandler() {
  const numBtns = document.querySelectorAll('.js-numBtn');
  if (!numBtns) return;
  console.log('Get numBtns');

  numBtns.forEach(numBtn => {
    numBtn.addEventListener('click', () => {
      const op = operator.textContent;
      const num = numBtn.textContent;

      let currentNum = op === '_' ? firstNum.textContent : secondNum.textContent;
      if (num === '.' && currentNum.includes('.')) return;
      if ((num === "0" || num === "00") && currentNum === "0") return;

      currentNum = currentNum === "0" ? num : `${ currentNum }${ num }`;

      op === '_' ? setNum1(currentNum) : setNum2(currentNum);
    });
  });
})();


/**
 * リセットボタンを押した時の処理
 */
(function resetBtnHandler() {
  const resetBtn = document.querySelector('.js-resetBtn');
  if (!resetBtn) return;
  console.log('Get resetBtn');

  resetBtn.addEventListener('click', () => {
    if (secondNum.textContent !== '0') {
      secondNum.textContent = '0';
      return;
    }

    setNum1('0');
    setNum2('0');
    setOperator('_');
    operator.classList.remove(operatorDisplayClassName);
  });
})();

/**
 * 演算子ボタンを押した時の処理
 */
(function operatorBtnHandler() {
  const operatorBtns = document.querySelectorAll('.js-operatorBtn');
  if (!operatorBtns) return;
  console.log('Get operatorBtns');

  operatorBtns.forEach(operatorBtn => {
    operatorBtn.addEventListener('click', () => {
      setOperator(operatorBtn.textContent);
      if (!operator.classList.contains(operatorDisplayClassName))
        operator.classList.add(operatorDisplayClassName);
    });
  });
})();

/**
 * 計算ボタンを押した時の処理
 */
(function calcBtnHandler() {
  const calcBtn = document.querySelector('.js-calcBtn');
  const form = document.querySelector('.js-form');
  if (!calcBtn || !form) return;
  console.log('Get calcBtn and form');

  calcBtn.addEventListener('click', () => {
    if (firstNum.textContent === '0' || operator.textContent === "_") {
      alert('数値または、演算子を入力してください');
      return;
    }
    form.submit();
  });
})();