<?php


class newsController
{
    public function actionIndex()
    {
        echo "newsController actionIndex()";
        return true;
    }

    public function actionView()
    {
        echo "Просмотр одной новости";
        return true;
    }
}