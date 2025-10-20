<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAlertEvidence
 */
class SecurityAlertEvidence
{
    /**
     * The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Detailed description of the entity role/s in an alert. Values are free-form.
     */
    private ?string $detailedRoles;

    /**
     */
    private ?string $remediationStatus;

    /**
     * Details about the remediation status.
     */
    private ?string $remediationStatusDetails;

    /**
     * The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker.
     */
    private array $roles = [];

    /**
     * Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc.
     */
    private ?string $tags;

    /**
     */
    private ?string $verdict;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDetailedRoles(): ?string
    {
        return $this->detailedRoles;
    }

    public function setDetailedRoles(?string $detailedRoles): self
    {
        $this->detailedRoles = $detailedRoles;
        return $this;
    }

    public function getRemediationStatus(): ?string
    {
        return $this->remediationStatus;
    }

    public function setRemediationStatus(?string $remediationStatus): self
    {
        $this->remediationStatus = $remediationStatus;
        return $this;
    }

    public function getRemediationStatusDetails(): ?string
    {
        return $this->remediationStatusDetails;
    }

    public function setRemediationStatusDetails(?string $remediationStatusDetails): self
    {
        $this->remediationStatusDetails = $remediationStatusDetails;
        return $this;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    public function getVerdict(): ?string
    {
        return $this->verdict;
    }

    public function setVerdict(?string $verdict): self
    {
        $this->verdict = $verdict;
        return $this;
    }

}
