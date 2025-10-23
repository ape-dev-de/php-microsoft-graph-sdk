<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessSchedule
 */
class PrivilegedAccessSchedule
{
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
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
            $this->scheduleInfo = $data['scheduleInfo'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
    }
}
