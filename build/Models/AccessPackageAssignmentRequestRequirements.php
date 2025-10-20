<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequestRequirements
 */
class AccessPackageAssignmentRequestRequirements
{
    /**
     * Indicates whether the requestor is allowed to set a custom schedule.
     */
    private ?bool $allowCustomAssignmentSchedule;

    /**
     * Indicates whether a request to add must be approved by an approver.
     */
    private ?bool $isApprovalRequiredForAdd;

    /**
     * Indicates whether a request to update must be approved by an approver.
     */
    private ?bool $isApprovalRequiredForUpdate;

    /**
     * Indicates whether requestors must justify requesting access to an access package.
     */
    private ?bool $isRequestorJustificationRequired;

    /**
     * The description of the policy that the user is trying to request access using.
     */
    private ?string $policyDescription;

    /**
     * The display name of the policy that the user is trying to request access using.
     */
    private ?string $policyDisplayName;

    /**
     * The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request.
     */
    private ?string $policyId;

    /**
     * Schedule restrictions enforced, if any.
     */
    private ?string $schedule;

    /**
     */
    private ?string $questions;

    public function getAllowCustomAssignmentSchedule(): ?bool
    {
        return $this->allowCustomAssignmentSchedule;
    }

    public function setAllowCustomAssignmentSchedule(?bool $allowCustomAssignmentSchedule): self
    {
        $this->allowCustomAssignmentSchedule = $allowCustomAssignmentSchedule;
        return $this;
    }

    public function getIsApprovalRequiredForAdd(): ?bool
    {
        return $this->isApprovalRequiredForAdd;
    }

    public function setIsApprovalRequiredForAdd(?bool $isApprovalRequiredForAdd): self
    {
        $this->isApprovalRequiredForAdd = $isApprovalRequiredForAdd;
        return $this;
    }

    public function getIsApprovalRequiredForUpdate(): ?bool
    {
        return $this->isApprovalRequiredForUpdate;
    }

    public function setIsApprovalRequiredForUpdate(?bool $isApprovalRequiredForUpdate): self
    {
        $this->isApprovalRequiredForUpdate = $isApprovalRequiredForUpdate;
        return $this;
    }

    public function getIsRequestorJustificationRequired(): ?bool
    {
        return $this->isRequestorJustificationRequired;
    }

    public function setIsRequestorJustificationRequired(?bool $isRequestorJustificationRequired): self
    {
        $this->isRequestorJustificationRequired = $isRequestorJustificationRequired;
        return $this;
    }

    public function getPolicyDescription(): ?string
    {
        return $this->policyDescription;
    }

    public function setPolicyDescription(?string $policyDescription): self
    {
        $this->policyDescription = $policyDescription;
        return $this;
    }

    public function getPolicyDisplayName(): ?string
    {
        return $this->policyDisplayName;
    }

    public function setPolicyDisplayName(?string $policyDisplayName): self
    {
        $this->policyDisplayName = $policyDisplayName;
        return $this;
    }

    public function getPolicyId(): ?string
    {
        return $this->policyId;
    }

    public function setPolicyId(?string $policyId): self
    {
        $this->policyId = $policyId;
        return $this;
    }

    public function getSchedule(): ?string
    {
        return $this->schedule;
    }

    public function setSchedule(?string $schedule): self
    {
        $this->schedule = $schedule;
        return $this;
    }

    public function getQuestions(): ?string
    {
        return $this->questions;
    }

    public function setQuestions(?string $questions): self
    {
        $this->questions = $questions;
        return $this;
    }

}
