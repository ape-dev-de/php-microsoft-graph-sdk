<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyLocationUrl resources
 *
 * Available select fields:
 */
class PolicyLocationUrlQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PolicyLocationUrl
     */

    /**
     * Select specific PolicyLocationUrl properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
