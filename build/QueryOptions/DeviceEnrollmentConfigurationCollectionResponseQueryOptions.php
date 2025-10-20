<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceEnrollmentConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceEnrollmentConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceEnrollmentConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceEnrollmentConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
