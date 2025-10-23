<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationModule
 */
class EducationModule
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The display name of the user that created the module.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Date time the module was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Description of the module. */
    public ?string $description = null;

    /** Name of the module. */
    public ?string $displayName = null;

    /** Indicates whether the module is pinned or not. */
    public ?bool $isPinned = null;

    /** 
     * The last user that modified the module.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Date time the module was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Folder URL where all the file resources for this module are stored. */
    public ?string $resourcesFolderUrl = null;

    /** 
     * Status of the module. You can't use a PATCH operation to update this value. Possible values are: draft and published.
     * @var EducationModuleStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * Learning objects that are associated with this module. Only teachers can modify this list. Nullable.
     * @var EducationModuleResource[]
     */
    public array $resources = [];


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
        if (isset($data['isPinned'])) {
            $this->isPinned = $data['isPinned'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['resourcesFolderUrl'])) {
            $this->resourcesFolderUrl = $data['resourcesFolderUrl'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['resources'])) {
            $this->resources = $data['resources'];
        }
    }
}
