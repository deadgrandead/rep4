<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Задание 1</title>
</head>
<body>
  <?php
  // Создание константы NUM_E со значением числа е
  define('NUM_E', 2.71828);

  // Вывод значения константы на экран
  echo 'Число e равно ' . NUM_E . '<br>';

  // Присвоение переменной $num_e1 значения константы
  $num_e1 = NUM_E;

  // Вывод на экран имени переменной, ее значения и типа
  echo '$num_e1 = ' . $num_e1 . '    ' . gettype($num_e1) . '<br>';

  // Изменение типа переменной на строковый и вывод
  $num_e1 = (string) $num_e1;
  echo '$num_e1 = ' . $num_e1 . '    ' . gettype($num_e1) . '<br>';

  // Изменение типа переменной на целочисленный и вывод
  $num_e1 = (int) $num_e1;
  echo '$num_e1 = ' . $num_e1 . '    ' . gettype($num_e1) . '<br>';

  // Изменение типа переменной на булевский и вывод
  $num_e1 = (bool) $num_e1;
  echo '$num_e1 = ' . $num_e1 . '    ' . gettype($num_e1) . '<br>';
  ?>
</body>
</html>
