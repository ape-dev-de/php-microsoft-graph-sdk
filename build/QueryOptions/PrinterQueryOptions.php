<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Printer resources
 *
 * Available select fields:
 */
class PrinterQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Printer
     */

    /**
     * Select specific Printer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
