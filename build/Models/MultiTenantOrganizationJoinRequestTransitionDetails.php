<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationJoinRequestTransitionDetails
 */
class MultiTenantOrganizationJoinRequestTransitionDetails
{
    /**
     * State of the tenant in the multitenant organization currently being processed. The possible values are: pending, active, removed, unknownFutureValue. Read-only.
     */
    private ?string $desiredMemberState;

    /**
     * Details that explain the processing status if any. Read-only.
     */
    private ?string $details;

    /**
     * Processing state of the asynchronous job. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue. Read-only.
     */
    private ?string $status;


    public function getDesiredMemberState(): ?string
    {
        return $this->desiredMemberState;
    }

    public function setDesiredMemberState(?string $desiredMemberState): self
    {
        $this->desiredMemberState = $desiredMemberState;
        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): self
    {
        $this->details = $details;
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
