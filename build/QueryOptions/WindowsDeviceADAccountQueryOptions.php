<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsDeviceADAccount resources
 *
 * Available select fields:
 * - domainName
 * - userName
 */
class WindowsDeviceADAccountQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsDeviceADAccount
     */
    public const FIELD_DOMAIN_NAME = 'domainName';
    public const FIELD_USER_NAME = 'userName';

    /**
     * Select specific WindowsDeviceADAccount properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
