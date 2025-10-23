<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryReviewTag
 */
class SecurityEdiscoveryReviewTag
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /**  */
    public ?string $description = null;

    /**  */
    public ?string $displayName = null;

    /**  */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Indicates whether a single or multiple child tags can be associated with a document. Possible values are: One, Many.  This value controls whether the UX presents the tags as checkboxes or a radio button group.
     * @var SecurityChildSelectability|\stdClass|null
     */
    public mixed $childSelectability = null;

    /** 
     * Returns the tags that are a child of a tag.
     * @var SecurityEdiscoveryReviewTag[]
     */
    public array $childTags = [];

    /** 
     * Returns the parent tag of the specified tag.
     * @var SecurityEdiscoveryReviewTag|\stdClass|null
     */
    public mixed $parent = null;


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
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['childSelectability'])) {
            $this->childSelectability = $data['childSelectability'];
        }
        if (isset($data['childTags'])) {
            $this->childTags = $data['childTags'];
        }
        if (isset($data['parent'])) {
            $this->parent = $data['parent'];
        }
    }
}
