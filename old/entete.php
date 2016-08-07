<?php
function entete($title){
    return "<!DOCTYPE html>\n
<html xmlns='http://www.w3.org/1999/xhtml'>\n
<head>\n
    <title>".$title."</title>\n
    <meta content='html/text' charset='utf-8' />\n
    <link rel='stylesheet' type='text/css' href='style.css'>\n
    <script src='https://code.jquery.com/jquery-1.10.2.js'></script>\n
    <script type='text/javascript' src='affichagecategorie.js'></script>\n
</head>\n";
}
?>