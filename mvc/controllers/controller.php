<?php

class Controller extends database {

     public static function CreateView($viewName) {
          require_once('./views/'. $viewName . '.php');
     }
}

?>
