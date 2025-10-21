<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterCreateOperation
 */
class PrinterCreateOperation
{
    /**
     * The signed certificate created during the registration process. Read-only.
     */
    private ?string $certificate;

    /**
     * The created printer entity. Read-only.
     */
    private ?string $printer;


    public function getCertificate(): ?string
    {
        return $this->certificate;
    }

    public function setCertificate(?string $certificate): self
    {
        $this->certificate = $certificate;
        return $this;
    }

    public function getPrinter(): ?string
    {
        return $this->printer;
    }

    public function setPrinter(?string $printer): self
    {
        $this->printer = $printer;
        return $this;
    }

}
