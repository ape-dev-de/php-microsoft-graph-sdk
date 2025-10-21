<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTriggerAndScopeBasedConditions resources
 *
 * Available select fields:
 * - scope
 * - trigger
 */
class IdentityGovernanceTriggerAndScopeBasedConditionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceTriggerAndScopeBasedConditions
     */
    public const FIELD_SCOPE = 'scope';
    public const FIELD_TRIGGER = 'trigger';

    /**
     * Select specific IdentityGovernanceTriggerAndScopeBasedConditions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
