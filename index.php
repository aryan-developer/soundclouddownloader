<?php


use Aryan\soundcloud\SoundCloud;

require_once "./vendor/autoload.php";
/**
 * Initialize
 */
$soundCloud = new SoundCloud();
/**
 * Search Music with Query And Get Result
 */
$musics = $soundCloud->searchMusic("tataloo man2");

/**
 * Get Music detail from Music ID
 */
var_dump(
    $soundCloud->getMusic(5453455)
);

/**
 * get Music Detail With SoundCloud Url
 */
var_dump(
    $soundCloud->getMusicWithUrl("https://soundcloud.com/bahramnouraei/daagh")
);

/**
 * Download with Music ID
 */
$soundCloud->downloadMusic($musics[0]['id']);
