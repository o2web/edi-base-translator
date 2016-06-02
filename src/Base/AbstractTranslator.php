<?php
/**
 * Created by PhpStorm.
 * User: mderoy
 * Date: 15-11-12
 * Time: 10:09
 */

namespace O2Web\BaseTranslator\Base;

use Exception;

abstract class AbstractTranslator implements InterfaceTranslator
{
    /**
     * @return mixed
     * @throws Exception
     */
    public function getSrc()
    {
        if (empty($this->src)) {
            throw new Exception('Source data not set');
        }
        return $this->src;
    }

    /**
     * @param mixed $src
     * @return $this
     */
    public function setSrc($src)
    {
        $this->src = $src;
        return $this;
    }

}