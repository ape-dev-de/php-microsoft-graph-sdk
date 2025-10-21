<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintDuplexMode resources
 *
 * Available select fields:
 */
class PrintDuplexModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintDuplexMode
     */

    /**
     * Select specific PrintDuplexMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
