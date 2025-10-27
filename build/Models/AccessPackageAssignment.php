<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignment
 */
class AccessPackageAssignment
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Information about all the custom extension calls that were made during the access package assignment workflow.
     * @var CustomExtensionCalloutInstance[]
     */
    public array $customExtensionCalloutInstances = [];

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $expiredDateTime = null;

    /** 
     * When the access assignment is to be in place. Read-only.
     * @var EntitlementManagementSchedule|\stdClass|null
     */
    public EntitlementManagementSchedule|\stdClass|null $schedule = null;

    /** 
     * The state of the access package assignment. The possible values are: delivering, partiallyDelivered, delivered, expired, deliveryFailed, unknownFutureValue. Read-only. Supports $filter (eq).
     * @var AccessPackageAssignmentState|\stdClass|null
     */
    public AccessPackageAssignmentState|\stdClass|null $state = null;

    /** More information about the assignment lifecycle. Possible values include Delivering, Delivered, AutoAssignmentInGracePeriod, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered. Read-only. */
    public ?string $status = null;

    /** 
     * Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
     * @var AccessPackage|\stdClass|null
     */
    public AccessPackage|\stdClass|null $accessPackage = null;

    /** 
     * Read-only. Supports $filter (eq) on the id property and $expand query parameters.
     * @var AccessPackageAssignmentPolicy|\stdClass|null
     */
    public AccessPackageAssignmentPolicy|\stdClass|null $assignmentPolicy = null;

    /** 
     * The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
     * @var AccessPackageSubject|\stdClass|null
     */
    public AccessPackageSubject|\stdClass|null $target = null;


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
        if (isset($data['customExtensionCalloutInstances'])) {
            $this->customExtensionCalloutInstances = $data['customExtensionCalloutInstances'];
        }
        if (isset($data['expiredDateTime'])) {
            $this->expiredDateTime = is_string($data['expiredDateTime']) ? new \DateTimeImmutable($data['expiredDateTime']) : $data['expiredDateTime'];
        }
        if (isset($data['schedule'])) {
            $this->schedule = is_array($data['schedule']) ? new EntitlementManagementSchedule($data['schedule']) : $data['schedule'];
        }
        if (isset($data['state'])) {
            $this->state = is_string($data['state']) ? AccessPackageAssignmentState::tryFrom($data['state']) : $data['state'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['accessPackage'])) {
            $this->accessPackage = is_array($data['accessPackage']) ? new AccessPackage($data['accessPackage']) : $data['accessPackage'];
        }
        if (isset($data['assignmentPolicy'])) {
            $this->assignmentPolicy = is_array($data['assignmentPolicy']) ? new AccessPackageAssignmentPolicy($data['assignmentPolicy']) : $data['assignmentPolicy'];
        }
        if (isset($data['target'])) {
            $this->target = is_array($data['target']) ? new AccessPackageSubject($data['target']) : $data['target'];
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
