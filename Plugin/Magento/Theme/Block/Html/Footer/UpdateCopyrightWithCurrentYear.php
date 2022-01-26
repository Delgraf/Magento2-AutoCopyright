<?php
/**
 * Copyright © Delgraf. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Delgraf\AutoCopyright\Plugin\Magento\Theme\Block\Html\Footer;

use Delgraf\AutoCopyright\Helper\Data as AutoCopyrightHelper;
use Magento\Theme\Block\Html\Footer; 

class UpdateCopyrightWithCurrentYear
{
    /**
     * @var AutoCopyrightHelper
     */
    protected $_helper;

    /**
     * @param AutoCopyrightHelper $helper
     */
    public function __construct(AutoCopyrightHelper $helper)
    {
        $this->_helper = $helper;
    }

    /**
     * @param Footer $subject
     * @param string $result
     * @return string $result
     */
    public function afterGetCopyright(Footer $subject, $result)
    {
        if ($this->_helper->isEnabled()) {
            $result = preg_replace('/YYYY/', date('Y'), $result);
        }
        return $result;
    }
}
