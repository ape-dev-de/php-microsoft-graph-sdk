<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileLobApp resources
 *
 * Available select fields:
 */
class MobileLobAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileLobApp
     */

    /**
     * Select specific MobileLobApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
