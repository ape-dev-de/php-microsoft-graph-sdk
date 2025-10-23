<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceAnnouncementAttachment
 */
class ServiceAnnouncementAttachment
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The attachment content. */
    public ?string $content = null;

    /**  */
    public ?string $contentType = null;

    /**  */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /**  */
    public ?string $name = null;

    /**  */
    public ?float $size = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['contentType'])) {
            $this->contentType = $data['contentType'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['size'])) {
            $this->size = $data['size'];
        }
    }
}
