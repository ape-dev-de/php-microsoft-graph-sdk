<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AirPrintSettings
 */
class AirPrintSettings
{
    public function __construct(
        /**  */
        public ?string $incompatiblePrinters = null
    ) {}
}
