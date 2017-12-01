<?php
function partial($templatePath, $rootDir) {
    $root = $rootDir."/";
    include($root.$templatePath.".php");
}
