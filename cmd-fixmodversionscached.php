<?php

$config = array();
$config["basepath"] = getcwd() . '/';
$_SERVER["SERVER_NAME"] = "mods.vintagestory.at";
define("DEBUG", 1);

include("lib/core.php");

$modids = $con->getCol("select modid from `mod`");

foreach ($modids as $modid) {
	updateGameVersionsCached($modid);
}
