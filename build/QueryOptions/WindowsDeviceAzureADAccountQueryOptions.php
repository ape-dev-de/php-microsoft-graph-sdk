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
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific WindowsDeviceAzureADAccount properties
     * 
     * @param array<string> $select Use WindowsDeviceAzureADAccountQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
