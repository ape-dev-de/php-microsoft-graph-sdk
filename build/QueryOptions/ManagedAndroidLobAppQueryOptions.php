<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAndroidLobApp resources
 *
 * Available select fields:
 */
class ManagedAndroidLobAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAndroidLobApp
     */

    /**
     * Select specific ManagedAndroidLobApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
