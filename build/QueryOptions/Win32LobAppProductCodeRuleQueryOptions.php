<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppProductCodeRule resources
 *
 * Available select fields:
 */
class Win32LobAppProductCodeRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppProductCodeRule
     */

    /**
     * Select specific Win32LobAppProductCodeRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
