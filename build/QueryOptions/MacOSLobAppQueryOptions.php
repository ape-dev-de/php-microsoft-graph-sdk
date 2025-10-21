<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSLobApp resources
 *
 * Available select fields:
 */
class MacOSLobAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSLobApp
     */

    /**
     * Select specific MacOSLobApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
