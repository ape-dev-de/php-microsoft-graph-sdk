<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Request resources
 *
 * Available select fields:
 */
class RequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Request
     */

    /**
     * Select specific Request properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
