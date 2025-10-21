<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsDeviceAzureADAccount resources
 *
 * Available select fields:
 */
class WindowsDeviceAzureADAccountQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsDeviceAzureADAccount
     */

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
