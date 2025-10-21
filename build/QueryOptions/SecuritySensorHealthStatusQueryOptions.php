<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySensorHealthStatus resources
 *
 * Available select fields:
 */
class SecuritySensorHealthStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySensorHealthStatus
     */

    /**
     * Select specific SecuritySensorHealthStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
