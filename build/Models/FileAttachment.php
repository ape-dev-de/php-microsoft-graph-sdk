<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileAttachment
 */
class FileAttachment
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The MIME type. */
    public ?string $contentType = null;

    /** true if the attachment is an inline attachment; otherwise, false. */
    public ?bool $isInline = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The attachment's file name. */
    public ?string $name = null;

    /** The length of the attachment in bytes. */
    public ?float $size = null;

    /** The base64-encoded contents of the file. */
    public ?string $contentBytes = null;

    /** The ID of the attachment in the Exchange store. */
    public ?string $contentId = null;

    /** Don't use this property as it isn't supported. */
    public ?string $contentLocation = null;


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
        if (isset($data['contentType'])) {
            $this->contentType = $data['contentType'];
        }
        if (isset($data['isInline'])) {
            $this->isInline = $data['isInline'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['size'])) {
            $this->size = $data['size'];
        }
        if (isset($data['contentBytes'])) {
            $this->contentBytes = $data['contentBytes'];
        }
        if (isset($data['contentId'])) {
            $this->contentId = $data['contentId'];
        }
        if (isset($data['contentLocation'])) {
            $this->contentLocation = $data['contentLocation'];
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
