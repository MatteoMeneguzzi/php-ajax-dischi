<?php

require_once __DIR__ . '/../.././milestone-1/database.php';

    header('Content-Type: application/json');


                    
    $artists = array_map( function($album) {
  // return animal whose name is more than 3 characters
  
    return $album['author'];
  
    }, $database);

    // foreach ($database as $album) {
    //     // var_dump($album['author']);
        
    // }

    // $artists = $albums['author'];
  
    

  
   
    header('Content-Type: application/json');


                    
    echo json_encode($artists);
?>