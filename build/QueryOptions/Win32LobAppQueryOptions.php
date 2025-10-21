<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobApp resources
 *
 * Available select fields:
 */
class Win32LobAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobApp
     */

    /**
     * Select specific Win32LobApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
