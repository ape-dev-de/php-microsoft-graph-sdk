<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintUsageByPrinter
 */
class PrintUsageByPrinter
{
    /**
     * The ID of the printer represented by these statistics.
     */
    private ?string $printerId;

    /**
     * The name of the printer represented by these statistics.
     */
    private ?string $printerName;


    public function getPrinterId(): ?string
    {
        return $this->printerId;
    }

    public function setPrinterId(?string $printerId): self
    {
        $this->printerId = $printerId;
        return $this;
    }

    public function getPrinterName(): ?string
    {
        return $this->printerName;
    }

    public function setPrinterName(?string $printerName): self
    {
        $this->printerName = $printerName;
        return $this;
    }

}
