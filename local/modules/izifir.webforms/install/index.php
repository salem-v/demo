<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\Application;
use Bitrix\Main\ORM\Entity;
use Izifir\Webforms\Models\FormTable;
use Bitrix\Main\Db;
use Bitrix\Main\EventManager;
use Izifir\Webforms\Events\Install as InstallEvents;

Loc::loadMessages(__FILE__);

require (__DIR__ . '/../lib/models/form.php');

class izifir_webforms extends CModule
{
    public $MODULE_ID = 'izifir.webforms';

    public function __construct()
    {
        $arVersion = [];
        require (__DIR__ . '/version.php');

        $this->MODULE_VERSION = $arVersion['VERSION'];
        $this->MODULE_VERSION_DATE = $arVersion['VERSION_DATE'];

        $this->PARTNER_NAME = 'IZIFIR';
        $this->PARTNER_URI = 'https://izifir.ru';

        $this->MODULE_NAME = Loc::getMessage('IZI.MOD.W_FORMS.INSTALL.MODULE_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('IZI.MOD.W_FORMS.INSTALL.MODULE_DESCRIPTION');
    }

    /**
     * @return void
     */
    public function InstallDB(): void
    {
        $connection = Application::getConnection();

        $formTable = Entity::getInstance(FormTable::class);
        if (!$connection->isTableExists($formTable->getDBTableName())) {
            $formTable->createDBTable();
        }
    }

    /**
     * @return void
     */
    public function InstallFiles(): void
    {
        CopyDirFiles($_SERVER['DOCUMENT_ROOT'] . '/local/modules/izifir.webforms/install/admin', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin/', true, true);
    }

    /**
     * @return void
     */
    public function installEvents(): void
    {
        $eventManager = EventManager::getInstance();

        $eventManager->registerEventHandler(
            'main',
            'OnBuildGlobalMenu',
            $this->MODULE_ID,
            InstallEvents::class,
            'buildGlobalMenuHAndler'
        );
    }

    /**
     * @return void
     */
    public function DoInstall(): void
    {
        $this->InstallDB();
        $this->InstallFiles();
        $this->InstallEvents();
        ModuleManager::registerModule($this->MODULE_ID);
    }

    /**
     * @return void
     * @throws Db\SqlQueryException
     */
    public function UnInstallDB(): void
    {
        $connection = Application::getConnection();

        $formTable = Entity::getInstance(FormTable::class);
        if ($connection->isTableExists($formTable->getDBTableName())) {
            $connection->dropTable($formTable->getDBTableName());
        }
    }

    /**
     * @return void
     */
    public function UnInstallFiles(): void
    {
        DeleteDirFiles($_SERVER['DOCUMENT_ROOT'] . '/local/modules/izifir.webforms/install/admin', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin/');
    }

    /**
     * @return void
     */
    public function UnInstallEvents(): void
    {
        $eventManager = EventManager::getInstance();

        $eventManager->unRegisterEventHandler(
            'main',
            'OnBuildGlobalMenu',
            $this->MODULE_ID,
            InstallEvents::class,
            'buildGlobalMenuHAndler'
        );
    }

    /**
     * @return void
     * @throws Db\SqlQueryException
     */
    public function DoUninstall(): void
    {
        $this->UnInstallDB();
        $this->UnInstallFiles();
        $this->UnInstallEvents();
        ModuleManager::unRegisterModule($this->MODULE_ID);
    }
}