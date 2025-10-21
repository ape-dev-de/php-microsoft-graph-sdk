<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyBase resources
 *
 * Available select fields:
 */
class PolicyBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PolicyBase
     */

    /**
     * Select specific PolicyBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
