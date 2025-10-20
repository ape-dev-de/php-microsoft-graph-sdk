<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppMsiInformation resources
 *
 * Available select fields:
 * - packageType
 * - productCode
 * - productName
 * - productVersion
 * - publisher
 * - requiresReboot
 * - upgradeCode
 */
class Win32LobAppMsiInformationQueryOptions extends QueryOptions
{
    public const FIELD_PACKAGE_TYPE = 'packageType';
    public const FIELD_PRODUCT_CODE = 'productCode';
    public const FIELD_PRODUCT_NAME = 'productName';
    public const FIELD_PRODUCT_VERSION = 'productVersion';
    public const FIELD_PUBLISHER = 'publisher';
    public const FIELD_REQUIRES_REBOOT = 'requiresReboot';
    public const FIELD_UPGRADE_CODE = 'upgradeCode';

    /**
     * Select specific Win32LobAppMsiInformation properties
     * 
     * @param array<string> $select Use Win32LobAppMsiInformationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
