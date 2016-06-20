<?php

namespace O2Web\BaseTranslator\Installer;

use Composer\Script\Event;

class Installer
{
    const CONFIG_DIR = 'config';
    const SOURCE_DIR = 'src';
    const LOG_DIR = 'log';
    const LIB_DIR = 'lib';

    const AUTOLOAD = '_autoload.php';
    const BOOTSTRAP = 'bootstrap.php';
    const CONSOLE = 'console.php';

    public static function postInstall(Event $event)
    {
        $composer = $event->getComposer();
        $vendorPath = $composer->getConfig()->get('vendor-dir');

        $projectPath = dirname($vendorPath);

        if (file_exists($projectPath . '/' . static::CONFIG_DIR)) {
            mkdir($projectPath . '/' . static::CONFIG_DIR, 0775);
            echo "Directory config has been created\r";
        }
        if (file_exists($vendorPath . '/' . static::SOURCE_DIR)) {
            mkdir($projectPath . '/' . static::SOURCE_DIR, 0775);
            echo "Directory source has been created\r";
        }
        if (file_exists($vendorPath . '/' . static::LOG_DIR)) {
            mkdir($projectPath . '/' . static::LOG_DIR, 0775);
            echo "Directory log has been created\r";
        }

        $source = dirname(__DIR__);

        if (file_exists($source . '/' . static::AUTOLOAD)) {
            copy($source . '/' . static::AUTOLOAD , $projectPath . '/' . static::AUTOLOAD);
            echo "Autoload file has been copied\r";
        }
        if (file_exists($source . '/' . static::BOOTSTRAP)) {
            copy($source . '/' . static::BOOTSTRAP , $projectPath . '/' . static::BOOTSTRAP);
            echo "Bootstrap file has been copied\r";
        }
        if (file_exists($source . '/' . static::CONSOLE)) {
            copy($source . '/' . static::CONSOLE , $projectPath . '/' . static::CONSOLE);
            echo "Console file has been copied\r";
        }


        echo "Installed";
    }

}