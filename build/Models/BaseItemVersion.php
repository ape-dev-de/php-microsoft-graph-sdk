<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BaseItemVersion
 */
class BaseItemVersion
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
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['publication'])) {
            $this->publication = $data['publication'];
        }
    }
}
