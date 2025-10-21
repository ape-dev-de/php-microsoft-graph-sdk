<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintFinishing resources
 *
 * Available select fields:
 */
class PrintFinishingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintFinishing
     */

    /**
     * Select specific PrintFinishing properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
