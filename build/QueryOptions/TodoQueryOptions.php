<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Todo resources
 *
 * Available select fields:
 */
class TodoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Todo
     */

    /**
     * Select specific Todo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
