<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentActivity resources
 *
 * Available select fields:
 */
class ContentActivityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ContentActivity
     */

    /**
     * Select specific ContentActivity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
