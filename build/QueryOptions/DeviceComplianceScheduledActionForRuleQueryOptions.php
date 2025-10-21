<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceScheduledActionForRule resources
 *
 * Available select fields:
 * - ruleName
 * - scheduledActionConfigurations
 */
class DeviceComplianceScheduledActionForRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceComplianceScheduledActionForRule
     */
    public const FIELD_RULE_NAME = 'ruleName';
    public const FIELD_SCHEDULED_ACTION_CONFIGURATIONS = 'scheduledActionConfigurations';

    /**
     * Select specific DeviceComplianceScheduledActionForRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
