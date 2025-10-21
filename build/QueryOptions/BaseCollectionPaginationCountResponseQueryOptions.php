<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BaseCollectionPaginationCountResponse resources
 *
 * Available select fields:
 * - @odata.count
 * - @odata.nextLink
 */
class BaseCollectionPaginationCountResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BaseCollectionPaginationCountResponse
     */
    public const FIELD_@ODATA.COUNT = '@odata.count';
    public const FIELD_@ODATA.NEXT_LINK = '@odata.nextLink';

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
