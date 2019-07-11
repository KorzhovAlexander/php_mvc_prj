<?php


class newsController
{
    public function actionIndex()
    {
        echo "newsController actionIndex()";
        return true;
    }

    public function actionView($newsID)
    {
        echo "<h5>$newsID</h5>";
        return true;
    }
}