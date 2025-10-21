<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppRuleType resources
 *
 * Available select fields:
 */
class Win32LobAppRuleTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppRuleType
     */

    /**
     * Select specific Win32LobAppRuleType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
