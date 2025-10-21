<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionEventStatus
 */
class SecurityRetentionEventStatus
{
    /**
     * The error if the status isn't successful.
     */
    private ?string $error;

    /**
     * The status of the distribution. The possible values are: pending, error, success, notAvaliable.
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
