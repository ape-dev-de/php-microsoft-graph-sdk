<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppLogCollectionRequest resources
 *
 * Available select fields:
 */
class AppLogCollectionRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppLogCollectionRequest
     */

    /**
     * Select specific AppLogCollectionRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
