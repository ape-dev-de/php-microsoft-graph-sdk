<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintMultipageLayout resources
 *
 * Available select fields:
 */
class PrintMultipageLayoutQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintMultipageLayout
     */

    /**
     * Select specific PrintMultipageLayout properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
