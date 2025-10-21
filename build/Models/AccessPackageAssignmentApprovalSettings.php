<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentApprovalSettings
 */
class AccessPackageAssignmentApprovalSettings
{
    /**
     * If false, then approval isn''t required for new requests in this policy.
     */
    private ?bool $isApprovalRequiredForAdd;

    /**
     * If false, then approval isn''t required for updates to requests in this policy.
     */
    private ?bool $isApprovalRequiredForUpdate;

    /**
     * If false, then requestor justification isn''t required for updates to requests in this policy.
     */
    private ?bool $isRequestorJustificationRequired;

    /**
     * If approval is required, the one, two or three elements of this collection define each of the stages of approval. An empty array is present if no approval is required.
     * @var string[]
     */
    private array $stages = [];


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

    /**
     * @return string[]
     */
    public function getStages(): array
    {
        return $this->stages;
    }

    /**
     * @param string[] $stages
     */
    public function setStages(array $stages): self
    {
        $this->stages = $stages;
        return $this;
    }

}
