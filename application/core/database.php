<?php
class DataBase{
  public static function connect($host = 'localhost', $user = 'root', $password = '', $db_name = 'newdesign') {
    return new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $password);
  }
}
?>