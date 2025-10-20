<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationMemberTransitionDetails
 */
class MultiTenantOrganizationMemberTransitionDetails
{
    /**
     * Role of the tenant in the multitenant organization. The possible values are: owner, member, unknownFutureValue.
     */
    private ?string $desiredRole;

    /**
     * State of the tenant in the multitenant organization currently being processed. The possible values are: pending, active, removed, unknownFutureValue. Read-only.
     */
    private ?string $desiredState;

    /**
     * Details that explain the processing status if any. Read-only.
     */
    private ?string $details;

    /**
     * Processing state of the asynchronous job. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue. Read-only.
     */
    private ?string $status;

    public function getDesiredRole(): ?string
    {
        return $this->desiredRole;
    }

    public function setDesiredRole(?string $desiredRole): self
    {
        $this->desiredRole = $desiredRole;
        return $this;
    }

    public function getDesiredState(): ?string
    {
        return $this->desiredState;
    }

    public function setDesiredState(?string $desiredState): self
    {
        $this->desiredState = $desiredState;
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
