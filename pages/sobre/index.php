<?php 
$json_content = file_get_contents("https://www.freetogame.com/api/games");
$result = json_decode($json_content, true);

echo $result[0]["title"];
?>