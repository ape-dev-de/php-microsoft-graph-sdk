<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventWebinarRegistrationConfiguration
 */
class VirtualEventWebinarRegistrationConfiguration
{
    /**
     */
    private ?bool $isManualApprovalEnabled;

    /**
     */
    private ?string $isWaitlistEnabled;

    public function getIsManualApprovalEnabled(): ?bool
    {
        return $this->isManualApprovalEnabled;
    }

    public function setIsManualApprovalEnabled(?bool $isManualApprovalEnabled): self
    {
        $this->isManualApprovalEnabled = $isManualApprovalEnabled;
        return $this;
    }

    public function getIsWaitlistEnabled(): ?string
    {
        return $this->isWaitlistEnabled;
    }

    public function setIsWaitlistEnabled(?string $isWaitlistEnabled): self
    {
        $this->isWaitlistEnabled = $isWaitlistEnabled;
        return $this;
    }

}
