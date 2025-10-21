<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeRuleMembers resources
 *
 * Available select fields:
 */
class AttributeRuleMembersQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttributeRuleMembers
     */

    /**
     * Select specific AttributeRuleMembers properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
