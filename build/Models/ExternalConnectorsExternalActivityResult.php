<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalActivityResult
 */
class ExternalConnectorsExternalActivityResult
{
    /**
     * Error information that explains the failure to process an external activity.
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
