<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupAssignmentSchedule
 */
class PrivilegedAccessGroupAssignmentSchedule
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
    public mixed $scheduleInfo = null;

    /** The status of the access assignment or eligibility request. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. Optional. */
    public ?string $status = null;

    /** 
     * The identifier of the membership or ownership assignment to the group that is governed through PIM. Required. The possible values are: owner, member, unknownFutureValue. Supports $filter (eq).
     * @var PrivilegedAccessGroupRelationships|\stdClass|null
     */
    public mixed $accessId = null;

    /** 
     * Indicates whether the membership or ownership assignment for the principal is granted through activation or direct assignment. Required. The possible values are: assigned, activated, unknownFutureValue. Supports $filter (eq).
     * @var PrivilegedAccessGroupAssignmentType|\stdClass|null
     */
    public mixed $assignmentType = null;

    /** The identifier of the group representing the scope of the membership or ownership assignment through PIM for Groups. Required. Supports $filter (eq). */
    public ?string $groupId = null;

    /** 
     * Indicates whether the assignment is derived from a direct group assignment or through a transitive assignment. The possible values are: direct, group, unknownFutureValue. Supports $filter (eq).
     * @var PrivilegedAccessGroupMemberType|\stdClass|null
     */
    public mixed $memberType = null;

    /** The identifier of the principal whose membership or ownership assignment is granted through PIM for Groups. Required. Supports $filter (eq). */
    public ?string $principalId = null;

    /** 
     * When the request activates an ownership or membership assignment in PIM for Groups, this object represents the eligibility relationship. Otherwise, it's null. Supports $expand.
     * @var PrivilegedAccessGroupEligibilitySchedule|\stdClass|null
     */
    public mixed $activatedUsing = null;

    /** 
     * References the group that is the scope of the membership or ownership assignment through PIM for Groups. Supports $expand and $select nested in $expand for select properties like id, displayName, and mail.
     * @var Group|\stdClass|null
     */
    public mixed $group = null;

    /** 
     * References the principal that's in the scope of this membership or ownership assignment request to the group that's governed through PIM. Supports $expand and $select nested in $expand for id only.
     * @var DirectoryObject|\stdClass|null
     */
    public mixed $principal = null;


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
            $this->accessId = is_array($data['accessId']) ? new PrivilegedAccessGroupRelationships($data['accessId']) : $data['accessId'];
        }
        if (isset($data['assignmentType'])) {
            $this->assignmentType = is_array($data['assignmentType']) ? new PrivilegedAccessGroupAssignmentType($data['assignmentType']) : $data['assignmentType'];
        }
        if (isset($data['groupId'])) {
            $this->groupId = $data['groupId'];
        }
        if (isset($data['memberType'])) {
            $this->memberType = is_array($data['memberType']) ? new PrivilegedAccessGroupMemberType($data['memberType']) : $data['memberType'];
        }
        if (isset($data['principalId'])) {
            $this->principalId = $data['principalId'];
        }
        if (isset($data['activatedUsing'])) {
            $this->activatedUsing = is_array($data['activatedUsing']) ? new PrivilegedAccessGroupEligibilitySchedule($data['activatedUsing']) : $data['activatedUsing'];
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
