<?php
declare(strict_types=1);

namespace Lillik\DisableRegistration\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
/**
 *
 * @package Lillik\DisableRegistration
 *
 */
class Config implements ConfigInterface
{

    public const XML_PATH_CUSTOMER_REGISTRATION_ENABLE
        = 'customer/create_account/customer_registration_enable';

    public const XML_PATH_CUSTOMER_REGISTRATION_CAN_SHOW_INFO_BLOCK
        = 'customer/create_account/can_show_info_block';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {

        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return ScopeConfigInterface
     */
    private function getScopeConfig(): ScopeConfigInterface
    {
        return $this->scopeConfig;
    }

    /**
     * Return Config Value by XML Config Path
     * @param $path
     * @param $scopeType
     *
     * @return mixed
     */
    private function getValueByPath($path, $scopeType = ScopeInterface::SCOPE_STORE)
    {
        return $this->getScopeConfig()->getValue($path, $scopeType);
    }

    /**
     * @param string $scopeType
     *
     * @return bool
     */
    public function isEnable($scopeType = ScopeInterface::SCOPE_STORE)
    {
        return (bool)$this->getValueByPath(
            self::XML_PATH_CUSTOMER_REGISTRATION_ENABLE, $scopeType
        );
    }

    /**
     * @param string $scopeType
     *
     * @return bool
     */
    public function canShowBlockInfo($scopeType = ScopeInterface::SCOPE_STORE): bool
    {
        return (bool)$this->getValueByPath(
            self::XML_PATH_CUSTOMER_REGISTRATION_CAN_SHOW_INFO_BLOCK,
            $scopeType
        );
    }
}
