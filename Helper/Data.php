<?php
/**
 * Copyright © Delgraf. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Delgraf\AutoCopyright\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    /**
     * Config path enabled
     */
    const CONFIG_PATH_ENABLED = 'delgraf_autocopyright/general/enabled';

    /**
     * Retrieve isEnabled flag
     *
     * @return boolean
     */
    public function isEnabled()
    {
        return $this->getConfigValue(self::CONFIG_PATH_ENABLED);
    }

    /**
     * Retrieve specific config value
     *
     * @param string $path
     * @return mixed
     */
    private function getConfigValue($path)
    {
        return $this->scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE);
    }
}
