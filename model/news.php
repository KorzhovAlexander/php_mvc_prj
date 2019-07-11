<?php



class news
{
    private static function DBdateToArray($DBdate)
    {
        $newsList = array();

        $i=0;
        while ($row=$DBdate->fetch()){
            $newsList[$i]['id']=$row['id'];
            $newsList[$i]['title']=$row['title'];
            $newsList[$i]['news']=$row['news'];
            $i++;
        }

        return $newsList;
    }

    public static function getAllNews()
    {
        $db=DAO::getConnection();
        $result = $db->query("SELECT * FROM news");

        return self::DBdateToArray($result);
    }

    public static function getNewsById($idNews)
    {
        $idNews=intval($idNews);
        $db=DAO::getConnection();
        $stm=$db->prepare("SELECT * FROM news where id=?");
        $stm->execute(array($idNews));

        return self::DBdateToArray($stm);
    }
}