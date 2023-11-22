<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Задание 3</title>
</head>
<body>
  <?php
  echo "<table border='1'>"; // Начало таблицы

  // Внешний цикл для строк
  for ($row = 1; $row <= 10; $row++) {
      echo "<tr>"; // Начало строки таблицы

      // Внутренний цикл для столбцов
      for ($col = 1; $col <= 10; $col++) {
          $number = ($row - 1) * 10 + $col; // Вычисление числа для ячейки

          // Определение цвета числа
          $color = ($number % 2 == 0) ? 'red' : 'black';

          // Вывод ячейки с числом нужного цвета
          echo "<td style='color: $color'>$number</td>";
      }

      echo "</tr>"; // Конец строки таблицы
  }

  echo "</table>"; // Конец таблицы
  ?>
</body>
</html>