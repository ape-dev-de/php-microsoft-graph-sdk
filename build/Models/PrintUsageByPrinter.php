<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintUsageByPrinter
 */
class PrintUsageByPrinter
{
    public function __construct(
        /** The ID of the printer represented by these statistics. */
        public ?string $printerId = null,
        /** The name of the printer represented by these statistics. */
        public ?string $printerName = null
    ) {}
}
