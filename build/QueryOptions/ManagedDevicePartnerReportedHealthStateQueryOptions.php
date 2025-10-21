<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDevicePartnerReportedHealthState resources
 *
 * Available select fields:
 */
class ManagedDevicePartnerReportedHealthStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedDevicePartnerReportedHealthState
     */

    /**
     * Select specific ManagedDevicePartnerReportedHealthState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
