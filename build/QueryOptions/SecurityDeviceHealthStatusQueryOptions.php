<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDeviceHealthStatus resources
 *
 * Available select fields:
 */
class SecurityDeviceHealthStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDeviceHealthStatus
     */

    /**
     * Select specific SecurityDeviceHealthStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
