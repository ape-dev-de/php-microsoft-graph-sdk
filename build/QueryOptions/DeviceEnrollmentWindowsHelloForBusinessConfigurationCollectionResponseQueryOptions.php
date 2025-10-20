<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceEnrollmentWindowsHelloForBusinessConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceEnrollmentWindowsHelloForBusinessConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceEnrollmentWindowsHelloForBusinessConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceEnrollmentWindowsHelloForBusinessConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
