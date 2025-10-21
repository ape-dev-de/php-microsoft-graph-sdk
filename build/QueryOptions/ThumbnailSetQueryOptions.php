<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThumbnailSet resources
 *
 * Available select fields:
 */
class ThumbnailSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ThumbnailSet
     */

    /**
     * Select specific ThumbnailSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
