<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintDocument
 */
class PrintDocument
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The document's content (MIME) type. Read-only. */
    public ?string $contentType = null;

    /** The document's name. Read-only. */
    public ?string $displayName = null;

    /** The time the document was downloaded. Read-only */
    public ?\DateTimeInterface $downloadedDateTime = null;

    /** The document's size in bytes. Read-only. */
    public ?float $size = null;

    /** The time the document was uploaded. Read-only */
    public ?\DateTimeInterface $uploadedDateTime = null;


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
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['downloadedDateTime'])) {
            $this->downloadedDateTime = is_string($data['downloadedDateTime']) ? new \DateTimeImmutable($data['downloadedDateTime']) : $data['downloadedDateTime'];
        }
        if (isset($data['size'])) {
            $this->size = is_numeric($data['size']) ? (float)$data['size'] : $data['size'];
        }
        if (isset($data['uploadedDateTime'])) {
            $this->uploadedDateTime = is_string($data['uploadedDateTime']) ? new \DateTimeImmutable($data['uploadedDateTime']) : $data['uploadedDateTime'];
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
