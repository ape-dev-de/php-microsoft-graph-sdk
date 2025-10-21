<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppRuleOperator resources
 *
 * Available select fields:
 */
class Win32LobAppRuleOperatorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppRuleOperator
     */

    /**
     * Select specific Win32LobAppRuleOperator properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
