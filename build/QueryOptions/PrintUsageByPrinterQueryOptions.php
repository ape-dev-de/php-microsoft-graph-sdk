<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintUsageByPrinter resources
 *
 * Available select fields:
 */
class PrintUsageByPrinterQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintUsageByPrinter
     */

    /**
     * Select specific PrintUsageByPrinter properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
