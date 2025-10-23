<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteSection
 */
class OnenoteSection
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

    /** Indicates whether this is the user's default section. Read-only. */
    public ?bool $isDefault = null;

    /** 
     * Links for opening the section. The oneNoteClientURL link opens the section in the OneNote native client if it's installed. The oneNoteWebURL link opens the section in OneNote on the web.
     * @var SectionLinks|\stdClass|null
     */
    public mixed $links = null;

    /** The pages endpoint where you can get details for all the pages in the section. Read-only. */
    public ?string $pagesUrl = null;

    /** 
     * The collection of pages in the section.  Read-only. Nullable.
     * @var OnenotePage[]
     */
    public array $pages = [];

    /** 
     * The notebook that contains the section.  Read-only.
     * @var Notebook|\stdClass|null
     */
    public mixed $parentNotebook = null;

    /** 
     * The section group that contains the section.  Read-only.
     * @var SectionGroup|\stdClass|null
     */
    public mixed $parentSectionGroup = null;


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
        if (isset($data['links'])) {
            $this->links = $data['links'];
        }
        if (isset($data['pagesUrl'])) {
            $this->pagesUrl = $data['pagesUrl'];
        }
        if (isset($data['pages'])) {
            $this->pages = $data['pages'];
        }
        if (isset($data['parentNotebook'])) {
            $this->parentNotebook = $data['parentNotebook'];
        }
        if (isset($data['parentSectionGroup'])) {
            $this->parentSectionGroup = $data['parentSectionGroup'];
        }
    }
}
