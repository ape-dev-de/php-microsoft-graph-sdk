<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthoredNote
 */
class AuthoredNote
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identity information about the note's author.
     * @var Identity|\stdClass|null
     */
    public mixed $author = null;

    /** 
     * The content of the note.
     * @var ItemBody|\stdClass|null
     */
    public mixed $content = null;

    /** The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['author'])) {
            $this->author = is_array($data['author']) ? new Identity($data['author']) : $data['author'];
        }
        if (isset($data['content'])) {
            $this->content = is_array($data['content']) ? new ItemBody($data['content']) : $data['content'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
    }
}
