<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DayNote
 */
class DayNote
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
        if (isset($data['dayNoteDate'])) {
            $this->dayNoteDate = $data['dayNoteDate'];
        }
        if (isset($data['draftDayNote'])) {
            $this->draftDayNote = $data['draftDayNote'];
        }
        if (isset($data['sharedDayNote'])) {
            $this->sharedDayNote = $data['sharedDayNote'];
        }
    }
}
