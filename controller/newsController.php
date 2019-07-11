<?php


class newsController
{
    public function actionIndex()
    {
        echo "newsController actionIndex()";
        return true;
    }

    public function actionView($param)
    {
        echo "<h5>$param[0]</h5>";
        return true;
    }
}