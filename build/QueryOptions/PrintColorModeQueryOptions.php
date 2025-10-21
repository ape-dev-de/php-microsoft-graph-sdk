<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintColorMode resources
 *
 * Available select fields:
 */
class PrintColorModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintColorMode
     */

    /**
     * Select specific PrintColorMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
