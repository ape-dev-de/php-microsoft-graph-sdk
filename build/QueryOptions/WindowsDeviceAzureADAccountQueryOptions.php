<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsDeviceAzureADAccount resources
 *
 * Available select fields:
 * - userPrincipalName
 */
class WindowsDeviceAzureADAccountQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsDeviceAzureADAccount
     */
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific WindowsDeviceAzureADAccount properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
