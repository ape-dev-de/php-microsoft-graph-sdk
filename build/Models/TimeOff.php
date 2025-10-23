<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeOff
 */
class TimeOff
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
     * The draft version of this timeOff item that is viewable by managers. It must be shared before it's visible to team members. Required.
     * @var TimeOffItem|\stdClass|null
     */
    public mixed $draftTimeOff = null;

    /** The timeOff is marked for deletion, a process that is finalized when the schedule is shared. */
    public ?bool $isStagedForDeletion = null;

    /** 
     * The shared version of this timeOff that is viewable by both employees and managers. Updates to the sharedTimeOff property send notifications to users in the Teams client. Required.
     * @var TimeOffItem|\stdClass|null
     */
    public mixed $sharedTimeOff = null;

    /** ID of the user assigned to the timeOff. Required. */
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
        if (isset($data['draftTimeOff'])) {
            $this->draftTimeOff = $data['draftTimeOff'];
        }
        if (isset($data['isStagedForDeletion'])) {
            $this->isStagedForDeletion = $data['isStagedForDeletion'];
        }
        if (isset($data['sharedTimeOff'])) {
            $this->sharedTimeOff = $data['sharedTimeOff'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
    }
}
