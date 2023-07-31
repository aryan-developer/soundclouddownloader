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
    $soundCloud->getMusic($musics[0]['id'])
);

/**
 * Download with Music ID
 */
$soundCloud->downloadMusic($musics[0]['id']);
