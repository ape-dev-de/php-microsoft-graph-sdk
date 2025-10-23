<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationWordResource
 */
class EducationWordResource
{
    /** 
     * The individual who created the resource.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Moment in time when the resource was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Display name of resource. */
    public ?string $displayName = null;

    /** 
     * The last user to modify the resource.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Moment in time when the resource was last modified.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Location of the file on disk. */
    public ?string $fileUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['fileUrl'])) {
            $this->fileUrl = $data['fileUrl'];
        }
    }
}
