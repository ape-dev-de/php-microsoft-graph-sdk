<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppFileSystemRule resources
 *
 * Available select fields:
 */
class Win32LobAppFileSystemRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppFileSystemRule
     */

    /**
     * Select specific Win32LobAppFileSystemRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
