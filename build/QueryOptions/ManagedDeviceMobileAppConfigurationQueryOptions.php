<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceMobileAppConfiguration resources
 *
 * Available select fields:
 */
class ManagedDeviceMobileAppConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedDeviceMobileAppConfiguration
     */

    /**
     * Select specific ManagedDeviceMobileAppConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
