<?php

class database {
     public static $dbhost = "127.0.0.1";
     public static $dbname = "mvc";
     public static $dbuser = "root";
     public static $dbpass = "";

     public static function connect() {
          $pdo = new PDO('mysql:host=' . self::$dbhost . ';dbname=' . self::$dbname . ';charset=utf8', self::$dbuser, self::$dbpass);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $pdo;
     }

     public static function query($query, $params = array()) {
          $statement = self::connect()->prepare($query);
          $statement->execute($params);
          if (explode(' ', $query)[0] == 'SELECT') {
               $data = $statement->fetchAll();
               return $data;
          }
     }
}

?>
