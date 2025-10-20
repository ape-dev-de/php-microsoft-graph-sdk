<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessingError
 */
class ProcessingError
{
    /**
     */
    private ?string $errorType;

    public function getErrorType(): ?string
    {
        return $this->errorType;
    }

    public function setErrorType(?string $errorType): self
    {
        $this->errorType = $errorType;
        return $this;
    }

}
