<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActionResultPart
 */
class ActionResultPart
{
    /**
     * The error that occurred, if any, during the bulk operation.
     */
    private ?string $error;


    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

}
