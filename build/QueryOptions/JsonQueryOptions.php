<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Json resources
 *
 * Available select fields:
 */
class JsonQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Json
     */

    /**
     * Select specific Json properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
