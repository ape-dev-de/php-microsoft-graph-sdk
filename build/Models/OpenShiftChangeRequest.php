<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OpenShiftChangeRequest
 */
class OpenShiftChangeRequest
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identity of the creator of the entity.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Identity of the person who last modified the entity.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Indicates who the request is assigned to. Possible values are: sender, recipient, manager, system, unknownFutureValue.
     * @var ScheduleChangeRequestActor|\stdClass|null
     */
    public mixed $assignedTo = null;

    /** The date and time when the manager approved or declined the scheduleChangeRequest. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $managerActionDateTime = null;

    /** The message sent by the manager regarding the scheduleChangeRequest. Optional. */
    public ?string $managerActionMessage = null;

    /** The user ID of the manager who approved or declined the scheduleChangeRequest. */
    public ?string $managerUserId = null;

    /** The date and time when the sender sent the scheduleChangeRequest. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $senderDateTime = null;

    /** The message sent by the sender of the scheduleChangeRequest. Optional. */
    public ?string $senderMessage = null;

    /** The user ID of the sender of the scheduleChangeRequest. */
    public ?string $senderUserId = null;

    /** 
     * The state of the scheduleChangeRequest. Possible values are: pending, approved, declined, unknownFutureValue.
     * @var ScheduleChangeState|\stdClass|null
     */
    public mixed $state = null;

    /** ID for the open shift. */
    public ?string $openShiftId = null;


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
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['assignedTo'])) {
            $this->assignedTo = is_array($data['assignedTo']) ? new ScheduleChangeRequestActor($data['assignedTo']) : $data['assignedTo'];
        }
        if (isset($data['managerActionDateTime'])) {
            $this->managerActionDateTime = is_string($data['managerActionDateTime']) ? new \DateTimeImmutable($data['managerActionDateTime']) : $data['managerActionDateTime'];
        }
        if (isset($data['managerActionMessage'])) {
            $this->managerActionMessage = $data['managerActionMessage'];
        }
        if (isset($data['managerUserId'])) {
            $this->managerUserId = $data['managerUserId'];
        }
        if (isset($data['senderDateTime'])) {
            $this->senderDateTime = is_string($data['senderDateTime']) ? new \DateTimeImmutable($data['senderDateTime']) : $data['senderDateTime'];
        }
        if (isset($data['senderMessage'])) {
            $this->senderMessage = $data['senderMessage'];
        }
        if (isset($data['senderUserId'])) {
            $this->senderUserId = $data['senderUserId'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new ScheduleChangeState($data['state']) : $data['state'];
        }
        if (isset($data['openShiftId'])) {
            $this->openShiftId = $data['openShiftId'];
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
