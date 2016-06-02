<?php
/**
 * Created by PhpStorm.
 * User: mderoy
 * Date: 15-11-09
 * Time: 09:03
 */

namespace O2Web\BaseTranslator\Base;

abstract class AbstractProductTranslator implements InterfaceProductTranslator
{

    /**
     * Available getter
     */
    public $src;
    /*public $status;
    public $name;
    public $sku;
    public $price;
    public $qty;
    public $weight;
    public $tax_class_id;
    public $attribute_set;
    public $store;
    public $visibility;
    public $meta_title;
    public $meta_description;
    public $meta_keyword;*/


    /**
     * @param bool|false $partial
     * @return array
     */
    public function translate($partial = FALSE)
    {

        $array = array(
          'status' => $this->getStatus(),
          'name' => $this->getName(),
          'sku' => $this->getSku(),
          'price' => $this->getPrice(),
          'special_price' => $this->getSpecialPrice(),
          'special_from_date' => $this->getSpecialFromDate(),
          'special_to_date' => $this->getSpecialToDate(),
          'tier_price:B2B' => $this->getTierPrice(),
          'qty' => $this->getQty(),
          'weight' => $this->getWeight()
        );

        if (!$partial) {
            $array['type'] = $this->getType();
            $array['tax_class_id'] = $this->getTaxClassId();
            $array['attribute_set'] = $this->getAttributeSet();
            $array['store'] = $this->getStore();
            $array['visibility'] = $this->getVisibility();
            $array['meta_title'] = $this->getMetaTitle();
            $array['meta_description'] = $this->getMetaDescription();
            $array['meta_keyword'] = $this->getMetaKeyword();
            $array['image'] = $this->getImage();
            $array['image_label'] = $this->getImageLabel();
            $array['small_image'] = $this->getSmallImage();
            $array['small_image_label'] = $this->getSmallImageLabel();
            $array['thumbnail'] = $this->getThumbnail();
            $array['thumbnail_label'] = $this->getThumbnailLabel();
            $array['configurable_attributes'] = $this->getConfigurableAttribute();

            if (!empty($this->getConfigurableAttribute())) {
                $array[$this->getConfigurableAttribute()] = $this->getConfigurableAttributeValue();
            }
        }

        return $array;
    }

    public function getSrc()
    {
        return $this->src;
    }

    public function setSrc($value)
    {
        $this->src = $value;
        return $this;
    }
}