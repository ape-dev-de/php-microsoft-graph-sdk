<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProtectionRuleBase
 */
class ProtectionRuleBase
{
    /**
     * The identity of person who created the rule.
     */
    private ?string $createdBy;

    /**
     * The time of creation of the rule.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Contains error details if an operation on a rule fails.
     */
    private ?string $error;

    /**
     */
    private ?bool $isAutoApplyEnabled;

    /**
     * The identity of the person who last modified the rule.
     */
    private ?string $lastModifiedBy;

    /**
     * Timestamp of the last modification made to the rule.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The status of the protection rule. The possible values are: draft, active, completed, completedWithErrors, unknownFutureValue. The draft member is currently unsupported.
     */
    private ?string $status;


    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getIsAutoApplyEnabled(): ?bool
    {
        return $this->isAutoApplyEnabled;
    }

    public function setIsAutoApplyEnabled(?bool $isAutoApplyEnabled): self
    {
        $this->isAutoApplyEnabled = $isAutoApplyEnabled;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
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
