<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppRule resources
 *
 * Available select fields:
 * - ruleType
 */
class Win32LobAppRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppRule
     */
    public const FIELD_RULE_TYPE = 'ruleType';

    /**
     * Select specific Win32LobAppRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
