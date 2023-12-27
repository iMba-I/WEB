<?php
class Workers{
    public static function show() : array
    {
        $mysql = Database::connection();
        $query = "SELECT *  FROM workers";
        $result = $mysql->query($query);
        $arr = [];
        while ($row = $result->fetch_assoc())
        {
            $arr[] = $row;
        }
        return $arr;
    }
}
?>