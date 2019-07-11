
<!DOCTYPE html>
<html lang="ru">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="resources/css/materialize.css"  media="screen,projection"/>

    <script type="text/javascript" src="resources/js/jquery-3.4.1.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>WebApp</title>
</head>
<body>
<h1>HI</h1>
<?php
/*Репортим любые ошибки */
ini_set('display_errors',1);
error_reporting(E_ALL);

/*Определяем переменную РУТ и подключаем роутер*/
define('ROOT',dirname('__FILE__'));
//print_r(ROOT);
require_once(ROOT.'/components/Router.php');
require_once ROOT.'/components/DAO.php';

$alpha = new Router();
$alpha->run();
?>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="resources/js/materialize.js"></script>
</body>
</html>
