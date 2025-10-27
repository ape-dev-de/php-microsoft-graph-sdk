<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupEligibilitySchedule
 */
class PrivilegedAccessGroupEligibilitySchedule
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** When the schedule was created. Optional. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The identifier of the access assignment or eligibility request that created this schedule. Optional. */
    public ?string $createdUsing = null;

    /** When the schedule was last modified. Optional. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /** 
     * Represents the period of the access assignment or eligibility. The scheduleInfo can represent a single occurrence or multiple recurring instances. Required.
     * @var RequestSchedule|\stdClass|null
     */
    public RequestSchedule|\stdClass|null $scheduleInfo = null;

    /** The status of the access assignment or eligibility request. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. Optional. */
    public ?string $status = null;

    /** 
     * The identifier of the membership or ownership eligibility to the group that is governed by PIM. Required. The possible values are: owner, member. Supports $filter (eq).
     * @var PrivilegedAccessGroupRelationships|\stdClass|null
     */
    public PrivilegedAccessGroupRelationships|\stdClass|null $accessId = null;

    /** The identifier of the group representing the scope of the membership or ownership eligibility through PIM for Groups. Required. Supports $filter (eq). */
    public ?string $groupId = null;

    /** 
     * Indicates whether the assignment is derived from a group assignment. It can further imply whether the caller can manage the schedule. Required. The possible values are: direct, group, unknownFutureValue. Supports $filter (eq).
     * @var PrivilegedAccessGroupMemberType|\stdClass|null
     */
    public PrivilegedAccessGroupMemberType|\stdClass|null $memberType = null;

    /** The identifier of the principal whose membership or ownership eligibility is granted through PIM for Groups. Required. Supports $filter (eq). */
    public ?string $principalId = null;

    /** 
     * References the group that is the scope of the membership or ownership eligibility through PIM for Groups. Supports $expand.
     * @var Group|\stdClass|null
     */
    public Group|\stdClass|null $group = null;

    /** 
     * References the principal that's in the scope of this membership or ownership eligibility request to the group that's governed by PIM. Supports $expand.
     * @var DirectoryObject|\stdClass|null
     */
    public DirectoryObject|\stdClass|null $principal = null;


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
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['createdUsing'])) {
            $this->createdUsing = $data['createdUsing'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = is_string($data['modifiedDateTime']) ? new \DateTimeImmutable($data['modifiedDateTime']) : $data['modifiedDateTime'];
        }
        if (isset($data['scheduleInfo'])) {
            $this->scheduleInfo = is_array($data['scheduleInfo']) ? new RequestSchedule($data['scheduleInfo']) : $data['scheduleInfo'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['accessId'])) {
            $this->accessId = is_string($data['accessId']) ? PrivilegedAccessGroupRelationships::tryFrom($data['accessId']) : $data['accessId'];
        }
        if (isset($data['groupId'])) {
            $this->groupId = $data['groupId'];
        }
        if (isset($data['memberType'])) {
            $this->memberType = is_string($data['memberType']) ? PrivilegedAccessGroupMemberType::tryFrom($data['memberType']) : $data['memberType'];
        }
        if (isset($data['principalId'])) {
            $this->principalId = $data['principalId'];
        }
        if (isset($data['group'])) {
            $this->group = is_array($data['group']) ? new Group($data['group']) : $data['group'];
        }
        if (isset($data['principal'])) {
            $this->principal = is_array($data['principal']) ? new DirectoryObject($data['principal']) : $data['principal'];
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
