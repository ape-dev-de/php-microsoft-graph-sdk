<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryReviewTag
 */
class SecurityEdiscoveryReviewTag
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

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
    public SecurityChildSelectability|\stdClass|null $childSelectability = null;

    /** 
     * Returns the tags that are a child of a tag.
     * @var SecurityEdiscoveryReviewTag[]
     */
    public array $childTags = [];

    /** 
     * Returns the parent tag of the specified tag.
     * @var SecurityEdiscoveryReviewTag|\stdClass|null
     */
    public SecurityEdiscoveryReviewTag|\stdClass|null $parent = null;


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
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
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
            $this->childSelectability = is_array($data['childSelectability']) ? new SecurityChildSelectability($data['childSelectability']) : $data['childSelectability'];
        }
        if (isset($data['childTags'])) {
            $this->childTags = $data['childTags'];
        }
        if (isset($data['parent'])) {
            $this->parent = is_array($data['parent']) ? new SecurityEdiscoveryReviewTag($data['parent']) : $data['parent'];
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
