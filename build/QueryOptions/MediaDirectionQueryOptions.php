<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaDirection resources
 *
 * Available select fields:
 */
class MediaDirectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MediaDirection
     */

    /**
     * Select specific MediaDirection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
