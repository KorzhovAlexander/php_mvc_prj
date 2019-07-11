<?php

include_once ROOT.'/model/news.php';

class newsController
{
    public function actionIndex()
    {
        $newsList = news::getAllNews();
        require_once (ROOT.'/view/newsView.php');
        return true;
    }

    public function actionView($newsID)
    {

        $newsList=news::getNewsById($newsID);
        require_once (ROOT.'/view/newsView.php');
        return true;
    }
}