<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Notebook
 */
class Notebook
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The endpoint where you can get details about the page. Read-only. */
    public ?string $self = null;

    /** The date and time when the page was created. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Identity of the user, device, and application that created the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** The name of the notebook. */
    public ?string $displayName = null;

    /** 
     * Identity of the user, device, and application that created the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $lastModifiedBy = null;

    /** The date and time when the notebook was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Indicates whether this is the user's default notebook. Read-only. */
    public ?bool $isDefault = null;

    /** Indicates whether the notebook is shared. If true, the contents of the notebook can be seen by people other than the owner. Read-only. */
    public ?bool $isShared = null;

    /** 
     * Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote native client if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
     * @var NotebookLinks|\stdClass|null
     */
    public NotebookLinks|\stdClass|null $links = null;

    /** The URL for the sectionGroups navigation property, which returns all the section groups in the notebook. Read-only. */
    public ?string $sectionGroupsUrl = null;

    /** The URL for the sections navigation property, which returns all the sections in the notebook. Read-only. */
    public ?string $sectionsUrl = null;

    /** 
     * Possible values are: Owner, Contributor, Reader, None. Owner represents owner-level access to the notebook. Contributor represents read/write access to the notebook. Reader represents read-only access to the notebook. Read-only.
     * @var OnenoteUserRole|\stdClass|null
     */
    public OnenoteUserRole|\stdClass|null $userRole = null;

    /** 
     * The section groups in the notebook. Read-only. Nullable.
     * @var SectionGroup[]
     */
    public array $sectionGroups = [];

    /** 
     * The sections in the notebook. Read-only. Nullable.
     * @var OnenoteSection[]
     */
    public array $sections = [];


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
        if (isset($data['self'])) {
            $this->self = $data['self'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new IdentitySet($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['isDefault'])) {
            $this->isDefault = $data['isDefault'];
        }
        if (isset($data['isShared'])) {
            $this->isShared = $data['isShared'];
        }
        if (isset($data['links'])) {
            $this->links = is_array($data['links']) ? new NotebookLinks($data['links']) : $data['links'];
        }
        if (isset($data['sectionGroupsUrl'])) {
            $this->sectionGroupsUrl = $data['sectionGroupsUrl'];
        }
        if (isset($data['sectionsUrl'])) {
            $this->sectionsUrl = $data['sectionsUrl'];
        }
        if (isset($data['userRole'])) {
            $this->userRole = is_array($data['userRole']) ? new OnenoteUserRole($data['userRole']) : $data['userRole'];
        }
        if (isset($data['sectionGroups'])) {
            $this->sectionGroups = $data['sectionGroups'];
        }
        if (isset($data['sections'])) {
            $this->sections = $data['sections'];
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
