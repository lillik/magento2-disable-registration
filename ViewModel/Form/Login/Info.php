<?php
declare(strict_types=1);

namespace Lillik\DisableRegistration\ViewModel\Form\Login;

use Lillik\DisableRegistration\Model\Url;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 *
 * @package Lillik\DisableRegistration
 *
 */
class Info implements ArgumentInterface
{
    /**
     * @var Url
     */
    private $url;

    /**
     * Info constructor.
     *
     * @param Url $url
     */
    public function __construct( Url $url )
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getContactUsUrl(): string
    {
        return $this->url->getContactUrl();
    }
}
