<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceScheduledActionForRuleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeviceComplianceScheduledActionForRuleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeviceComplianceScheduledActionForRuleCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceComplianceScheduledActionForRuleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
