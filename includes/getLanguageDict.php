<?php
require_once 'settings.php';

function getLanguageDict() {
    global $motopressSettings;
    $contents = json_decode(file_get_contents($motopressSettings['plugin_root_url'].'/'.$motopressSettings['plugin_name'].'/lang/'.$motopressSettings['lang']));
    return $contents->lang;
}