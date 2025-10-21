<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedIOSLobApp resources
 *
 * Available select fields:
 */
class ManagedIOSLobAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedIOSLobApp
     */

    /**
     * Select specific ManagedIOSLobApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
