<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintSettings
 */
class PrintSettings
{
    public function __construct(
        /** Specifies whether document conversion is enabled for the tenant. If document conversion is enabled, Universal Print service converts documents into a format compatible with the printer (xps to pdf) when needed. */
        public ?bool $documentConversionEnabled = null,
        /** Specifies settings that affect printer discovery when using Universal Print. */
        public ?string $printerDiscoverySettings = null
    ) {}
}
