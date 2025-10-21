<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintUsage resources
 *
 * Available select fields:
 */
class PrintUsageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintUsage
     */

    /**
     * Select specific PrintUsage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
