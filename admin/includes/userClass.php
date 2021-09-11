<?php

class UserClass {


public static function find_all_users() {
    global $database;

$result_set = $database->query("SELECT * FROM users");
return $result_set;

}

public static function get_user_by_id($user_id) {
    global $database;
    $sql = $database->query("SELECT * FROM users WHERE id= '$user_id'");
    $user = mysqli_fetch_array($sql);
 
    return $user;
}

public static function get_id($username) {
    global $database;
    $sql = $database->query("SELECT * FROM users WHERE username= '$username'");
    $row = mysqli_fetch_array($sql);
    $id = $row['id'];
    return $id;
}






}






?>