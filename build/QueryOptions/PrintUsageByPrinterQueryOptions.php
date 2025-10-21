<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintUsageByPrinter resources
 *
 * Available select fields:
 * - printerId
 * - printerName
 */
class PrintUsageByPrinterQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintUsageByPrinter
     */
    public const FIELD_PRINTER_ID = 'printerId';
    public const FIELD_PRINTER_NAME = 'printerName';

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
