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
            <form class="form" action="" method="post">

                <h2>Заполните форму</h2>

                <div class="input-field">
                    <label for="">Страна</label>
                    <input type="text" name="country" required>
                </div>

                <div class="input-field">
                    <label for="">Регион</label>
                    <input type="text" name="region" required>
                </div>
                <div class="input-field">
                    <label for="">Город</label>
                    <input type="text" name="city" required>
                </div>

                <div class="input-field">
                    <label for="">Фамилия <span class="red">*</span> </label>
                    <input type="text" name="surname" required>
                </div>
                <div class="input-field">
                    <label for="">Имя <span class="red">*</span></label>
                    <input type="text" name="name" required>
                </div>

                <div class="input-field">
                    <label for="">Возраст <span class="red">*</span></label>
                    <input type="text" name="age" required>
                </div>

                <div class="input-field">

                    <label for="">Пол (М/Ж) <span class="red">*</span></label>
                    <div class="radio-group">
                    <label for="chb1">М<input id="chb1" type="radio" value="male" name="male"></label>
                    <label for="chb2">Ж<input id="chb2" type="radio" value="female" name="male"></label>
                    </div>
                </div>

                <div class="input-field">
                    <label for="">Профессия <span class="red">*</span></label>
                    <input type="text" name="profession" required>
                </div>

                <div class="input-field">
                    <label for="">Рост (см) <span class="red">*</span></label>
                    <input type="text" name="height" required>
                </div>
                <div class="input-field">
                    <label for="">Вес (кг) <span class="red">*</span></label>
                    <input type="text" name="weight" required>
                </div>

                <div class="input-field">
                    <label for="">Окружность грудной клетки (см) <span class="red">*</span></label>
                    <input type="text" name="chest" required>
                </div>

                <div class="input-field">
                    <label for="">Окружность талии (см) <span class="red">*</span></label>
                    <input type="text" name="waist" required>
                </div>

                <input class="btn" type="submit">

            </form>
        </div>
    </main>

    <footer>
        <span>Выполнил: Глеб Калачев, Гончаров Андрей, Вишняков Андрей 181-321</span>
    </footer>
</div>

</body>
</html>
