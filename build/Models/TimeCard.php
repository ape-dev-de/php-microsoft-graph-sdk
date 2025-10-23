<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCard
 */
class TimeCard
{
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['breaks'])) {
            $this->breaks = $data['breaks'];
        }
        if (isset($data['clockInEvent'])) {
            $this->clockInEvent = $data['clockInEvent'];
        }
        if (isset($data['clockOutEvent'])) {
            $this->clockOutEvent = $data['clockOutEvent'];
        }
        if (isset($data['confirmedBy'])) {
            $this->confirmedBy = $data['confirmedBy'];
        }
        if (isset($data['notes'])) {
            $this->notes = $data['notes'];
        }
        if (isset($data['originalEntry'])) {
            $this->originalEntry = $data['originalEntry'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
    }
}
