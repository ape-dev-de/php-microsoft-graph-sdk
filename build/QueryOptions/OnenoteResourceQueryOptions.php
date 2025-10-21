<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteResource resources
 *
 * Available select fields:
 */
class OnenoteResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenoteResource
     */

    /**
     * Select specific OnenoteResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
