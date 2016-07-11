# Edi base translator

Projet Magento based to generate EDI files and others exporters/importers which work beside magento but using magmi as tool to connect with Magento.

Moreover, the project's goal is to provide to developpers a base to start scripts to connect with others systems.

## Installation

To install the package create a `composer.json` custom, using any text editor, below an example which install  :

```
{
  "name": "project-name/title",
  "type": "project",
  "description": "",
  "repositories": [
    {
      "type": "composer",
      "url": "https://satis.o2web.ca"
    }
  ],
  "require": {
    "php": ">=5.4.0",
    "dweeves/magmi": "@stable",
    "o2web/edi-base-translator": "dev-master"
  },
  "autoload": {
    "psr-4": {
      "Project-name\\": "src/"
    }
  },
  "scripts": {
    "post-update-cmd": [
      "O2Web\\BaseTranslator\\Installer\\Installer::postInstall"
    ]
  }
}

```

```
config/
src/
vendor/
_autoload.php
bootstrap.php
console.php
```

```
 "autoload": {
    "psr-4": {
      "Dadhri\\": "src/"
    }
  },
```

**1st step:**

``` 
<?php
namespace Dadhri\Command\Sales;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Dadhri\Export\ExportOrder;
use Symfony\Component\Console\Helper\Table;

class OrderExportCommand extends Command
{
    /**
     * Configure command
     */
    protected function configure()
    {
        $this
          ->setName('export:order')
          ->setDescription('Dadhri: Export order using EDI format')
          ->addArgument(
            'date',
            InputArgument::OPTIONAL,
            'Date orders to be exported (format : Ymd)'
          )
          ->addOption(
            'env',
            null,
            InputOption::VALUE_REQUIRED,
            'Environment dev / prod',
            'dev'
          );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        ...
        $output->writeln('Exporting orders process has finished!');
    }
}

```

 
**2nd step:**

`php console.php`

```
#!/usr/bin/env php
<?php

if (php_sapi_name() !== 'cli') {
    die("You have to call this script in command line");
}

error_reporting(E_ALL);

require_once __DIR__ . '/bootstrap.php';

$application = new Application();

$application->add(new \Dadhri\Command\Catalog\ProductImportCsvCommand());

$application->run();

```

## Magmi


```
vendor/dweeves/magmi/magmi/conf/
```


```
[DATABASE]
dbname=fricote_dev
host=localhost
user=root
password=root
```

### Using Magento/Magmi inside our project


```
$this->base_path_mage = \Mage::getBaseDir('base');

$result = \Mage::getModel('sales/order')->load($order_id);
```

Magmi :

```
$dataPump = \Magmi_DataPumpFactory::getDataPumpInstance('productimport');

$dataPump->beginImportSession("default", "create");

$dataPump->endImportSession();
```




