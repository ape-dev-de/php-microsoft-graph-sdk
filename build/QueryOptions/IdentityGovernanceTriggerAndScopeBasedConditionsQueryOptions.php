<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTriggerAndScopeBasedConditions resources
 *
 * Available select fields:
 */
class IdentityGovernanceTriggerAndScopeBasedConditionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceTriggerAndScopeBasedConditions
     */

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
