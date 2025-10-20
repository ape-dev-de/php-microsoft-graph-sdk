<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceEnrollmentLimitConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceEnrollmentLimitConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceEnrollmentLimitConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceEnrollmentLimitConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
