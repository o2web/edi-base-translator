<?php
/**
 * Created by PhpStorm.
 * User: fabriciobedoya
 * Date: 2016-05-30
 * Time: 4:39 PM
 */
require_once '_autoload.php';

require_once 'vendor/autoload.php';

require_once __DIR__ . '/../app/Mage.php'; //Path to Magento
require_once __DIR__ . '/../lib/Zend/Log.php'; //Path to Magento

require_once __DIR__ . '/vendor/dweeves/magmi/magmi/inc/magmi_defs.php';
require_once __DIR__ . '/vendor/dweeves/magmi/magmi/inc/magmi_loggers.php';
require_once __DIR__ . '/vendor/dweeves/magmi/magmi/inc/magmi_defs.php';
require_once __DIR__ . '/vendor/dweeves/magmi/magmi/plugins/inc/magmi_item_processor.php';
require_once __DIR__ . '/vendor/dweeves/magmi/magmi/integration/inc/magmi_datapump.php';

error_reporting(E_ALL);
