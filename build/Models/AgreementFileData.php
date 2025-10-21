<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AgreementFileData
 */
class AgreementFileData
{
    /**
     * Data that represents the terms of use PDF document. Read-only.
     */
    private ?string $data;


    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;
        return $this;
    }

}
