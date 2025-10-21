<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeRuleMembers resources
 *
 * Available select fields:
 * - description
 * - membershipRule
 */
class AttributeRuleMembersQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttributeRuleMembers
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_MEMBERSHIP_RULE = 'membershipRule';

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
