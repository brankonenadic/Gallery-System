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

    $the_result_array = self::find_this_query("SELECT * FROM users WHERE id= '$user_id'");
    return !empty($the_result_array) ? array_shift($the_result_array)
: false;
  /*   return $user;if (!empty($the_result_array)) {
        $first_item = array_shift($the_result_array);
        return $first_item;
    } else {
        return false;
    } */
   /*  $sql = self::find_this_query("SELECT * FROM users WHERE id= '$user_id'");
    $user = mysqli_fetch_array($sql);
 
    return $user;
 */
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
    $the_object_array = array();
    while ($row = mysqli_fetch_array($result_set)) {
        $the_object_array[] = self::instantion($row);
    }
    return $the_object_array;
}

public static function instantion($find){
    $the_object = new self;
 /*    $the_object->id = $find['id'];
    $the_object->username = $find['username'];
    $the_object->password = $find['password'];
    $the_object->first_name = $find['first_name'];
    $the_object->last_name = $find['last_name']; */

    foreach ($find as $the_attribute => $value) {
        if ($the_object->has_the_attribute($the_attribute)) {
            $the_object->$the_attribute = $value;
        }
    }
    return $the_object;
}

private function has_the_attribute($the_attribute) {
    $object_property = get_object_vars($this);
   return array_key_exists($the_attribute, $object_property);
}

}






?>