<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyLocationApplication resources
 *
 * Available select fields:
 */
class PolicyLocationApplicationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PolicyLocationApplication
     */

    /**
     * Select specific PolicyLocationApplication properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
