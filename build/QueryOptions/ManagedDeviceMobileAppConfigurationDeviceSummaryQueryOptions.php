<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceMobileAppConfigurationDeviceSummary resources
 *
 * Available select fields:
 */
class ManagedDeviceMobileAppConfigurationDeviceSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedDeviceMobileAppConfigurationDeviceSummary
     */

    /**
     * Select specific ManagedDeviceMobileAppConfigurationDeviceSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
