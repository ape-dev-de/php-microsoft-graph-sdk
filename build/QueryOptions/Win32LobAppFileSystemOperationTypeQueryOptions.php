<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppFileSystemOperationType resources
 *
 * Available select fields:
 */
class Win32LobAppFileSystemOperationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppFileSystemOperationType
     */

    /**
     * Select specific Win32LobAppFileSystemOperationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
