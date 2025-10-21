<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryAudit
 */
class DirectoryAudit
{
    /**
     * Indicates the date and time the activity was performed. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ge, le) and $orderby.
     */
    private ?\DateTimeInterface $activityDateTime;

    /**
     * Indicates the activity name or the operation name (examples: ''Create User'' and ''Add member to group''). For a list of activities logged, refer to Microsoft Entra audit log categories and activities. Supports $filter (eq, startswith).
     */
    private ?string $activityDisplayName;

    /**
     * Indicates additional details on the activity.
     */
    private array $additionalDetails = [];

    /**
     * Indicates which resource category that''s targeted by the activity. For example: UserManagement, GroupManagement, ApplicationManagement, RoleManagement. For a list of categories for activities logged, refer to Microsoft Entra audit log categories and activities.
     */
    private ?string $category;

    /**
     * Indicates a unique ID that helps correlate activities that span across various services. Can be used to trace logs across services. Supports $filter (eq).
     */
    private ?string $correlationId;

    /**
     */
    private ?string $initiatedBy;

    /**
     * Indicates information on which service initiated the activity (For example: Self-service Password Management, Core Directory, B2C, Invited Users, Microsoft Identity Manager, Privileged Identity Management. Supports $filter (eq).
     */
    private ?string $loggedByService;

    /**
     * Indicates the type of operation that was performed. The possible values include but are not limited to the following: Add, Assign, Update, Unassign, and Delete.
     */
    private ?string $operationType;

    /**
     * Indicates the result of the activity. Possible values are: success, failure, timeout, unknownFutureValue.
     */
    private ?string $result;

    /**
     * Indicates the reason for failure if the result is failure or timeout.
     */
    private ?string $resultReason;

    /**
     * Indicates information on which resource was changed due to the activity. Target Resource Type can be User, Device, Directory, App, Role, Group, Policy or Other. Supports $filter (eq) for id and displayName; and $filter (startswith) for displayName.
     * @var string[]
     */
    private array $targetResources = [];


    public function getActivityDateTime(): ?\DateTimeInterface
    {
        return $this->activityDateTime;
    }

    public function setActivityDateTime(?\DateTimeInterface $activityDateTime): self
    {
        $this->activityDateTime = $activityDateTime;
        return $this;
    }

    public function getActivityDisplayName(): ?string
    {
        return $this->activityDisplayName;
    }

    public function setActivityDisplayName(?string $activityDisplayName): self
    {
        $this->activityDisplayName = $activityDisplayName;
        return $this;
    }

    public function getAdditionalDetails(): array
    {
        return $this->additionalDetails;
    }

    public function setAdditionalDetails(array $additionalDetails): self
    {
        $this->additionalDetails = $additionalDetails;
        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getCorrelationId(): ?string
    {
        return $this->correlationId;
    }

    public function setCorrelationId(?string $correlationId): self
    {
        $this->correlationId = $correlationId;
        return $this;
    }

    public function getInitiatedBy(): ?string
    {
        return $this->initiatedBy;
    }

    public function setInitiatedBy(?string $initiatedBy): self
    {
        $this->initiatedBy = $initiatedBy;
        return $this;
    }

    public function getLoggedByService(): ?string
    {
        return $this->loggedByService;
    }

    public function setLoggedByService(?string $loggedByService): self
    {
        $this->loggedByService = $loggedByService;
        return $this;
    }

    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    public function setOperationType(?string $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(?string $result): self
    {
        $this->result = $result;
        return $this;
    }

    public function getResultReason(): ?string
    {
        return $this->resultReason;
    }

    public function setResultReason(?string $resultReason): self
    {
        $this->resultReason = $resultReason;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTargetResources(): array
    {
        return $this->targetResources;
    }

    /**
     * @param string[] $targetResources
     */
    public function setTargetResources(array $targetResources): self
    {
        $this->targetResources = $targetResources;
        return $this;
    }

}
