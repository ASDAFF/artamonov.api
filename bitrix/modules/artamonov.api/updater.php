<?php

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use Bitrix\Main\Loader;
use Bitrix\Main\Application;
use Bitrix\Main\Config\Option;

$moduleId = 'artamonov.api';
$db = Application::getConnection();

if (!Loader::IncludeModule($moduleId)) {
    return false;
}

// Get all params
$params = [];
$sql = 'SELECT NAME, VALUE, DESCRIPTION, SITE_ID FROM b_option WHERE MODULE_ID="' . $moduleId . '" ORDER BY SITE_ID DESC';
if ($result = $db->query($sql)) {
    while ($ar = $result->fetch()) {
        $params[$ar['NAME']] = $ar['VALUE'];
    }
}

// Update params
if ($params) {
    $sql = 'DELETE FROM b_option WHERE MODULE_ID="' . $moduleId . '"';
    $db->queryExecute($sql);
    foreach ($params as $code => $value) {
        Option::set($moduleId, $code, $value, '');
    }
}