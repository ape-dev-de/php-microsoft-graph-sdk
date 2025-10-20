<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsFailureInfo
 */
class CallRecordsFailureInfo
{
    /**
     * Classification of why a call or portion of a call failed.
     */
    private ?string $reason;

    /**
     */
    private ?string $stage;

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    public function getStage(): ?string
    {
        return $this->stage;
    }

    public function setStage(?string $stage): self
    {
        $this->stage = $stage;
        return $this;
    }

}
