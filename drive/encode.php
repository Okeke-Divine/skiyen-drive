<?php

$original_input = "<strong><em>Hello World!</em></strong>";
echo $original_input."<br>";

//encode html tags
$html_encoded =  htmlentities($original_input);
echo $html_encoded."<br>";


//decode html tags
echo html_entity_decode($html_encoded)."<br>";

?>