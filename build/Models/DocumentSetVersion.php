<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DocumentSetVersion
 */
class DocumentSetVersion
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identity of the user which last modified the version. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Date and time the version was last modified. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Indicates the publication status of this particular version. Read-only.
     * @var PublicationFacet|\stdClass|null
     */
    public mixed $publication = null;

    /** 
     * A collection of the fields and values for this version of the list item.
     * @var FieldValueSet|\stdClass|null
     */
    public mixed $fields = null;

    /** Comment about the captured version. */
    public ?string $comment = null;

    /** 
     * User who captured the version.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Date and time when this version was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Items within the document set that are captured as part of this version.
     * @var DocumentSetVersionItem[]
     */
    public array $items = [];

    /** If true, minor versions of items are also captured; otherwise, only major versions are captured. The default value is false. */
    public ?bool $shouldCaptureMinorVersion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['publication'])) {
            $this->publication = is_array($data['publication']) ? new PublicationFacet($data['publication']) : $data['publication'];
        }
        if (isset($data['fields'])) {
            $this->fields = is_array($data['fields']) ? new FieldValueSet($data['fields']) : $data['fields'];
        }
        if (isset($data['comment'])) {
            $this->comment = $data['comment'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['items'])) {
            $this->items = $data['items'];
        }
        if (isset($data['shouldCaptureMinorVersion'])) {
            $this->shouldCaptureMinorVersion = $data['shouldCaptureMinorVersion'];
        }
    }
}
