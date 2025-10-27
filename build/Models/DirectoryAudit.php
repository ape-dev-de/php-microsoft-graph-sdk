<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryAudit
 */
class DirectoryAudit
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates the date and time the activity was performed. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ge, le) and $orderby. */
    public ?\DateTimeInterface $activityDateTime = null;

    /** Indicates the activity name or the operation name (examples: 'Create User' and 'Add member to group'). For a list of activities logged, refer to Microsoft Entra audit log categories and activities. Supports $filter (eq, startswith). */
    public ?string $activityDisplayName = null;

    /** 
     * Indicates additional details on the activity.
     * @var KeyValue[]
     */
    public array $additionalDetails = [];

    /** Indicates which resource category that's targeted by the activity. For example: UserManagement, GroupManagement, ApplicationManagement, RoleManagement. For a list of categories for activities logged, refer to Microsoft Entra audit log categories and activities. */
    public ?string $category = null;

    /** Indicates a unique ID that helps correlate activities that span across various services. Can be used to trace logs across services. Supports $filter (eq). */
    public ?string $correlationId = null;

    /**  */
    public ?AuditActivityInitiator $initiatedBy = null;

    /** Indicates information on which service initiated the activity (For example: Self-service Password Management, Core Directory, B2C, Invited Users, Microsoft Identity Manager, Privileged Identity Management. Supports $filter (eq). */
    public ?string $loggedByService = null;

    /** Indicates the type of operation that was performed. The possible values include but are not limited to the following: Add, Assign, Update, Unassign, and Delete. */
    public ?string $operationType = null;

    /** 
     * Indicates the result of the activity. Possible values are: success, failure, timeout, unknownFutureValue.
     * @var OperationResult|\stdClass|null
     */
    public mixed $result = null;

    /** Indicates the reason for failure if the result is failure or timeout. */
    public ?string $resultReason = null;

    /** 
     * Indicates information on which resource was changed due to the activity. Target Resource Type can be User, Device, Directory, App, Role, Group, Policy or Other. Supports $filter (eq) for id and displayName; and $filter (startswith) for displayName.
     * @var TargetResource[]
     */
    public array $targetResources = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['activityDateTime'])) {
            $this->activityDateTime = is_string($data['activityDateTime']) ? new \DateTimeImmutable($data['activityDateTime']) : $data['activityDateTime'];
        }
        if (isset($data['activityDisplayName'])) {
            $this->activityDisplayName = $data['activityDisplayName'];
        }
        if (isset($data['additionalDetails'])) {
            $this->additionalDetails = $data['additionalDetails'];
        }
        if (isset($data['category'])) {
            $this->category = $data['category'];
        }
        if (isset($data['correlationId'])) {
            $this->correlationId = $data['correlationId'];
        }
        if (isset($data['initiatedBy'])) {
            $this->initiatedBy = is_array($data['initiatedBy']) ? new AuditActivityInitiator($data['initiatedBy']) : $data['initiatedBy'];
        }
        if (isset($data['loggedByService'])) {
            $this->loggedByService = $data['loggedByService'];
        }
        if (isset($data['operationType'])) {
            $this->operationType = $data['operationType'];
        }
        if (isset($data['result'])) {
            $this->result = is_array($data['result']) ? new OperationResult($data['result']) : $data['result'];
        }
        if (isset($data['resultReason'])) {
            $this->resultReason = $data['resultReason'];
        }
        if (isset($data['targetResources'])) {
            $this->targetResources = $data['targetResources'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
