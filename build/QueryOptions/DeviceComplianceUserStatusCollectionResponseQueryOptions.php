<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceUserStatusCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceComplianceUserStatusCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceComplianceUserStatusCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceComplianceUserStatusCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
