<?php

class UserClass {

    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;


public static function find_all_users() {

    return self::find_this_query("SELECT * FROM users");
    /* global $database;

$result_set = $database->query("SELECT * FROM users");
return $result_set; */

}

public static function get_user_by_id($user_id) {


    $sql = self::find_this_query("SELECT * FROM users WHERE id= '$user_id'");
    $user = mysqli_fetch_array($sql);
 
    return $user;

   /*  global $database;
    $sql = $database->query("SELECT * FROM users WHERE id= '$user_id'");
    $user = mysqli_fetch_array($sql);
 
    return $user; */
}

public static function get_id($username) {


    $sql = self::find_this_query("SELECT * FROM users WHERE username= '$username'");
    $row = mysqli_fetch_array($sql);
    $id = $row['id'];
    return $id;

 /*    global $database;
    $sql = $database->query("SELECT * FROM users WHERE username= '$username'");
    $row = mysqli_fetch_array($sql);
    $id = $row['id'];
    return $id; */
}

public static function find_this_query($sql){
    global $database;
    $result_set = $database->query($sql);
    return $result_set;
}

public static function instantion(){
    $the_object = new self;
    $the_object->id = $find['id'];
    $the_object->username = $find['username'];
    $the_object->password = $find['password'];
    $the_objectr->first_name = $find['first_name'];
    $the_object->last_name = $find['last_name'];
    return $the_object;
}


}






?>