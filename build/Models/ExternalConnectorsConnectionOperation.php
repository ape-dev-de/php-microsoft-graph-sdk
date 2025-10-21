<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsConnectionOperation
 */
class ExternalConnectorsConnectionOperation
{
    /**
     * If status is failed, provides more information about the error that caused the failure.
     */
    private ?string $error;

    /**
     * Indicates the status of the asynchronous operation. Possible values are: unspecified, inprogress, completed, failed, unknownFutureValue.
     */
    private ?string $status;


    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
