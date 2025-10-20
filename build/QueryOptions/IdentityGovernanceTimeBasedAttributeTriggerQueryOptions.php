<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTimeBasedAttributeTrigger resources
 *
 * Available select fields:
 * - offsetInDays
 * - timeBasedAttribute
 */
class IdentityGovernanceTimeBasedAttributeTriggerQueryOptions extends QueryOptions
{
    public const FIELD_OFFSET_IN_DAYS = 'offsetInDays';
    public const FIELD_TIME_BASED_ATTRIBUTE = 'timeBasedAttribute';

    /**
     * Select specific IdentityGovernanceTimeBasedAttributeTrigger properties
     * 
     * @param array<string> $select Use IdentityGovernanceTimeBasedAttributeTriggerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
