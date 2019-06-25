<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Экзамен PHP</title>

    <link rel="stylesheet" href="style.css">
    <script src="jquery.min.js"></script>

</head>
<body>

<?php

include 'logic.php';

echo "ratingFoldRate = " . $handfoldRate . "\n";
echo "ratingFoldRate = " . $longJumpRate . "\n";
echo "ratingFoldRate = " . $raiseWaistRate . "\n";
echo "ratingFoldRate = " . $keepBodyRate . "\n";
echo "ratingFoldRate = " . $bendRate . "\n";
echo "ratingFoldRate = " . $runRate . "\n\n";
echo "bioAge = " . $oufk . "\n";

?>

<div class="page-layout">
    <header>
        <h1>Персональная карта "Взойди на свой Олимп"</h1>
    </header>

    <main>
        <table>
          <tr class="title">
              <th colspan="10">Ваши данные</th>
          </tr>
          <tr>
              <td>ФИО</td>
              <td colspan="9"><?php echo $surname . ' ' . $name ?></td>
          </tr>
          <tr>
              <td>Возраст</td>
              <td colspan="9"><?php echo $age ?> лет</td>
          </tr>
            <tr class="title">
                <th rowspan="2">Тест</th>
                <th rowspan="2">Результат</th>
                <th rowspan="2">Коэффициент ОУФК*</th>
                <th colspan="6">Оценка</th>
                <th rowspan="2">Биологический возраст</th>
            </tr>
            <tr class="title">
                <th>Опасная зона</th>
                <th>Неуд</th>
                <th>Уд</th>
                <th>Хорошо</th>
                <th>Отлично</th>
                <th>Супер</th>
            </tr>
            <tr>
                <td>Сгибание и разгибание рук в упоре лежа (отжимание)</td>
                <td>4 раз(-а)</td>
                <td><?php echo $handfoldRate ?></td>

                <?php

                for ($i = 1; $i <= 6; $i++) {
                    ?>
                    <td class="nobg <?php echo ratingInteger($handfoldRate) === $i ? 'redbg' : ''?>"></td>
                    <?php

                }
                ?>
                <td>0</td>
            </tr>
            <tr>
                <td>Прыжок в длину с места</td>
                <td>90 см</td>
                <td><?php echo $longJumpRate ?></td>
                <?php

                for ($i = 1; $i <= 6; $i++) {
                    ?>
                    <td class="nobg <?php echo ratingInteger($longJumpRate) === $i ? 'redbg' : ''?>"></td>
                    <?php

                }
                ?>
                <td>0</td>
            </tr>
            <tr>
                <td>Поднимание туловища из положения лежа на спине</td>
                <td>12 раз(-а)</td>
                <td><?php echo $raiseWaistRate ?></td>
                <?php

                for ($i = 1; $i <= 6; $i++) {
                    ?>
                    <td class="nobg <?php echo ratingInteger($raiseWaistRate) === $i ? 'redbg' : ''?>"></td>
                    <?php

                }
                ?>
                <td>0</td>
            </tr>
            <tr>
                <td>Удержание тела в висе на перекладине</td>
                <td>30 сек</td>
                <td><?php echo $keepBodyRate ?></td>
                <?php

                for ($i = 1; $i <= 6; $i++) {
                    ?>
                    <td class="nobg <?php echo ratingInteger($keepBodyRate) === $i ? 'redbg' : ''?>"></td>
                    <?php

                }
                ?>
                <td>0</td>
            </tr>
            <tr>
                <td>Наклон вперед из положения сидя</td>
                <td>3 см</td>
                <td><?php echo $bendRate ?></td>
                <?php

                for ($i = 1; $i <= 6; $i++) {
                    ?>
                    <td class="nobg <?php echo ratingInteger($bendRate) === $i ? 'redbg' : ''?>"></td>
                    <?php

                }
                ?>
                <td>0</td>
            </tr>
            <tr>
                <td>Бег 1000м</td>
                <td>385 сек</td>
                <td><?php echo $runRate ?></td>
                <?php

                for ($i = 1; $i <= 6; $i++) {
                    ?>
                    <td class="nobg <?php echo ratingInteger($runRate) === $i ? 'redbg' : ''?>"></td>
                    <?php

                }
                ?>
                <td>0</td>
            </tr>
            <tr class="title">
                <th colspan="10">Итоговый результат и рекоммендации</th>
            </tr>
            <tr>
                <td colspan="2">Ваш биологический возраст</td>
                <td colspan="2">4.17</td>
                <td colspan="6" rowspan="4">

                  Обратить внимание на свое здоровье.
                  Необходимо пройти тщательное медицинское обследование всех органов и систем.

                </td>
            </tr>
            <tr>
                <td colspan="2">Разница между календарным и биологическим возрастом(±)</td>
                <td colspan="2">3.83</td>
            </tr>
            <tr>
                <td colspan="2">ОУФК*</td>
                <td colspan="2">-0.2038</td>
            </tr>
            <tr>
                <td colspan="2">Бег 1000м</td>
                <td colspan="2">Уд</td>
            </tr>
        </table>

        <p>*Общий уровень физической кондиции</p>
    </main>

    <footer>
        <span>Выполнил: Калачев Глеб, Гончаров Андрей, Вишняков Андрей 181-321</span>
    </footer>
</div>

</body>
</html>
