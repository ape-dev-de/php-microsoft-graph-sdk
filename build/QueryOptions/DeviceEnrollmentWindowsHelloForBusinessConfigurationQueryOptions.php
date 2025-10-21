<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceEnrollmentWindowsHelloForBusinessConfiguration resources
 *
 * Available select fields:
 */
class DeviceEnrollmentWindowsHelloForBusinessConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceEnrollmentWindowsHelloForBusinessConfiguration
     */

    /**
     * Select specific DeviceEnrollmentWindowsHelloForBusinessConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
