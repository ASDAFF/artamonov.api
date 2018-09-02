<?php

use Bitrix\Main\Localization\Loc;

Loc::loadLanguageFile(__FILE__);

class artamonov_api extends CModule
{
    var $MODULE_ID = 'artamonov.api';
    
    public function __construct()
    {
        $this->MODULE_ID = 'artamonov.api';
        $this->MODULE_NAME = 'REST API';
        $this->MODULE_DESCRIPTION = 'Модуль помогает организовать программный интерфейс для внешних и внутренних приложений';
        $this->MODULE_VERSION = '3.5.2';
        $this->MODULE_VERSION_DATE = '2018-09-02 20:00:00';
        $this->PARTNER_NAME = 'Артамонов Денис';
        $this->PARTNER_URI = 'http://artamonov.pro/';
    }

    function DoInstall()
    {
        RegisterModule($this->MODULE_ID);
        $this->InstallFiles();
        $GLOBALS['APPLICATION']->IncludeAdminFile(Loc::getMessage('API_INSTALL_TITLE'), __DIR__ . '/step.php');
    }

    function DoUninstall()
    {
        $this->UnInstallFiles();
        UnRegisterModule($this->MODULE_ID);
        $GLOBALS['APPLICATION']->IncludeAdminFile(Loc::getMessage('API_UNINSTALL_TITLE'), __DIR__ . '/unstep.php');
    }

    function InstallFiles()
    {
        CopyDirFiles(__DIR__ . '/admin', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin', true, true);
        return true;
    }

    function UnInstallFiles()
    {
        DeleteDirFiles(__DIR__ . '/admin', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin');
        return true;
    }
}