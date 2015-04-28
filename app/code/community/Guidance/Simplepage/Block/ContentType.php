<?php
/**
 * @author      Guidance Magento Team <magento@guidance.com>
 * @category    Guidance
 * @package     Simplepage
 * @copyright   Copyright (c) 2015 Guidance Solutions (http://www.guidance.com)
 */

/**
 * Class Guidance_Simplepage_Block_ContentType
 *
 * @method float getContentType()
 * @method Guidance_Simplepage_Block_ContentType setContentType(string $value)
 */
class Guidance_Simplepage_Block_ContentType extends Mage_Core_Block_Abstract
{
    protected function _beforeToHtml()
    {
        $contentType = $this->getContentType();
        if (!is_null($this->getContentType())) {
            $this->getAction()->getResponse()->setHeader('Content-type', $contentType, true);
        }
        return $this;
    }
}