<?php
$filename = realpath(__DIR__ . '/../src/main.php');

function success($message)
{
    echo "\033[32m  [+] Успех\t", $message, PHP_EOL;
}

function error($message)
{
    echo "\033[31m [-] Ошибка\t", $message, PHP_EOL;
}

if (file_exists($filename)) {
    success('Файл: "src/main.php" существует');
    include $filename;
} else {
    error('Не найден файл: "src/main.php"');
    return 1;
}

function returnBoolTest()
{
    $function = str_replace('Test', '', __FUNCTION__);

    if (function_exists($function)) {
        success('Функция: "' . $function . '" существует');
    } else {
        error('Не найден функция: "' . $function . '"');
        return 1;
    }

    $need = 'boolean';
    $result = gettype($function());

    if ($result == $need) {
        success('Корректный тип данных возвращает функция: "' . $function . '"');
    } else {
        error(
            sprintf(
                "Ожидаем от \"%s\" получаем \"%s\", получаем \"%s\"",
                $function,
                strtoupper($need),
                strtoupper($result)
            )
        );
    }
}

function returnIntTest()
{
    $function = str_replace('Test', '', __FUNCTION__);

    if (function_exists($function)) {
        success('Функция: "' . $function . '" существует');
    } else {
        error('Не найден функция: "' . $function . '"');
        return null;
    }

    $need = 'integer';
    $result = gettype($function());

    if ($result == $need) {
        success('Корректный тип данных возвращает функция: "' . $function . '"');
    } else {
        error(
            sprintf(
                "Ожидаем от \"%s\" получаем \"%s\", получаем \"%s\"",
                $function,
                strtoupper($need),
                strtoupper($result)
            )
        );
    }
}

function returnFloatTest()
{
    $function = str_replace('Test', '', __FUNCTION__);

    if (function_exists($function)) {
        success('Функция: "' . $function . '" существует');
    } else {
        error('Не найден функция: "' . $function . '"');
        return null;
    }

    $need = 'double';
    $result = gettype($function());

    if ($result == $need) {
        success('Корректный тип данных возвращает функция: "' . $function . '"');
    } else {
        error(
            sprintf(
                "Ожидаем от \"%s\" получаем \"%s\", получаем \"%s\"",
                $function,
                strtoupper($need),
                strtoupper($result)
            )
        );
    }
}

function returnStringTest()
{
    $function = str_replace('Test', '', __FUNCTION__);

    if (function_exists($function)) {
        success('Функция: "' . $function . '" существует');
    } else {
        error('Не найден функция: "' . $function . '"');
        return null;
    }

    $need = 'string';
    $result = gettype($function());

    if ($result == $need) {
        success('Корректный тип данных возвращает функция: "' . $function . '"');
    } else {
        error(
            sprintf(
                "Ожидаем от \"%s\" получаем \"%s\", получаем \"%s\"",
                $function,
                strtoupper($need),
                strtoupper($result)
            )
        );
    }
}

function returnArrayTest()
{
    $function = str_replace('Test', '', __FUNCTION__);

    if (function_exists($function)) {
        success('Функция: "' . $function . '" существует');
    } else {
        error('Не найден функция: "' . $function . '"');
        return null;
    }

    $need = 'array';
    $result = gettype($function());

    if ($result == $need) {
        success('Корректный тип данных возвращает функция: "' . $function . '"');
    } else {
        error(
            sprintf(
                "Ожидаем от \"%s\" получаем \"%s\", получаем \"%s\"",
                $function,
                strtoupper($need),
                strtoupper($result)
            )
        );
    }
}

function returnObjectTest()
{
    $function = str_replace('Test', '', __FUNCTION__);

    if (function_exists($function)) {
        success('Функция: "' . $function . '" существует');
    } else {
        error('Не найден функция: "' . $function . '"');
        return null;
    }

    $need = 'object';
    $result = gettype($function());

    if ($result == $need) {
        success('Корректный тип данных возвращает функция: "' . $function . '"');
    } else {
        error(
            sprintf(
                "Ожидаем от \"%s\" получаем \"%s\", получаем \"%s\"",
                $function,
                strtoupper($need),
                strtoupper($result)
            )
        );
    }
}

function returnSourceTest()
{
    $function = str_replace('Test', '', __FUNCTION__);

    if (function_exists($function)) {
        success('Функция: "' . $function . '" существует');
    } else {
        error('Не найден функция: "' . $function . '"');
        return null;
    }

    $need = 'resource';
    $result = gettype($function());

    if ($result == $need) {
        success('Корректный тип данных возвращает функция: "' . $function . '"');
    } else {
        error(
            sprintf(
                "Ожидаем от \"%s\" получаем \"%s\", получаем \"%s\"",
                $function,
                strtoupper($need),
                strtoupper($result)
            )
        );
    }
}

function returnNullTest()
{
    $function = str_replace('Test', '', __FUNCTION__);

    if (function_exists($function)) {
        success('Функция: "' . $function . '" существует');
    } else {
        error('Не найден функция: "' . $function . '"');
        return null;
    }

    $need = 'NULL';
    $result = gettype($function());

    if ($result == $need) {
        success('Корректный тип данных возвращает функция: "' . $function . '"');
    } else {
        error(
            sprintf(
                "Ожидаем от \"%s\" получаем \"%s\", получаем \"%s\"",
                $function,
                strtoupper($need),
                strtoupper($result)
            )
        );
    }
}

function returnCallbackTest()
{
    $function = str_replace('Test', '', __FUNCTION__);

    if (function_exists($function)) {
        success('Функция: "' . $function . '" существует');
    } else {
        error('Не найден функция: "' . $function . '"');
        return null;
    }

    $need = 'object';
    $result = gettype($function());

    if ($result == $need) {
        success('Корректный тип данных возвращает функция: "' . $function . '"');
    } else {
        error(
            sprintf(
                "Ожидаем от \"%s\" получаем \"%s\", получаем \"%s\"",
                $function,
                strtoupper($need),
                strtoupper($result)
            )
        );
    }
}

function run()
{
    returnBoolTest();
    returnIntTest();
    returnFloatTest();
    returnStringTest();
    returnArrayTest();
    returnObjectTest();
    returnSourceTest();
    returnNullTest();
    returnCallbackTest();
}

run();

