<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DayNote
 */
class DayNote
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

    /** The date of the day note. */
    public ?\DateTimeInterface $dayNoteDate = null;

    /** 
     * The draft version of this day note that is viewable by managers. Only contentType text is supported.
     * @var ItemBody|\stdClass|null
     */
    public mixed $draftDayNote = null;

    /** 
     * The shared version of this day note that is viewable by both employees and managers. Only contentType text is supported.
     * @var ItemBody|\stdClass|null
     */
    public mixed $sharedDayNote = null;


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
        if (isset($data['dayNoteDate'])) {
            $this->dayNoteDate = is_string($data['dayNoteDate']) ? new \DateTimeImmutable($data['dayNoteDate']) : $data['dayNoteDate'];
        }
        if (isset($data['draftDayNote'])) {
            $this->draftDayNote = is_array($data['draftDayNote']) ? new ItemBody($data['draftDayNote']) : $data['draftDayNote'];
        }
        if (isset($data['sharedDayNote'])) {
            $this->sharedDayNote = is_array($data['sharedDayNote']) ? new ItemBody($data['sharedDayNote']) : $data['sharedDayNote'];
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
