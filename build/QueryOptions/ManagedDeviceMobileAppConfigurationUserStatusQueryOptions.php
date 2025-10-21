<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceMobileAppConfigurationUserStatus resources
 *
 * Available select fields:
 */
class ManagedDeviceMobileAppConfigurationUserStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedDeviceMobileAppConfigurationUserStatus
     */

    /**
     * Select specific ManagedDeviceMobileAppConfigurationUserStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
