<?php
require_once "settings.php";
require_once "classes/Albums.php";
//require_once "classes/Artist.php";
//require_once "classes/Genre.php";

try {
    //Load data & convert to PHP Arrays
    $albumsRawData = file_get_contents(DATA_PATH . "albums.json");
    $albumsRawList = json_decode($albumsRawData, true);


    // //Create new instance for class & add students
    $Albums = new Albums();
    foreach ($albumsRawList as $albumRaw) {
        $Albums->addAlbums($albumRaw);
    }

    // //Get variables for template
    $albuminfo = $Albums->getAlbums();
    $totalAlbums = $Albums->getTotalAlbums();
} catch (Exception $e) {
    //Set error variable for template
    $error = "Oops, try to fix your error please: " .
        $e->getMessage() . " on line " . $e->getLine() . " of " .
        $e->getFile();
}

