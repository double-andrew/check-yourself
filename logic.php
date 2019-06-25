<?php

//$error = false;




//НЕОБЯЗАТЕЛЬНЫЕ ПОЛЯ
if (isset($_POST['country'])) {
    $country = $_POST['country'];
} else {
    $country = '';
}

if (isset($_POST['region'])) {
    $region = $_POST['region'];
} else {
    $region = '';
}

//имя
if (isset($_POST['city'])) {
    $city = $_POST['city'];
} else {
    $city = '';
}



// ОБЯЗАТЕЛЬНЫЕ ПОЛЯ
//фамилия
if (isset($_POST['surname'])) {
    $surname = $_POST['surname'];
} else {
    $surname = '';
}

//имя
if (isset($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $name = '';
}

//дата
if (isset($_POST['age'])) {
    $age = $_POST['age'];
} else {
    $age = '';
}

//пол
if (isset($_POST['male'])) {
    $male = $_POST['male'];
} else {
    $male = '';
}

//профессия
if (isset($_POST['profession'])) {
    $profession = $_POST['profession'];
} else {
    $profession = '';
}

//рост
if (isset($_POST['height'])) {
    $height = $_POST['height'];
} else {
    $height = '';
}

//вес
if (isset($_POST['weight'])) {
    $weight = $_POST['weight'];
} else {
    $weight = '';
}

//грудь
if (isset($_POST['chest'])) {
    $chest = $_POST['chest'];
} else {
    $chest = '';
}

//талия
if (isset($_POST['waist'])) {
    $waist = $_POST['waist'];
} else {
    $waist = '';
}


//ДАННЫЕ РЕЗУЛЬТАТОВ
if (isset($_POST['handfold'])) {
    $handfold = $_POST['handfold'];
} else {
    $handfold = '';
}

if (isset($_POST['long-jump'])) {
    $longJump = $_POST['long-jump'];
} else {
    $longJump = '';
}

if (isset($_POST['raise-waist'])) {
    $raiseWaist = $_POST['raiseWaist'];
} else {
    $raiseWaist = '';
}

if (isset($_POST['keep-body'])) {
    $keepBody = $_POST['keep-body'];
} else {
    $keepBody = '';
}

if (isset($_POST['bend'])) {
    $bend = $_POST['bend'];
} else {
    $bend = '';
}

if (isset($_POST['run'])) {
    $run = $_POST['run'];
} else {
    $run = '';
}


// Формулы


//симулируем данные с таблицы
$handfoldNormal = 30;
$longJumpNormal = 185;
$raiseWaistNormal = 23;
$keepBodyNormal = 32;
$bendNormal = 10.3;
$runNormal = 278;


$handfoldRate = ($handfold - $handfoldNormal) / $handfoldNormal;
$longJumpRate = ($longJump - $longJumpNormal) / $longJumpNormal;
$raiseWaistRate = ($raiseWaist - $raiseWaistNormal) / $raiseWaistNormal;
$keepBodyRate = ($keepBody - $keepBodyNormal) / $keepBodyNormal;
$bendRate = ($bendRate - $bendNormal) / $bendNormal;
$runRate = ($run - $runNormal) / $runNormal;

function ratingInteger($rate) {
    if ($rate >= 0.6) {
        return 5;
    } elseif ($rate >= 0.2) {
        return 4;
    } elseif ($rate >= -0.2) {
        return 3;
    } elseif ($rate >= -0.6) {
        return 2;
    } else {
        return 1;
    }
}


