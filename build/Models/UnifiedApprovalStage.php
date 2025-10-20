<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedApprovalStage
 */
class UnifiedApprovalStage
{
    /**
     * The number of days that a request can be pending a response before it is automatically denied.
     */
    private ?float $approvalStageTimeOutInDays;

    /**
     * The escalation approvers for this stage when the primary approvers don't respond.
     */
    private array $escalationApprovers = [];

    /**
     * The time a request can be pending a response from a primary approver before it can be escalated to the escalation approvers.
     */
    private ?float $escalationTimeInMinutes;

    /**
     * Indicates whether the approver must provide justification for their reponse.
     */
    private ?bool $isApproverJustificationRequired;

    /**
     * Indicates whether escalation if enabled.
     */
    private ?bool $isEscalationEnabled;

    /**
     * The primary approvers of this stage.
     */
    private ?string $primaryApprovers;

    public function getApprovalStageTimeOutInDays(): ?float
    {
        return $this->approvalStageTimeOutInDays;
    }

    public function setApprovalStageTimeOutInDays(?float $approvalStageTimeOutInDays): self
    {
        $this->approvalStageTimeOutInDays = $approvalStageTimeOutInDays;
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

    public function getEscalationTimeInMinutes(): ?float
    {
        return $this->escalationTimeInMinutes;
    }

    public function setEscalationTimeInMinutes(?float $escalationTimeInMinutes): self
    {
        $this->escalationTimeInMinutes = $escalationTimeInMinutes;
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

    public function getPrimaryApprovers(): ?string
    {
        return $this->primaryApprovers;
    }

    public function setPrimaryApprovers(?string $primaryApprovers): self
    {
        $this->primaryApprovers = $primaryApprovers;
        return $this;
    }

}
