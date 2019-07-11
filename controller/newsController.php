<?php

include_once ROOT.'/model/news.php';

class newsController
{
    public function actionIndex()
    {
        $newsList = news::getAllNews();
        print_r($newsList);
        echo "newsController actionIndex()";
        return true;
    }

    public function actionView($newsID)
    {

        $newsItem=news::getNewsById($newsID);
        print_r($newsItem);
        return true;
    }
}