<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Заполните форму</title>

    <link rel="stylesheet" href="style.css">
    <script src="jquery.min.js"></script>

</head>
<body>

<div class="page-layout">
    <header>
        <a href="" class="logo"><img class="logo-image" src="./assets/logo.png" alt="Этафета мира"></a>
        <h1>Заполните форму</h1>
    </header>

    <main>
        <div class="center">
            <form class="form" action="">

                <h2>Заполните форму</h2>

                <div class="input-field">
                    <label for="">Страна</label>
                    <input type="text" name="input1" required>
                </div>

                <div class="input-field">
                    <label for="">Регион</label>
                    <input type="text" name="input2" required>
                </div>
                <div class="input-field">
                    <label for="">Город</label>
                    <input type="text" name="input1" required>
                </div>

                <div class="input-field">
                    <label for="">Фамилия</label>
                    <input type="text" name="input2" required>
                </div>
                <div class="input-field">
                    <label for="">Имя</label>
                    <input type="text" name="input1" required>
                </div>

                <div class="input-field">
                    <label for="">Возраст</label>
                    <input type="text" name="input2" required>
                </div>

                <div class="input-field">

                    <label for="">Пол (М/Ж)</label>
                    <div class="radio-group">
                    <label for="chb1">М<input id="chb1" type="radio" value="1" name="radio"></label>
                    <label for="chb2">Ж<input id="chb2" type="radio" value="2" name="radio"></label>
                    </div>
                </div>

                <div class="input-field">
                    <label for="">Профессия</label>
                    <input type="text" name="input1" required>
                </div>

                <div class="input-field">
                    <label for="">Рост (см)</label>
                    <input type="text" name="input2" required>
                </div>
                <div class="input-field">
                    <label for="">Вес (кг)</label>
                    <input type="text" name="input1" required>
                </div>

                <div class="input-field">
                    <label for="">Окружность грудной клетки (см)</label>
                    <input type="text" name="input2" required>
                </div>

                <div class="input-field">
                    <label for="">Окружность талии (см)</label>
                    <input type="text" name="input2" required>
                </div>

                <input class="btn" type="submit">

            </form>
        </div>

        <a href="./output.php">К output'у (для дебага)</a>
    </main>

    <footer>
        <span>Выполнил: Глеб Калачев, Гончаров Андрей, Вишняков Андрей 181-321</span>
    </footer>
</div>

</body>
</html>
