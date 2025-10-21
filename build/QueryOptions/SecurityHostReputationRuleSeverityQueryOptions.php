<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostReputationRuleSeverity resources
 *
 * Available select fields:
 */
class SecurityHostReputationRuleSeverityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostReputationRuleSeverity
     */

    /**
     * Select specific SecurityHostReputationRuleSeverity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
