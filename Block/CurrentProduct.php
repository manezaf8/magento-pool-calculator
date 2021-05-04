<?php
namespace Maneza\Calculator\Block;
use Magento\Catalog\Model\Product;

/**
 * Retrive current product..
 */
class CurrentProduct extends \Magento\Framework\View\Element\Template
{
     /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry;


    /**
     * Constructor
     *
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Catalog\Block\Product\Context $contexts
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */    
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,    
        \Magento\Catalog\Block\Product\Context $contexts,    
        array $data = []
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
        //return $this->_registry->registry('current_product');
        if (!$this->hasData('product')) {
            $this->setData('product', $this->_coreRegistry->registry('product'));
        }
        return $this->getData('product');
    }    
    
}