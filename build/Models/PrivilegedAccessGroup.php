<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessGroup
 */
class PrivilegedAccessGroup
{
    /**
     */
    private array $assignmentApprovals = [];

    /**
     * The instances of assignment schedules to activate a just-in-time access.
     */
    private array $assignmentScheduleInstances = [];

    /**
     * The schedule requests for operations to create, update, delete, extend, and renew an assignment.
     */
    private array $assignmentScheduleRequests = [];

    /**
     * The assignment schedules to activate a just-in-time access.
     */
    private array $assignmentSchedules = [];

    /**
     * The instances of eligibility schedules to activate a just-in-time access.
     */
    private array $eligibilityScheduleInstances = [];

    /**
     * The schedule requests for operations to create, update, delete, extend, and renew an eligibility.
     */
    private array $eligibilityScheduleRequests = [];

    /**
     * The eligibility schedules to activate a just-in-time access.
     */
    private ?string $eligibilitySchedules;

    public function getAssignmentApprovals(): array
    {
        return $this->assignmentApprovals;
    }

    public function setAssignmentApprovals(array $assignmentApprovals): self
    {
        $this->assignmentApprovals = $assignmentApprovals;
        return $this;
    }

    public function getAssignmentScheduleInstances(): array
    {
        return $this->assignmentScheduleInstances;
    }

    public function setAssignmentScheduleInstances(array $assignmentScheduleInstances): self
    {
        $this->assignmentScheduleInstances = $assignmentScheduleInstances;
        return $this;
    }

    public function getAssignmentScheduleRequests(): array
    {
        return $this->assignmentScheduleRequests;
    }

    public function setAssignmentScheduleRequests(array $assignmentScheduleRequests): self
    {
        $this->assignmentScheduleRequests = $assignmentScheduleRequests;
        return $this;
    }

    public function getAssignmentSchedules(): array
    {
        return $this->assignmentSchedules;
    }

    public function setAssignmentSchedules(array $assignmentSchedules): self
    {
        $this->assignmentSchedules = $assignmentSchedules;
        return $this;
    }

    public function getEligibilityScheduleInstances(): array
    {
        return $this->eligibilityScheduleInstances;
    }

    public function setEligibilityScheduleInstances(array $eligibilityScheduleInstances): self
    {
        $this->eligibilityScheduleInstances = $eligibilityScheduleInstances;
        return $this;
    }

    public function getEligibilityScheduleRequests(): array
    {
        return $this->eligibilityScheduleRequests;
    }

    public function setEligibilityScheduleRequests(array $eligibilityScheduleRequests): self
    {
        $this->eligibilityScheduleRequests = $eligibilityScheduleRequests;
        return $this;
    }

    public function getEligibilitySchedules(): ?string
    {
        return $this->eligibilitySchedules;
    }

    public function setEligibilitySchedules(?string $eligibilitySchedules): self
    {
        $this->eligibilitySchedules = $eligibilitySchedules;
        return $this;
    }

}
