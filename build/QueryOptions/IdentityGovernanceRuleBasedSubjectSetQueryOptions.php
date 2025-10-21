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
    /**
     * Available select fields for IdentityGovernanceRuleBasedSubjectSet
     */
    public const FIELD_RULE = 'rule';

    /**
     * Select specific IdentityGovernanceRuleBasedSubjectSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
