<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroup
 */
class PrivilegedAccessGroup
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var Approval[]
     */
    public array $assignmentApprovals = [];

    /** 
     * The instances of assignment schedules to activate a just-in-time access.
     * @var PrivilegedAccessGroupAssignmentScheduleInstance[]
     */
    public array $assignmentScheduleInstances = [];

    /** 
     * The schedule requests for operations to create, update, delete, extend, and renew an assignment.
     * @var PrivilegedAccessGroupAssignmentScheduleRequest[]
     */
    public array $assignmentScheduleRequests = [];

    /** 
     * The assignment schedules to activate a just-in-time access.
     * @var PrivilegedAccessGroupAssignmentSchedule[]
     */
    public array $assignmentSchedules = [];

    /** 
     * The instances of eligibility schedules to activate a just-in-time access.
     * @var PrivilegedAccessGroupEligibilityScheduleInstance[]
     */
    public array $eligibilityScheduleInstances = [];

    /** 
     * The schedule requests for operations to create, update, delete, extend, and renew an eligibility.
     * @var PrivilegedAccessGroupEligibilityScheduleRequest[]
     */
    public array $eligibilityScheduleRequests = [];

    /** 
     * The eligibility schedules to activate a just-in-time access.
     * @var PrivilegedAccessGroupEligibilitySchedule[]
     */
    public array $eligibilitySchedules = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['assignmentApprovals'])) {
            $this->assignmentApprovals = $data['assignmentApprovals'];
        }
        if (isset($data['assignmentScheduleInstances'])) {
            $this->assignmentScheduleInstances = $data['assignmentScheduleInstances'];
        }
        if (isset($data['assignmentScheduleRequests'])) {
            $this->assignmentScheduleRequests = $data['assignmentScheduleRequests'];
        }
        if (isset($data['assignmentSchedules'])) {
            $this->assignmentSchedules = $data['assignmentSchedules'];
        }
        if (isset($data['eligibilityScheduleInstances'])) {
            $this->eligibilityScheduleInstances = $data['eligibilityScheduleInstances'];
        }
        if (isset($data['eligibilityScheduleRequests'])) {
            $this->eligibilityScheduleRequests = $data['eligibilityScheduleRequests'];
        }
        if (isset($data['eligibilitySchedules'])) {
            $this->eligibilitySchedules = $data['eligibilitySchedules'];
        }
    }
}
