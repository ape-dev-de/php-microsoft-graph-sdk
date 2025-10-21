<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TodoTask resources
 *
 * Available select fields:
 */
class TodoTaskQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TodoTask
     */

    /**
     * Select specific TodoTask properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
