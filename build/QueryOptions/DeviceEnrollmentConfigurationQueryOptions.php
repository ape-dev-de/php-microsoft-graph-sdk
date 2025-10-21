<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceEnrollmentConfiguration resources
 *
 * Available select fields:
 */
class DeviceEnrollmentConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceEnrollmentConfiguration
     */

    /**
     * Select specific DeviceEnrollmentConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
