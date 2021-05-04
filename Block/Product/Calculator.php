<?php
namespace Maneza\Calculator\Block\Product;

class Calculator extends \Magento\Catalog\Block\Product\View
{
    public $urlBuilder;
    public $storeManager;
    public $pricecalculatorHelper;
    protected $_fileDriver;
    protected $_objectManager;
    
    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Magento\Framework\Url\EncoderInterface $urlEncoder,
        \Magento\Framework\Json\EncoderInterface $jsonEncoder,
        \Magento\Framework\Stdlib\StringUtils $string,
        \Magento\Catalog\Helper\Product $productHelper,
        \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig,
        \Magento\Framework\Locale\FormatInterface $localeFormat,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency,
        \Magento\Framework\Filesystem\Driver\File $fileDriver,
        \Magento\Framework\ObjectManagerInterface $objectManager,
        array $data = []
    ) {
        
        $this->urlBuilder = $context->getUrlBuilder();
        $this->storeManager = $context->getStoreManager();
        $this->_fileDriver = $fileDriver;
        $this->_objectManager = $objectManager;
        parent::__construct($context, $urlEncoder, $jsonEncoder, $string, $productHelper, $productTypeConfig, $localeFormat, $customerSession, $productRepository, $priceCurrency, $data);
    }
    
   
}
