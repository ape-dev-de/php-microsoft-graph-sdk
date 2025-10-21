<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterDiscoverySettings
 */
class PrinterDiscoverySettings
{
    /**
     */
    private ?string $airPrint;


    public function getAirPrint(): ?string
    {
        return $this->airPrint;
    }

    public function setAirPrint(?string $airPrint): self
    {
        $this->airPrint = $airPrint;
        return $this;
    }

}
