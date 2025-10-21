<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TaskStatus resources
 *
 * Available select fields:
 */
class TaskStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TaskStatus
     */

    /**
     * Select specific TaskStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
