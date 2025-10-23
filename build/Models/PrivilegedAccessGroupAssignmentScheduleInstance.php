<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupAssignmentScheduleInstance
 */
class PrivilegedAccessGroupAssignmentScheduleInstance
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** When the schedule instance ends. Required. */
    public ?\DateTimeInterface $endDateTime = null;

    /** When this instance starts. Required. */
    public ?\DateTimeInterface $startDateTime = null;

    /** 
     * The identifier of the membership or ownership assignment relationship to the group. Required. The possible values are: owner, member,  unknownFutureValue. Supports $filter (eq).
     * @var PrivilegedAccessGroupRelationships|\stdClass|null
     */
    public mixed $accessId = null;

    /** The identifier of the privilegedAccessGroupAssignmentSchedule from which this instance was created. Required. Supports $filter (eq, ne). */
    public ?string $assignmentScheduleId = null;

    /** 
     * Indicates whether the membership or ownership assignment is granted through activation of an eligibility or through direct assignment. Required. The possible values are: assigned, activated, unknownFutureValue. Supports $filter (eq).
     * @var PrivilegedAccessGroupAssignmentType|\stdClass|null
     */
    public mixed $assignmentType = null;

    /** The identifier of the group representing the scope of the membership or ownership assignment through PIM for Groups. Optional. Supports $filter (eq). */
    public ?string $groupId = null;

    /** 
     * Indicates whether the assignment is derived from a group assignment. It can further imply whether the caller can manage the assignment schedule. Required. The possible values are: direct, group, unknownFutureValue. Supports $filter (eq).
     * @var PrivilegedAccessGroupMemberType|\stdClass|null
     */
    public mixed $memberType = null;

    /** The identifier of the principal whose membership or ownership assignment to the group is managed through PIM for Groups. Required. Supports $filter (eq). */
    public ?string $principalId = null;

    /** 
     * When the request activates a membership or ownership in PIM for Groups, this object represents the eligibility request for the group. Otherwise, it is null.
     * @var PrivilegedAccessGroupEligibilityScheduleInstance|\stdClass|null
     */
    public mixed $activatedUsing = null;

    /** 
     * References the group that is the scope of the membership or ownership assignment through PIM for Groups. Supports $expand.
     * @var Group|\stdClass|null
     */
    public mixed $group = null;

    /** 
     * References the principal that's in the scope of the membership or ownership assignment request through the group that's governed by PIM. Supports $expand.
     * @var DirectoryObject|\stdClass|null
     */
    public mixed $principal = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['accessId'])) {
            $this->accessId = is_array($data['accessId']) ? new PrivilegedAccessGroupRelationships($data['accessId']) : $data['accessId'];
        }
        if (isset($data['assignmentScheduleId'])) {
            $this->assignmentScheduleId = $data['assignmentScheduleId'];
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
            $this->activatedUsing = is_array($data['activatedUsing']) ? new PrivilegedAccessGroupEligibilityScheduleInstance($data['activatedUsing']) : $data['activatedUsing'];
        }
        if (isset($data['group'])) {
            $this->group = is_array($data['group']) ? new Group($data['group']) : $data['group'];
        }
        if (isset($data['principal'])) {
            $this->principal = is_array($data['principal']) ? new DirectoryObject($data['principal']) : $data['principal'];
        }
    }
}
