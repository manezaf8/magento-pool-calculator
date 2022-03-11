<?php
/**
 * @package   Maneza\Calculator\Block\Product
 * @author    Ntabethemba Ntshoza
 * @date      11-03-2022
 * @copyright Copyright © 2022 Maneza F8
 */

namespace Maneza\Calculator\Block\Product;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Block\Product\Context;
use Magento\Catalog\Block\Product\View;
use Magento\Catalog\Helper\Product;
use Magento\Catalog\Model\ProductTypes\ConfigInterface;
use Magento\Customer\Model\Session;
use Magento\Framework\Json\EncoderInterface as JsonEncoderInterface;
use Magento\Framework\Filesystem\Driver\File;
use Magento\Framework\Locale\FormatInterface;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Framework\Stdlib\StringUtils;
use Magento\Framework\Url\EncoderInterface;

/**
 * Class Calculator
 * @package Maneza\Calculator\Block\Product
 */
class Calculator extends View
{
    /**
     * @var Context
     */
    public $urlBuilder;

    /**
     * @var StoreManagerContext
     */
    public $storeManager;

    /**
     * @var File
     */
    protected $_fileDriver;

    /**
     * @var ObjectManagerInterface
     */
    protected $_objectManager;

    /**
     * Calculator Constructor
     *
     * @param Context $context
     * @param EncoderInterface $urlEncoder
     * @param JsonEncoderInterface $jsonEncoder
     * @param StringUtils $string
     * @param Product $productHelper
     * @param ConfigInterface $productTypeConfig
     * @param FormatInterface $localeFormat
     * @param Session $customerSession
     * @param ProductRepositoryInterface $productRepository
     * @param PriceCurrencyInterface $priceCurrency
     * @param File $fileDriver
     * @param ObjectManagerInterface $objectManager
     * @param array $data
     */
    public function __construct(
        Context                    $context,
        EncoderInterface           $urlEncoder,
        JsonEncoderInterface       $jsonEncoder,
        StringUtils                $string,
        Product                    $productHelper,
        ConfigInterface            $productTypeConfig,
        FormatInterface            $localeFormat,
        Session                    $customerSession,
        ProductRepositoryInterface $productRepository,
        PriceCurrencyInterface     $priceCurrency,
        File                       $fileDriver,
        ObjectManagerInterface     $objectManager,
        array                      $data = []
    )
    {

        $this->urlBuilder = $context->getUrlBuilder();
        $this->storeManager = $context->getStoreManager();
        $this->_fileDriver = $fileDriver;
        $this->_objectManager = $objectManager;
        parent::__construct($context,
            $urlEncoder,
            $jsonEncoder,
            $string,
            $productHelper,
            $productTypeConfig,
            $localeFormat,
            $customerSession,
            $productRepository,
            $priceCurrency,
            $data
        );
    }
}
