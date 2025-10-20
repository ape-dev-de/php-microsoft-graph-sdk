<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationship
 */
class DelegatedAdminRelationship
{
    /**
     */
    private ?string $accessDetails;

    /**
     * The date and time in ISO 8601 format and in UTC time when the relationship became active. Read-only.
     */
    private ?\DateTimeInterface $activatedDateTime;

    /**
     * The duration by which the validity of the relationship is automatically extended, denoted in ISO 8601 format. Supported values are: P0D, PT0S, P180D. The default value is PT0S. PT0S indicates that the relationship expires when the endDateTime is reached and it isn''t automatically extended.
     */
    private ?string $autoExtendDuration;

    /**
     * The date and time in ISO 8601 format and in UTC time when the relationship was created. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The display name and unique identifier of the customer of the relationship. This is configured either by the partner at the time the relationship is created or by the system after the customer approves the relationship. Can't be changed by the customer.
     */
    private ?string $customer;

    /**
     * The display name of the relationship used for ease of identification. Must be unique across all delegated admin relationships of the partner and is set by the partner only when the relationship is in the created status and can't be changed by the customer. Maximum length is 50 characters.
     */
    private ?string $displayName;

    /**
     * The duration of the relationship in ISO 8601 format. Must be a value between P1D and P2Y inclusive. This is set by the partner only when the relationship is in the created status and can't be changed by the customer.
     */
    private ?string $duration;

    /**
     * The date and time in ISO 8601 format and in UTC time when the status of relationship changes to either terminated or expired. Calculated as endDateTime = activatedDateTime + duration. Read-only.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * The date and time in ISO 8601 format and in UTC time when the relationship was last modified. Read-only.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The status of the relationship. Read Only. The possible values are: activating, active, approvalPending, approved, created, expired, expiring, terminated, terminating, terminationRequested, unknownFutureValue. Supports $orderby.
     */
    private ?string $status;

    /**
     * The access assignments associated with the delegated admin relationship.
     */
    private array $accessAssignments = [];

    /**
     * The long running operations associated with the delegated admin relationship.
     */
    private array $operations = [];

    /**
     * The requests associated with the delegated admin relationship.
     */
    private ?string $requests;

    public function getAccessDetails(): ?string
    {
        return $this->accessDetails;
    }

    public function setAccessDetails(?string $accessDetails): self
    {
        $this->accessDetails = $accessDetails;
        return $this;
    }

    public function getActivatedDateTime(): ?\DateTimeInterface
    {
        return $this->activatedDateTime;
    }

    public function setActivatedDateTime(?\DateTimeInterface $activatedDateTime): self
    {
        $this->activatedDateTime = $activatedDateTime;
        return $this;
    }

    public function getAutoExtendDuration(): ?string
    {
        return $this->autoExtendDuration;
    }

    public function setAutoExtendDuration(?string $autoExtendDuration): self
    {
        $this->autoExtendDuration = $autoExtendDuration;
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

    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    public function setCustomer(?string $customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
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

    public function getAccessAssignments(): array
    {
        return $this->accessAssignments;
    }

    public function setAccessAssignments(array $accessAssignments): self
    {
        $this->accessAssignments = $accessAssignments;
        return $this;
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function setOperations(array $operations): self
    {
        $this->operations = $operations;
        return $this;
    }

    public function getRequests(): ?string
    {
        return $this->requests;
    }

    public function setRequests(?string $requests): self
    {
        $this->requests = $requests;
        return $this;
    }

}
