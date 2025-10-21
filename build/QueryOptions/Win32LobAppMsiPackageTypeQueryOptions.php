<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppMsiPackageType resources
 *
 * Available select fields:
 */
class Win32LobAppMsiPackageTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppMsiPackageType
     */

    /**
     * Select specific Win32LobAppMsiPackageType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
