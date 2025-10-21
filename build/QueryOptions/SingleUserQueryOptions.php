<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SingleUser resources
 *
 * Available select fields:
 */
class SingleUserQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SingleUser
     */

    /**
     * Select specific SingleUser properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
