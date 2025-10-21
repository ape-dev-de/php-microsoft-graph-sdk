<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Notebook resources
 *
 * Available select fields:
 */
class NotebookQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Notebook
     */

    /**
     * Select specific Notebook properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
