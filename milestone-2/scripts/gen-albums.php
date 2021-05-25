<?php

require_once __DIR__ . '/../.././milestone-1/database.php';


    $artist = empty($_GET['artist']) ? false : $_GET['artist'];

    // GET ALBUMS
    $albums = [];
    if($artist == false || $artist == 'all' ) {
        $albums = $database;
    } else {
        foreach($database as $album) {
            if ($album['author'] == $artist) {
                $albums[] = $album;
            }
        }
    }

    // GET artists
    $artists = [];
    foreach ($database as $album) {
        if (! in_array($album['author'], $artists)) {
            $artists[] = $album['author'];
        }
    }
    // FINAL RESULTS

    $results = [
        'albums' => $albums,
        'artists' => $artists
    ];

    header('Content-Type: application/json');


                    
    echo json_encode($results);
?>