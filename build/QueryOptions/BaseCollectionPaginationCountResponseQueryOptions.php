<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BaseCollectionPaginationCountResponse resources
 *
 * Available select fields:
 */
class BaseCollectionPaginationCountResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BaseCollectionPaginationCountResponse
     */

    /**
     * Select specific BaseCollectionPaginationCountResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
