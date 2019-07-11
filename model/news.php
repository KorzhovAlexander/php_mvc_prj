<?php



class news
{
    public static function getAllNews()
    {
        $db=DAO::getConnection();

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
        $idNews=intval($idNews);

        $db=DAO::getConnection();

        $stm=$db->prepare("SELECT * FROM news where id=?");
        $stm->execute(array($idNews));

        $stm->setFetchMode(PDO::FETCH_ASSOC);

        $result=$stm->fetch();

        return $result;
    }
}