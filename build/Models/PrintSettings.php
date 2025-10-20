<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintSettings
 */
class PrintSettings
{
    /**
     * Specifies whether document conversion is enabled for the tenant. If document conversion is enabled, Universal Print service converts documents into a format compatible with the printer (xps to pdf) when needed.
     */
    private ?bool $documentConversionEnabled;

    /**
     * Specifies settings that affect printer discovery when using Universal Print.
     */
    private ?string $printerDiscoverySettings;

    public function getDocumentConversionEnabled(): ?bool
    {
        return $this->documentConversionEnabled;
    }

    public function setDocumentConversionEnabled(?bool $documentConversionEnabled): self
    {
        $this->documentConversionEnabled = $documentConversionEnabled;
        return $this;
    }

    public function getPrinterDiscoverySettings(): ?string
    {
        return $this->printerDiscoverySettings;
    }

    public function setPrinterDiscoverySettings(?string $printerDiscoverySettings): self
    {
        $this->printerDiscoverySettings = $printerDiscoverySettings;
        return $this;
    }

}
