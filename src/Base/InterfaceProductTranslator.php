<?php
/**
 * Created by PhpStorm.
 * User: mderoy
 * Date: 15-11-11
 * Time: 16:58
 */

namespace O2Web\BaseTranslator\Base;

interface InterfaceProductTranslator extends InterfaceTranslator
{
    public function getType();

    public function getStore();

    public function getStatus();

    public function getName();

    public function getSku();

    public function getAttributeSet();

    public function getConfigurableAttribute();

    public function getConfigurableAttributeValue();

    public function getPrice();

    public function getSpecialPrice();

    public function getSpecialFromDate();

    public function getSpecialToDate();

    public function getTierPrice();

    public function getQty();

    public function getWeight();

    public function getTaxClassId();

    public function getVisibility();

    public function getMetaTitle();

    public function getMetaDescription();

    public function getMetaKeyword();

    public function getCategories();

    public function getImage();

    public function getImageLabel();

    public function getSmallImage();

    public function getSmallImageLabel();

    public function getThumbnail();

    public function getThumbnailLabel();
}