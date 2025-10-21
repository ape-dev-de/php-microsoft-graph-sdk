<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintUsageByUser resources
 *
 * Available select fields:
 */
class PrintUsageByUserQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintUsageByUser
     */

    /**
     * Select specific PrintUsageByUser properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
