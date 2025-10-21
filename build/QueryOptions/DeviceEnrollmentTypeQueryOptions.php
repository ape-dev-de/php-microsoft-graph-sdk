<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceEnrollmentType resources
 *
 * Available select fields:
 */
class DeviceEnrollmentTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceEnrollmentType
     */

    /**
     * Select specific DeviceEnrollmentType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
