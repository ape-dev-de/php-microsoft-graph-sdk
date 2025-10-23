<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintSettings
 */
class PrintSettings
{
    /** Specifies whether document conversion is enabled for the tenant. If document conversion is enabled, Universal Print service converts documents into a format compatible with the printer (xps to pdf) when needed. */
    public ?bool $documentConversionEnabled = null;

    /** 
     * Specifies settings that affect printer discovery when using Universal Print.
     * @var PrinterDiscoverySettings|\stdClass|null
     */
    public mixed $printerDiscoverySettings = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['documentConversionEnabled'])) {
            $this->documentConversionEnabled = $data['documentConversionEnabled'];
        }
        if (isset($data['printerDiscoverySettings'])) {
            $this->printerDiscoverySettings = is_array($data['printerDiscoverySettings']) ? new PrinterDiscoverySettings($data['printerDiscoverySettings']) : $data['printerDiscoverySettings'];
        }
    }
}
