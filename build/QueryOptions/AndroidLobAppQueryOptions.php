<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidLobApp resources
 *
 * Available select fields:
 */
class AndroidLobAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidLobApp
     */

    /**
     * Select specific AndroidLobApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
