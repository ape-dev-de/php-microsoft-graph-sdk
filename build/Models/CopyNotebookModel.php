<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopyNotebookModel
 */
class CopyNotebookModel
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?string $id = null;

    /**  */
    public ?string $createdBy = null;

    /** 
     * 
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdByIdentity = null;

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
    public IdentitySet|\stdClass|null $lastModifiedByIdentity = null;

    /**  */
    public ?\DateTimeInterface $lastModifiedTime = null;

    /** 
     * 
     * @var NotebookLinks|\stdClass|null
     */
    public NotebookLinks|\stdClass|null $links = null;

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
    public OnenoteUserRole|\stdClass|null $userRole = null;


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
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdByIdentity'])) {
            $this->createdByIdentity = is_array($data['createdByIdentity']) ? new IdentitySet($data['createdByIdentity']) : $data['createdByIdentity'];
        }
        if (isset($data['createdTime'])) {
            $this->createdTime = is_string($data['createdTime']) ? new \DateTimeImmutable($data['createdTime']) : $data['createdTime'];
        }
        if (isset($data['isDefault'])) {
            $this->isDefault = is_bool($data['isDefault']) ? $data['isDefault'] : (bool)$data['isDefault'];
        }
        if (isset($data['isShared'])) {
            $this->isShared = is_bool($data['isShared']) ? $data['isShared'] : (bool)$data['isShared'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedByIdentity'])) {
            $this->lastModifiedByIdentity = is_array($data['lastModifiedByIdentity']) ? new IdentitySet($data['lastModifiedByIdentity']) : $data['lastModifiedByIdentity'];
        }
        if (isset($data['lastModifiedTime'])) {
            $this->lastModifiedTime = is_string($data['lastModifiedTime']) ? new \DateTimeImmutable($data['lastModifiedTime']) : $data['lastModifiedTime'];
        }
        if (isset($data['links'])) {
            $this->links = is_array($data['links']) ? new NotebookLinks($data['links']) : $data['links'];
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
            $this->userRole = is_string($data['userRole']) ? OnenoteUserRole::tryFrom($data['userRole']) : $data['userRole'];
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
