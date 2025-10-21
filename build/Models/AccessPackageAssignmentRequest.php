<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequest
 */
class AccessPackageAssignmentRequest
{
    /**
     * Answers provided by the requestor to accessPackageQuestions asked of them at the time of request.
     */
    private array $answers = [];

    /**
     * The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $completedDateTime;

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Information about all the custom extension calls that were made during the access package assignment workflow.
     */
    private array $customExtensionCalloutInstances = [];

    /**
     * The requestor's supplied justification.
     */
    private ?string $justification;

    /**
     * The type of the request. The possible values are: notSpecified, userAdd, UserExtend, userUpdate, userRemove, adminAdd, adminUpdate, adminRemove, systemAdd, systemUpdate, systemRemove, onBehalfAdd (not supported), unknownFutureValue. Requests from the user have a requestType of userAdd, userUpdate, or userRemove. This property can''t be changed once set.
     */
    private ?string $requestType;

    /**
     * The range of dates that access is to be assigned to the requestor. This property can''t be changed once set, but a new schedule for an assignment can be included in another userUpdate or UserExtend or adminUpdate assignment request.
     */
    private ?string $schedule;

    /**
     * The state of the request. The possible values are: submitted, pendingApproval, delivering, delivered, deliveryFailed, denied, scheduled, canceled, partiallyDelivered, unknownFutureValue. Read-only. Supports $filter (eq).
     */
    private ?string $state;

    /**
     * More information on the request processing status. Read-only.
     */
    private ?string $status;

    /**
     * The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable.  Supports $expand.
     */
    private ?string $accessPackage;

    /**
     * For a requestType of userAdd or adminAdd, this is an access package assignment requested to be created. For a requestType of userRemove, adminRemove or systemRemove, this has the id property of an existing assignment to be removed.   Supports $expand.
     */
    private ?string $assignment;

    /**
     * The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
     */
    private ?string $requestor;


    public function getAnswers(): array
    {
        return $this->answers;
    }

    public function setAnswers(array $answers): self
    {
        $this->answers = $answers;
        return $this;
    }

    public function getCompletedDateTime(): ?\DateTimeInterface
    {
        return $this->completedDateTime;
    }

    public function setCompletedDateTime(?\DateTimeInterface $completedDateTime): self
    {
        $this->completedDateTime = $completedDateTime;
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

    public function getCustomExtensionCalloutInstances(): array
    {
        return $this->customExtensionCalloutInstances;
    }

    public function setCustomExtensionCalloutInstances(array $customExtensionCalloutInstances): self
    {
        $this->customExtensionCalloutInstances = $customExtensionCalloutInstances;
        return $this;
    }

    public function getJustification(): ?string
    {
        return $this->justification;
    }

    public function setJustification(?string $justification): self
    {
        $this->justification = $justification;
        return $this;
    }

    public function getRequestType(): ?string
    {
        return $this->requestType;
    }

    public function setRequestType(?string $requestType): self
    {
        $this->requestType = $requestType;
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

    public function getAssignment(): ?string
    {
        return $this->assignment;
    }

    public function setAssignment(?string $assignment): self
    {
        $this->assignment = $assignment;
        return $this;
    }

    public function getRequestor(): ?string
    {
        return $this->requestor;
    }

    public function setRequestor(?string $requestor): self
    {
        $this->requestor = $requestor;
        return $this;
    }

}
