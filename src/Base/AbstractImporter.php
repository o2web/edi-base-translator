<?php

namespace Base;

use O2Web\BaseTranslator\Calculator;
use Exception;
use LengthException;
use Magmi_DataPumpFactory;

/**
 * Class Importer
 */
class AbstractImporter implements InterfaceImporter
{

    protected $connector;
    protected $url;
    protected $data;
    protected $c;
    protected $dp;
    protected $count;

    /**
     * @param InterfaceConnector $connector
     * @param Calculator $c
     * @param Magmi_DataPumpFactory $dp
     */
    public function __construct(
      InterfaceConnector $connector = NULL,
      Calculator $c = NULL,
      Magmi_DataPumpFactory $dp = NULL
    )
    {
        $this->connector = $connector;
        $this->c = $c;
        $this->dp = $dp;
    }

    /**
     * Set data
     */
    public function setData()
    {
    }

    /**
     * @return mixed
     */
    public function getData()
    {

        if (empty($this->data)) {
            throw new LengthException("Data cannot be empty", 1);
        }

        return $this->data;
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getPath()
    {
        if (empty($this->path)) {
            throw new Exception('Path not set');
        }

        return $this->path;
    }

    /**
     * @param mixed $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }
}