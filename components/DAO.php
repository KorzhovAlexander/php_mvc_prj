<?php


abstract class DAO
{
    private static $connection;

    public static function getConnection()
    {

            $paramsPath=ROOT.'/config/dbconfig.php';
            $params=include($paramsPath);


            $dsn="mysql:host={$params['host']};dbname={$params['dbname']};charset={$params['charset']}";

            self::$connection=new PDO($dsn,$params['user'],$params['password']);

        return self::$connection;

    }
}