<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignment
 */
class AccessPackageAssignment
{
    /**
     * Information about all the custom extension calls that were made during the access package assignment workflow.
     */
    private array $customExtensionCalloutInstances = [];

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $expiredDateTime;

    /**
     * When the access assignment is to be in place. Read-only.
     */
    private ?string $schedule;

    /**
     * The state of the access package assignment. The possible values are: delivering, partiallyDelivered, delivered, expired, deliveryFailed, unknownFutureValue. Read-only. Supports $filter (eq).
     */
    private ?string $state;

    /**
     * More information about the assignment lifecycle. Possible values include Delivering, Delivered, AutoAssignmentInGracePeriod, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered. Read-only.
     */
    private ?string $status;

    /**
     * Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
     */
    private ?string $accessPackage;

    /**
     * Read-only. Supports $filter (eq) on the id property and $expand query parameters.
     */
    private ?string $assignmentPolicy;

    /**
     * The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
     */
    private ?string $target;

    public function getCustomExtensionCalloutInstances(): array
    {
        return $this->customExtensionCalloutInstances;
    }

    public function setCustomExtensionCalloutInstances(array $customExtensionCalloutInstances): self
    {
        $this->customExtensionCalloutInstances = $customExtensionCalloutInstances;
        return $this;
    }

    public function getExpiredDateTime(): ?\DateTimeInterface
    {
        return $this->expiredDateTime;
    }

    public function setExpiredDateTime(?\DateTimeInterface $expiredDateTime): self
    {
        $this->expiredDateTime = $expiredDateTime;
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

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
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

    public function getAccessPackage(): ?string
    {
        return $this->accessPackage;
    }

    public function setAccessPackage(?string $accessPackage): self
    {
        $this->accessPackage = $accessPackage;
        return $this;
    }

    public function getAssignmentPolicy(): ?string
    {
        return $this->assignmentPolicy;
    }

    public function setAssignmentPolicy(?string $assignmentPolicy): self
    {
        $this->assignmentPolicy = $assignmentPolicy;
        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;
        return $this;
    }

}
