<?php


class news
{
    public static function getAllNews()
    {
        $host='localhost';
        $dbname='webapp';
        $user='phpmyadmin';
        $password='745263AA';
        $charset='UTF8';

        $db=new PDO("mysql:host=$host;dbname=$dbname;charset=$charset",$user,$password);

        $newsList = array();

        $result = $db->query("SELECT * FROM news");

        $i=0;
        while ($row=$result->fetch()){
            $newsList[$i]['id']=$row['id'];
            $newsList[$i]['title']=$row['title'];
            $newsList[$i]['news']=$row['news'];
            $i++;
        }
        return $newsList;
    }

    public static function getNewsById($idNews)
    {

    }
}