<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AirPrintSettings
 */
class AirPrintSettings
{
    /**
     */
    private ?string $incompatiblePrinters;


    public function getIncompatiblePrinters(): ?string
    {
        return $this->incompatiblePrinters;
    }

    public function setIncompatiblePrinters(?string $incompatiblePrinters): self
    {
        $this->incompatiblePrinters = $incompatiblePrinters;
        return $this;
    }

}
