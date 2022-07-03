<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<?php
// Start a Session
if( !session_id() ) @session_start();

require '../vendor/autoload.php';

// создаём экземпляр класс Engine
//$templates = new League\Plates\Engine('../app/views'); // передаём путь до папки в которой хранится файл, который будем отображать

// передаём данные на страницу homepage.php, и загружаем её здесь же
// ключ 'name' в файле homepage.php, будет доступен через $name
//echo $templates->render('homepage', ['name' => 'Sasha']);

// использование копмонента kint-php
//d($templates);

// использование копмонента Tamtamchik
use \Tamtamchik\SimpleFlash\Flash;
if (true) {
    //Flash::message('Earl Gray.');

    $flash = new Flash($message, $type = '');
    // метод компонента принимает сообщение, тип бутстраповский
    //$flash->message('Tea.','error');

    // или так 
    flash()->success('Success message!');
}
// Rendering all flash
echo $output = flash()->display();
?>
</body>
</html>
