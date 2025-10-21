<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppRestartBehavior resources
 *
 * Available select fields:
 */
class Win32LobAppRestartBehaviorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppRestartBehavior
     */

    /**
     * Select specific Win32LobAppRestartBehavior properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
