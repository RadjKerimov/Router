<?php  

   class Router{

      public static function to(){
         $url = $_SERVER['REQUEST_URI'];
         
         $routers = [
            '/' => 'index',
            '/create' => 'create'
         ];

         if (array_key_exists($url, $routers)) {
            return include __DIR__ . '/view/' . $routers[$url] . '.view.php';
            exit();
         }else {
            return include __DIR__ . '/view/404.view.php';
            die;
         }
        
      } 

   }