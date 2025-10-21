<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintTask resources
 *
 * Available select fields:
 */
class PrintTaskQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintTask
     */

    /**
     * Select specific PrintTask properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
