<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyScopeBase resources
 *
 * Available select fields:
 * - activities
 * - executionMode
 * - locations
 * - policyActions
 */
class PolicyScopeBaseQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITIES = 'activities';
    public const FIELD_EXECUTION_MODE = 'executionMode';
    public const FIELD_LOCATIONS = 'locations';
    public const FIELD_POLICY_ACTIONS = 'policyActions';

    /**
     * Select specific PolicyScopeBase properties
     * 
     * @param array<string> $select Use PolicyScopeBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
