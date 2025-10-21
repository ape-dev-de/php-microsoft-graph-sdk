<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintEvent resources
 *
 * Available select fields:
 */
class PrintEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintEvent
     */

    /**
     * Select specific PrintEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
