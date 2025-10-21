<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosLobApp resources
 *
 * Available select fields:
 */
class IosLobAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosLobApp
     */

    /**
     * Select specific IosLobApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
