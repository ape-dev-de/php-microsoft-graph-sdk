<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageApprovalStage
 */
class AccessPackageApprovalStage
{
    /**
     * The number of days that a request can be pending a response before it is automatically denied.
     */
    private ?string $durationBeforeAutomaticDenial;

    /**
     * If escalation is required, the time a request can be pending a response from a primary approver.
     */
    private ?string $durationBeforeEscalation;

    /**
     * If escalation is enabled and the primary approvers do not respond before the escalation time, the escalationApprovers are the users who will be asked to approve requests.
     */
    private array $escalationApprovers = [];

    /**
     * The subjects, typically users, who are the fallback escalation approvers.
     */
    private array $fallbackEscalationApprovers = [];

    /**
     * The subjects, typically users, who are the fallback primary approvers.
     */
    private array $fallbackPrimaryApprovers = [];

    /**
     * Indicates whether the approver is required to provide a justification for approving a request.
     */
    private ?bool $isApproverJustificationRequired;

    /**
     * If true, then one or more escalationApprovers are configured in this approval stage.
     */
    private ?bool $isEscalationEnabled;

    /**
     * The subjects, typically users, who will be asked to approve requests. A collection of singleUser, groupMembers, requestorManager, internalSponsors, externalSponsors, or targetUserSponsors.
     * @var string[]
     */
    private array $primaryApprovers = [];


    public function getDurationBeforeAutomaticDenial(): ?string
    {
        return $this->durationBeforeAutomaticDenial;
    }

    public function setDurationBeforeAutomaticDenial(?string $durationBeforeAutomaticDenial): self
    {
        $this->durationBeforeAutomaticDenial = $durationBeforeAutomaticDenial;
        return $this;
    }

    public function getDurationBeforeEscalation(): ?string
    {
        return $this->durationBeforeEscalation;
    }

    public function setDurationBeforeEscalation(?string $durationBeforeEscalation): self
    {
        $this->durationBeforeEscalation = $durationBeforeEscalation;
        return $this;
    }

    public function getEscalationApprovers(): array
    {
        return $this->escalationApprovers;
    }

    public function setEscalationApprovers(array $escalationApprovers): self
    {
        $this->escalationApprovers = $escalationApprovers;
        return $this;
    }

    public function getFallbackEscalationApprovers(): array
    {
        return $this->fallbackEscalationApprovers;
    }

    public function setFallbackEscalationApprovers(array $fallbackEscalationApprovers): self
    {
        $this->fallbackEscalationApprovers = $fallbackEscalationApprovers;
        return $this;
    }

    public function getFallbackPrimaryApprovers(): array
    {
        return $this->fallbackPrimaryApprovers;
    }

    public function setFallbackPrimaryApprovers(array $fallbackPrimaryApprovers): self
    {
        $this->fallbackPrimaryApprovers = $fallbackPrimaryApprovers;
        return $this;
    }

    public function getIsApproverJustificationRequired(): ?bool
    {
        return $this->isApproverJustificationRequired;
    }

    public function setIsApproverJustificationRequired(?bool $isApproverJustificationRequired): self
    {
        $this->isApproverJustificationRequired = $isApproverJustificationRequired;
        return $this;
    }

    public function getIsEscalationEnabled(): ?bool
    {
        return $this->isEscalationEnabled;
    }

    public function setIsEscalationEnabled(?bool $isEscalationEnabled): self
    {
        $this->isEscalationEnabled = $isEscalationEnabled;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPrimaryApprovers(): array
    {
        return $this->primaryApprovers;
    }

    /**
     * @param string[] $primaryApprovers
     */
    public function setPrimaryApprovers(array $primaryApprovers): self
    {
        $this->primaryApprovers = $primaryApprovers;
        return $this;
    }

}
