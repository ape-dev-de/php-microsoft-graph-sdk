<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceEnrollmentLimitConfiguration resources
 *
 * Available select fields:
 * - limit
 */
class DeviceEnrollmentLimitConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceEnrollmentLimitConfiguration
     */
    public const FIELD_LIMIT = 'limit';

    /**
     * Select specific DeviceEnrollmentLimitConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
