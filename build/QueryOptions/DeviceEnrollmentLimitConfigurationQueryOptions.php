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
    public const FIELD_LIMIT = 'limit';

    /**
     * Select specific DeviceEnrollmentLimitConfiguration properties
     * 
     * @param array<string> $select Use DeviceEnrollmentLimitConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
