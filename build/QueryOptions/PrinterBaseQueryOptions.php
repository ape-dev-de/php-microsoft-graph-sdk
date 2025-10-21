<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterBase resources
 *
 * Available select fields:
 */
class PrinterBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrinterBase
     */

    /**
     * Select specific PrinterBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
