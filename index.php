<?php require 'view/temp/header.php'?>
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
<?php require 'view/temp/footer.php'?>

