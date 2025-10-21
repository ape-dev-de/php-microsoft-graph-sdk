<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContactFolder
 */
class ContactFolder
{
    /**
     * The folder's display name.
     */
    private ?string $displayName;

    /**
     * The ID of the folder's parent folder.
     */
    private ?string $parentFolderId;

    /**
     * The collection of child folders in the folder. Navigation property. Read-only. Nullable.
     */
    private array $childFolders = [];

    /**
     * The contacts in the folder. Navigation property. Read-only. Nullable.
     */
    private array $contacts = [];

    /**
     * The collection of multi-value extended properties defined for the contactFolder. Read-only. Nullable.
     */
    private array $multiValueExtendedProperties = [];

    /**
     * The collection of single-value extended properties defined for the contactFolder. Read-only. Nullable.
     * @var string[]
     */
    private array $singleValueExtendedProperties = [];


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getParentFolderId(): ?string
    {
        return $this->parentFolderId;
    }

    public function setParentFolderId(?string $parentFolderId): self
    {
        $this->parentFolderId = $parentFolderId;
        return $this;
    }

    public function getChildFolders(): array
    {
        return $this->childFolders;
    }

    public function setChildFolders(array $childFolders): self
    {
        $this->childFolders = $childFolders;
        return $this;
    }

    public function getContacts(): array
    {
        return $this->contacts;
    }

    public function setContacts(array $contacts): self
    {
        $this->contacts = $contacts;
        return $this;
    }

    public function getMultiValueExtendedProperties(): array
    {
        return $this->multiValueExtendedProperties;
    }

    public function setMultiValueExtendedProperties(array $multiValueExtendedProperties): self
    {
        $this->multiValueExtendedProperties = $multiValueExtendedProperties;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSingleValueExtendedProperties(): array
    {
        return $this->singleValueExtendedProperties;
    }

    /**
     * @param string[] $singleValueExtendedProperties
     */
    public function setSingleValueExtendedProperties(array $singleValueExtendedProperties): self
    {
        $this->singleValueExtendedProperties = $singleValueExtendedProperties;
        return $this;
    }

}
