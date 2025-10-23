<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SectionGroup
 */
class SectionGroup
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

    /** The URL for the sectionGroups navigation property, which returns all the section groups in the section group. Read-only. */
    public ?string $sectionGroupsUrl = null;

    /** The URL for the sections navigation property, which returns all the sections in the section group. Read-only. */
    public ?string $sectionsUrl = null;

    /** 
     * The notebook that contains the section group. Read-only.
     * @var Notebook|\stdClass|null
     */
    public mixed $parentNotebook = null;

    /** 
     * The section group that contains the section group. Read-only.
     * @var SectionGroup|\stdClass|null
     */
    public mixed $parentSectionGroup = null;

    /** 
     * The section groups in the section. Read-only. Nullable.
     * @var SectionGroup[]
     */
    public array $sectionGroups = [];

    /** 
     * The sections in the section group. Read-only. Nullable.
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
        if (isset($data['sectionGroupsUrl'])) {
            $this->sectionGroupsUrl = $data['sectionGroupsUrl'];
        }
        if (isset($data['sectionsUrl'])) {
            $this->sectionsUrl = $data['sectionsUrl'];
        }
        if (isset($data['parentNotebook'])) {
            $this->parentNotebook = is_array($data['parentNotebook']) ? new Notebook($data['parentNotebook']) : $data['parentNotebook'];
        }
        if (isset($data['parentSectionGroup'])) {
            $this->parentSectionGroup = is_array($data['parentSectionGroup']) ? new SectionGroup($data['parentSectionGroup']) : $data['parentSectionGroup'];
        }
        if (isset($data['sectionGroups'])) {
            $this->sectionGroups = $data['sectionGroups'];
        }
        if (isset($data['sections'])) {
            $this->sections = $data['sections'];
        }
    }
}
