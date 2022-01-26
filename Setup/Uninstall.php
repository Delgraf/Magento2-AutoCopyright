<?php
/**
 * Copyright © Delgraf. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Delgraf\AutoCopyright\Setup;

use Magento\Config\Model\ResourceModel\Config\Data\CollectionFactory as ConfigCollectionFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UninstallInterface;

class Uninstall implements UninstallInterface
{
    /**
     * Module section path
     */
    const SECTION_PATH = 'delgraf_autocopyright';

    /**
     * @var ConfigCollectionFactory
     */
    protected $_configCollectionFactory;

    /**
     * @param ConfigCollectionFactory $configCollectionFactory
     */
    public function __construct(
        ConfigCollectionFactory $configCollectionFactory
    ) {
        $this->_configCollectionFactory = $configCollectionFactory;
    }

    /**
     * Uninstall schema
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function uninstall(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();
        $this->_removeConfig();
        $setup->endSetup();
    }

    /**
     * Remove module configuration
     * 
     * @return void
     */
    private function _removeConfig()
    {
        /** @var \Magento\Config\Model\ResourceModel\Config\Data\Collection $collection */
        $collection = $this->_configCollectionFactory->create();
        $collection->addPathFilter(self::SECTION_PATH);
        foreach ($collection as $config) {
            $config->delete();
        }
    }
}
