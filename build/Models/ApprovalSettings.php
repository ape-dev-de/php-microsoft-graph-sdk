<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApprovalSettings
 */
class ApprovalSettings
{
    /**
     * One of SingleStage, Serial, Parallel, NoApproval (default). NoApproval is used when isApprovalRequired is false.
     */
    private ?string $approvalMode;

    /**
     * If approval is required, the one or two elements of this collection define each of the stages of approval. An empty array if no approval is required.
     */
    private array $approvalStages = [];

    /**
     * Indicates whether approval is required for requests in this policy.
     */
    private ?bool $isApprovalRequired;

    /**
     * Indicates whether approval is required for a user to extend their assignment.
     */
    private ?bool $isApprovalRequiredForExtension;

    /**
     * Indicates whether the requestor is required to supply a justification in their request.
     */
    private ?string $isRequestorJustificationRequired;


    public function getApprovalMode(): ?string
    {
        return $this->approvalMode;
    }

    public function setApprovalMode(?string $approvalMode): self
    {
        $this->approvalMode = $approvalMode;
        return $this;
    }

    public function getApprovalStages(): array
    {
        return $this->approvalStages;
    }

    public function setApprovalStages(array $approvalStages): self
    {
        $this->approvalStages = $approvalStages;
        return $this;
    }

    public function getIsApprovalRequired(): ?bool
    {
        return $this->isApprovalRequired;
    }

    public function setIsApprovalRequired(?bool $isApprovalRequired): self
    {
        $this->isApprovalRequired = $isApprovalRequired;
        return $this;
    }

    public function getIsApprovalRequiredForExtension(): ?bool
    {
        return $this->isApprovalRequiredForExtension;
    }

    public function setIsApprovalRequiredForExtension(?bool $isApprovalRequiredForExtension): self
    {
        $this->isApprovalRequiredForExtension = $isApprovalRequiredForExtension;
        return $this;
    }

    public function getIsRequestorJustificationRequired(): ?string
    {
        return $this->isRequestorJustificationRequired;
    }

    public function setIsRequestorJustificationRequired(?string $isRequestorJustificationRequired): self
    {
        $this->isRequestorJustificationRequired = $isRequestorJustificationRequired;
        return $this;
    }

}
