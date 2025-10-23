<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopyNotebookModel
 */
class CopyNotebookModel
{
    /**  */
    public ?string $id = null;

    /**  */
    public ?string $createdBy = null;

    /** 
     * 
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdByIdentity = null;

    /**  */
    public ?\DateTimeInterface $createdTime = null;

    /**  */
    public ?bool $isDefault = null;

    /**  */
    public ?bool $isShared = null;

    /**  */
    public ?string $lastModifiedBy = null;

    /** 
     * 
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedByIdentity = null;

    /**  */
    public ?\DateTimeInterface $lastModifiedTime = null;

    /** 
     * 
     * @var NotebookLinks|\stdClass|null
     */
    public mixed $links = null;

    /**  */
    public ?string $name = null;

    /**  */
    public ?string $sectionGroupsUrl = null;

    /**  */
    public ?string $sectionsUrl = null;

    /**  */
    public ?string $self = null;

    /** 
     * 
     * @var OnenoteUserRole|\stdClass|null
     */
    public mixed $userRole = null;


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
        if (isset($data['createdByIdentity'])) {
            $this->createdByIdentity = $data['createdByIdentity'];
        }
        if (isset($data['createdTime'])) {
            $this->createdTime = $data['createdTime'];
        }
        if (isset($data['isDefault'])) {
            $this->isDefault = $data['isDefault'];
        }
        if (isset($data['isShared'])) {
            $this->isShared = $data['isShared'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedByIdentity'])) {
            $this->lastModifiedByIdentity = $data['lastModifiedByIdentity'];
        }
        if (isset($data['lastModifiedTime'])) {
            $this->lastModifiedTime = $data['lastModifiedTime'];
        }
        if (isset($data['links'])) {
            $this->links = $data['links'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['sectionGroupsUrl'])) {
            $this->sectionGroupsUrl = $data['sectionGroupsUrl'];
        }
        if (isset($data['sectionsUrl'])) {
            $this->sectionsUrl = $data['sectionsUrl'];
        }
        if (isset($data['self'])) {
            $this->self = $data['self'];
        }
        if (isset($data['userRole'])) {
            $this->userRole = $data['userRole'];
        }
    }
}
