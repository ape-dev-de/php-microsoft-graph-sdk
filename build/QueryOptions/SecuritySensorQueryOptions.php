<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySensor resources
 *
 * Available select fields:
 */
class SecuritySensorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySensor
     */

    /**
     * Select specific SecuritySensor properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
