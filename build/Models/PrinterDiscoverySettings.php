<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterDiscoverySettings
 */
class PrinterDiscoverySettings
{
    public function __construct(
        /**  */
        public ?AirPrintSettings $airPrint = null
    ) {}
}
