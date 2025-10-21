<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchBookmark resources
 *
 * Available select fields:
 */
class SearchBookmarkQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchBookmark
     */

    /**
     * Select specific SearchBookmark properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
