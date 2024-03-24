# ローカル環境

## PHP
ローカルでPHPを使用する場合 <br>
php -S localhost:8080 -t public<br>

## Docker
Dockerを使用する場合<br>
docker build -t test-calculator-php . <br>
docker run -p 8080:8080 test-calculator-php