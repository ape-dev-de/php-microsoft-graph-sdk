<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicySettingStateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceCompliancePolicySettingStateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceCompliancePolicySettingStateCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceCompliancePolicySettingStateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
