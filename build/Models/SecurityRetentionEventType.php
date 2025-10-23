<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionEventType
 */
class SecurityRetentionEventType
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The user who created the retentionEventType.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The date time when the retentionEventType was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Optional information about the event type. */
    public ?string $description = null;

    /** Name of the event type. */
    public ?string $displayName = null;

    /** 
     * The user who last modified the retentionEventType.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** The latest date time when the retentionEventType was modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;


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
        if (isset($data['description'])) {
            $this->description = $data['description'];
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
    }
}
