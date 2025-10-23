<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Notebook
 */
class Notebook
{
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
    public mixed $createdBy = null;

    /** The name of the notebook. */
    public ?string $displayName = null;

    /** 
     * Identity of the user, device, and application that created the item. Read-only.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

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
    public mixed $links = null;

    /** The URL for the sectionGroups navigation property, which returns all the section groups in the notebook. Read-only. */
    public ?string $sectionGroupsUrl = null;

    /** The URL for the sections navigation property, which returns all the sections in the notebook. Read-only. */
    public ?string $sectionsUrl = null;

    /** 
     * Possible values are: Owner, Contributor, Reader, None. Owner represents owner-level access to the notebook. Contributor represents read/write access to the notebook. Reader represents read-only access to the notebook. Read-only.
     * @var OnenoteUserRole|\stdClass|null
     */
    public mixed $userRole = null;

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
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
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
            $this->links = $data['links'];
        }
        if (isset($data['sectionGroupsUrl'])) {
            $this->sectionGroupsUrl = $data['sectionGroupsUrl'];
        }
        if (isset($data['sectionsUrl'])) {
            $this->sectionsUrl = $data['sectionsUrl'];
        }
        if (isset($data['userRole'])) {
            $this->userRole = $data['userRole'];
        }
        if (isset($data['sectionGroups'])) {
            $this->sectionGroups = $data['sectionGroups'];
        }
        if (isset($data['sections'])) {
            $this->sections = $data['sections'];
        }
    }
}
