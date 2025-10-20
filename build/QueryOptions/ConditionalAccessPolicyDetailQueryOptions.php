<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessPolicyDetail resources
 *
 * Available select fields:
 * - conditions
 * - grantControls
 * - sessionControls
 */
class ConditionalAccessPolicyDetailQueryOptions extends QueryOptions
{
    public const FIELD_CONDITIONS = 'conditions';
    public const FIELD_GRANT_CONTROLS = 'grantControls';
    public const FIELD_SESSION_CONTROLS = 'sessionControls';

    /**
     * Select specific ConditionalAccessPolicyDetail properties
     * 
     * @param array<string> $select Use ConditionalAccessPolicyDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
