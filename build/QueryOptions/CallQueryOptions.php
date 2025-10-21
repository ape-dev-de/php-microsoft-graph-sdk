<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Call resources
 *
 * Available select fields:
 */
class CallQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Call
     */

    /**
     * Select specific Call properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
