<?php
/**
 * @package   Maneza\Calculator\Block
 * @author    Ntabethemba Ntshoza
 * @date      11-03-2022
 * @copyright Copyright © 2022 Maneza F8
 */

namespace Maneza\Calculator\Block;

use Magento\Backend\Block\Template\Context;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Block\Product\Context as ProductContesx;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;

/**
 * Class CurrentProduct
 * @package Maneza\Calculator\Block
 */
class CurrentProduct extends Template
{
    /**
     * Core registry
     *
     * @var Registry
     */
    protected $_coreRegistry;


    /**
     * CurrentProduct Constructor
     *
     * @param Context $context
     * @param ProductContesx $contexts
     * @param Registry $registry
     * @param array $data
     */
    public function __construct(
        Context        $context,
        ProductContesx $contexts,
        array          $data = []
    )
    {
        $this->_coreRegistry = $contexts->getRegistry();
        parent::__construct($context, $data);
    }

    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * Get product using core registry
     *
     * @return array collection
     */
    public function getProduct()
    {
        if (!$this->hasData('product')) {
            $this->setData('product', $this->_coreRegistry->registry('product'));
        }

        return $this->getData('product');
    }

}