<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TodoTaskList resources
 *
 * Available select fields:
 */
class TodoTaskListQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TodoTaskList
     */

    /**
     * Select specific TodoTaskList properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
