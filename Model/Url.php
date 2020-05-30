<?php
declare(strict_types=1);

namespace Lillik\DisableRegistration\Model;

use Magento\Framework\UrlInterface;

/**
 *
 * @package Lillik\DisableRegistration
 *
 */
class Url
{
    /**
     * Route for contact us page
     */
    public const ROUTE_CONTACT_US = 'contact';

    /**
     * @var UrlInterface
     */
    private $urlBuilder;

    /**
     * Url constructor.
     *
     * @param UrlInterface $urlBuilder
     */
    public function __construct( UrlInterface $urlBuilder )
    {
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * @return string
     */
    public function getContactUrl(): string
    {
        return $this->urlBuilder->getUrl(self::ROUTE_CONTACT_US);
    }
}