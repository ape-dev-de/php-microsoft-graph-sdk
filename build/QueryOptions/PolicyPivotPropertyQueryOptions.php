<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyPivotProperty resources
 *
 * Available select fields:
 */
class PolicyPivotPropertyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PolicyPivotProperty
     */

    /**
     * Select specific PolicyPivotProperty properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
