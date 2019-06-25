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

<div class="page-layout">
    <header>
        <a href="" class="logo"><img class="logo-image" src="./assets/logo-polytech.png" alt="Московский Политех"></a>
        <h1>Финальный экзамен</h1>
    </header>

    <main>
        <div class="center">
            <form class="form" action="">

                <h2>Крутая форма</h2>

                <div class="input-field">
                    <label for="">input1</label>
                    <input type="text" name="input1">
                </div>

                <div class="input-field">
                    <label for="">input1</label>
                    <input type="text" name="input2">
                </div>

                <div class="input-field">
                    <div>Выбирите радио:</div>
                    <label for="chb1">чекбокс1<input id="chb1" type="radio" value="1" name="radio" checked></label>
                    <label for="chb2">чекбокс2<input id="chb2" type="radio" value="2" name="radio"></label>
                    <label for="chb3">чекбокс3<input id="chb3" type="radio" value="3" name="radio"></label>
                </div>

                <div class="input-field">
                    <label for="send-to-email">Отправить на почту <input type="checkbox" name="email"></label>
                </div>

                <input type="submit">

            </form>
        </div>

        <a href="./output.php">К output'у (для дебага)</a>
    </main>

    <footer>
        <span>Выполнил: Глеб Калачев, 181-321</span>
    </footer>
</div>

</body>
</html>
