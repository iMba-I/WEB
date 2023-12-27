<?php
class Services{
    public static function show() : array
    {
        $mysql = Database::connection();
        $query = "SELECT * FROM services_exported_imported";
        print_r($query);
        $result = $mysql->query($query);
        $arr = [];
        while ($row = $result->fetch_assoc())
        {
            $arr[] = $row;
        }
        return $arr;
    }
    public static function ById(int $id_) : array
    {
        $mysql = Database::connection();
        $id = mysqli_real_escape_string($mysql, $id_);
        $query = "SELECT * FROM services_exported_imported WHERE col_id = $id_";
        $result = $mysql->query($query);
        $arr = [];
        while ($row = $result->fetch_assoc())
        {
            $arr[] = $row;
        }
        return $arr;
    }

    public static function edit(int $col_id, int $id_worker, string $img_path, string $name, string $des, int $cost) : array
    {
        $mysql = Database::connection();
        $id_order = mysqli_real_escape_string($mysql,$col_id);
        $query1 = "SELECT * FROM services_exported_imported WHERE col_id = $col_id";
        $result = $mysql->query($query1);
        $row = $result->fetch_assoc();
        unlink($row['col_img_path']);
        $cost = mysqli_real_escape_string($mysql,$cost);
        $des = mysqli_real_escape_string($mysql,$des);
        $img_path = mysqli_real_escape_string($mysql,$img_path);
        $name = mysqli_real_escape_string($mysql,$name);
        $id_worker = mysqli_real_escape_string($mysql,$id_worker);
        unlink($row['col_img_path']);
        $img_path="/inc/catalogue_images/".$img_path;
        Services::delete($col_id);
        $query = "INSERT INTO services_exported_imported (col_id, col_img_path,col_name,col_id_worker ,col_description, col_cost) 
                        VALUES ($col_id , '$img_path', '$name', '$id_worker', '$des', '$cost')";
        $result = $mysql->query($query);
        if($result)
        {
            $response = ["check" => true];
            return $response;
        }
        else
        {
            $response = ["check" => false];
            return $response;
        }

    }

    public static function delete(int $col_id) : array{
        $mysql = Database::connection();
        $id = mysqli_real_escape_string($mysql,$col_id);
        $query = "SELECT * FROM services_exported_imported WHERE col_id = $col_id";
        print_r($query);
        $result = $mysql->query($query);
        $row = $result->fetch_assoc();
        unlink($row['col_img_path']);
        $query = "DELETE FROM services_exported_imported WHERE col_id = $col_id";
        $result = $mysql->query($query);
        if($result)
        {
            $response = ["check" => true];
            return $response;
        }
        else
        {
            $response = ["check" => false];
            return $response;
        }
    }

    public static function add(int $col_id, int $id_worker, string $img_path, string $name, string $des, int $cost) : array
    {
        $mysql = Database::connection();
        $col_id = mysqli_real_escape_string($mysql,$col_id);
        $cost = mysqli_real_escape_string($mysql,$cost);
        $des = mysqli_real_escape_string($mysql,$des);
        $img_path= mysqli_real_escape_string($mysql,$img_path);
        $name = mysqli_real_escape_string($mysql,$name);
        $id_worker = mysqli_real_escape_string($mysql,$id_worker);
        $img_path="/inc/catalogue_images/".$img_path;
        $query = "INSERT INTO services_exported_imported (col_id, col_img_path,col_name,col_id_worker ,col_description, col_cost) 
                        VALUES ($col_id , '$img_path', '$name', '$id_worker', '$des', '$cost')";
        $result = $mysql->query($query);
        if($result){
            $response = [
                "check" => true
            ];
            return $response;
        }else{
            $response = [
                "check" => false
            ];
            return $response;
        }
    }
}
?>