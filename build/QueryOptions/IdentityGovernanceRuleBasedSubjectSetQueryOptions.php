<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceRuleBasedSubjectSet resources
 *
 * Available select fields:
 * - rule
 */
class IdentityGovernanceRuleBasedSubjectSetQueryOptions extends QueryOptions
{
    public const FIELD_RULE = 'rule';

    /**
     * Select specific IdentityGovernanceRuleBasedSubjectSet properties
     * 
     * @param array<string> $select Use IdentityGovernanceRuleBasedSubjectSetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
