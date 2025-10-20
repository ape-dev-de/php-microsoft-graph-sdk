<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceDeviceStatusCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceComplianceDeviceStatusCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceComplianceDeviceStatusCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceComplianceDeviceStatusCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
