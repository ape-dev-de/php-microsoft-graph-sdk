<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThumbnailColumn resources
 *
 * Available select fields:
 */
class ThumbnailColumnQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ThumbnailColumn
     */

    /**
     * Select specific ThumbnailColumn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
