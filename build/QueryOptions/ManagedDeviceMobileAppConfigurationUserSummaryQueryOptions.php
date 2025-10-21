<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceMobileAppConfigurationUserSummary resources
 *
 * Available select fields:
 */
class ManagedDeviceMobileAppConfigurationUserSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedDeviceMobileAppConfigurationUserSummary
     */

    /**
     * Select specific ManagedDeviceMobileAppConfigurationUserSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
