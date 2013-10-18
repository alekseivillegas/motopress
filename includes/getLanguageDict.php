<?php
require_once 'settings.php';

function getLanguageDict() {
    global $motopressSettings;
    $contents = json_decode(file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' .
        DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . $motopressSettings['lang']));
    return $contents->lang;
}