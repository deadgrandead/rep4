<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Задание 2</title>
</head>
<body>
  <?php
  // Генерация случайных чисел для переменных a, c и d из интервала [-20, 20]
  $a = rand(-20, 20);
  $c = rand(-20, 20);
  $d = rand(-20, 20);

  // Вычисление значения выражения (4*c + d - 1) / (c - a/2)
  // Проверка, чтобы избежать деления на ноль
  if ($c - $a / 2 == 0) {
      $result = 'Ошибка: деление на ноль';
  } else {
      $result = (4 * $c + $d - 1) / ($c - $a / 2);
  }

  // Вывод формулы с подставленными значениями переменных и результата
  echo "Выражение: (4 * $c + $d - 1) / ($c - $a / 2) <br>";
  echo "Результат: " . $result;
?>
</body>
</html>