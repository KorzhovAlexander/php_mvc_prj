<?php

include_once ROOT.'/model/news.php';

class newsController
{
    public function actionIndex()
    {
        $newsList = array();
        $newsList = news::getAllNews();
        print_r($newsList);
        echo "newsController actionIndex()";
        return true;
    }

    public function actionView($newsID)
    {

        echo "<h5>$newsID</h5>";
        return true;
    }
}