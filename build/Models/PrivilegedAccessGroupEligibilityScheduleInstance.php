<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroupEligibilityScheduleInstance
 */
class PrivilegedAccessGroupEligibilityScheduleInstance
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** When the schedule instance ends. Required. */
    public ?\DateTimeInterface $endDateTime = null;

    /** When this instance starts. Required. */
    public ?\DateTimeInterface $startDateTime = null;

    /** 
     * The identifier of the membership or ownership eligibility relationship to the group. Required. The possible values are: owner, member. Supports $filter (eq).
     * @var PrivilegedAccessGroupRelationships|\stdClass|null
     */
    public mixed $accessId = null;

    /** The identifier of the privilegedAccessGroupEligibilitySchedule from which this instance was created. Required. Supports $filter (eq, ne). */
    public ?string $eligibilityScheduleId = null;

    /** The identifier of the group representing the scope of the membership or ownership eligibility through PIM for Groups. Required. Supports $filter (eq). */
    public ?string $groupId = null;

    /** 
     * Indicates whether the assignment is derived from a group assignment. It can further imply whether the calling principal can manage the assignment schedule. Required. The possible values are: direct, group, unknownFutureValue. Supports $filter (eq).
     * @var PrivilegedAccessGroupMemberType|\stdClass|null
     */
    public mixed $memberType = null;

    /** The identifier of the principal whose membership or ownership eligibility to the group is managed through PIM for Groups. Required. Supports $filter (eq). */
    public ?string $principalId = null;

    /** 
     * References the group that is the scope of the membership or ownership eligibility through PIM for Groups. Supports $expand.
     * @var Group|\stdClass|null
     */
    public mixed $group = null;

    /** 
     * References the principal that's in the scope of the membership or ownership eligibility request through the group that's governed by PIM. Supports $expand.
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
            $this->endDateTime = $data['endDateTime'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = $data['startDateTime'];
        }
        if (isset($data['accessId'])) {
            $this->accessId = $data['accessId'];
        }
        if (isset($data['eligibilityScheduleId'])) {
            $this->eligibilityScheduleId = $data['eligibilityScheduleId'];
        }
        if (isset($data['groupId'])) {
            $this->groupId = $data['groupId'];
        }
        if (isset($data['memberType'])) {
            $this->memberType = $data['memberType'];
        }
        if (isset($data['principalId'])) {
            $this->principalId = $data['principalId'];
        }
        if (isset($data['group'])) {
            $this->group = $data['group'];
        }
        if (isset($data['principal'])) {
            $this->principal = $data['principal'];
        }
    }
}
