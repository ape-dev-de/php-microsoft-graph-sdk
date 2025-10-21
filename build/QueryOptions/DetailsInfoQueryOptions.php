<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DetailsInfo resources
 *
 * Available select fields:
 */
class DetailsInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DetailsInfo
     */

    /**
     * Select specific DetailsInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
