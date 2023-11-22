<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Задание 4</title>
</head>
<body>
  <?php
  // Генерация случайных чисел для N и M
  $N = rand(1, 100);
  $M = rand(1, 100);

  // Убедимся, что N меньше M
  if ($N > $M) {
      list($N, $M) = array($M, $N);
  }

  echo "Интервал: от $N до $M <br>";

  // Функция, проверяющая делится ли число на каждую из своих цифр
  function isDivisibleByItsDigits($number) {
      // Исключение случаев, когда в числе присутствует цифра 0
      if (strpos($number, '0') !== false) return false;

      $length = strlen($number);
      for ($i = 0; $i < $length; $i++) {
          $digit = $number[$i];
          if ($number % $digit != 0) {
              return false;
          }
      }
      return true;
  }

  // Поиск чисел, удовлетворяющих условию задачи
  for ($i = $N; $i <= $M; $i++) {
      if (isDivisibleByItsDigits((string)$i)) {
          echo $i . " ";
      }
  }
  ?>
</body>
</html>