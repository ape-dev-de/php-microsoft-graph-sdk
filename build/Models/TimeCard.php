<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCard
 */
class TimeCard
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
     * The list of breaks associated with the timeCard.
     * @var TimeCardBreak[]
     */
    public array $breaks = [];

    /** 
     * The clock-in event of the timeCard.
     * @var TimeCardEvent|\stdClass|null
     */
    public mixed $clockInEvent = null;

    /** 
     * The clock-out event of the timeCard.
     * @var TimeCardEvent|\stdClass|null
     */
    public mixed $clockOutEvent = null;

    /** 
     * Indicates whether this timeCard entry is confirmed. Possible values are: none, user, manager, unknownFutureValue.
     * @var ConfirmedBy|\stdClass|null
     */
    public mixed $confirmedBy = null;

    /** 
     * Notes about the timeCard.
     * @var ItemBody|\stdClass|null
     */
    public mixed $notes = null;

    /** 
     * The original timeCardEntry of the timeCard before it was edited.
     * @var TimeCardEntry|\stdClass|null
     */
    public mixed $originalEntry = null;

    /** 
     * The current state of the timeCard during its life cycle. The possible values are: clockedIn, onBreak, clockedOut, unknownFutureValue.
     * @var TimeCardState|\stdClass|null
     */
    public mixed $state = null;

    /** User ID to which the timeCard belongs. */
    public ?string $userId = null;


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
        if (isset($data['breaks'])) {
            $this->breaks = $data['breaks'];
        }
        if (isset($data['clockInEvent'])) {
            $this->clockInEvent = is_array($data['clockInEvent']) ? new TimeCardEvent($data['clockInEvent']) : $data['clockInEvent'];
        }
        if (isset($data['clockOutEvent'])) {
            $this->clockOutEvent = is_array($data['clockOutEvent']) ? new TimeCardEvent($data['clockOutEvent']) : $data['clockOutEvent'];
        }
        if (isset($data['confirmedBy'])) {
            $this->confirmedBy = is_array($data['confirmedBy']) ? new ConfirmedBy($data['confirmedBy']) : $data['confirmedBy'];
        }
        if (isset($data['notes'])) {
            $this->notes = is_array($data['notes']) ? new ItemBody($data['notes']) : $data['notes'];
        }
        if (isset($data['originalEntry'])) {
            $this->originalEntry = is_array($data['originalEntry']) ? new TimeCardEntry($data['originalEntry']) : $data['originalEntry'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new TimeCardState($data['state']) : $data['state'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
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
