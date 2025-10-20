<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceCompliancePolicySettingStateSummaryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceCompliancePolicySettingStateSummaryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceCompliancePolicySettingStateSummaryCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceCompliancePolicySettingStateSummaryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
