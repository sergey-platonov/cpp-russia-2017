<?php
function partial($templatePath) {
    $root = $_SERVER['DOCUMENT_ROOT']."/";
    include($root.$templatePath.".php");
}