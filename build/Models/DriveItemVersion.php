<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemVersion
 */
class DriveItemVersion
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

    /** The content stream for this version of the item. */
    public ?string $content = null;

    /** Indicates the size of the content stream for this version of the item. */
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
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['publication'])) {
            $this->publication = is_array($data['publication']) ? new PublicationFacet($data['publication']) : $data['publication'];
        }
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['size'])) {
            $this->size = $data['size'];
        }
    }
}
