<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CatalogMessageBroker\Model;

/**
 * Provide configuration required to setup communication between services
 */
class ServiceConfig
{
    /**
     * Catalog service name
     */
    public const SERVICE_NAME_CATALOG = 'catalog';

    /**
     * Variants service name
     */
    public const SERVICE_NAME_VARIANTS = 'variants';
}
