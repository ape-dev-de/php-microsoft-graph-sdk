<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Post resources
 *
 * Available select fields:
 */
class PostQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Post
     */

    /**
     * Select specific Post properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
