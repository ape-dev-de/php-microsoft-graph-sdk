<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainer
 */
class FileStorageContainer
{
    /**
     * Container type ID of the fileStorageContainer. For details about container types, see Container Types. Each container must have only one container type. Read-only.
     */
    private ?string $containerTypeId;

    /**
     * Date and time of the fileStorageContainer creation. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Custom property collection for the fileStorageContainer. Read-write.
     */
    private ?string $customProperties;

    /**
     * Provides a user-visible description of the fileStorageContainer. Read-write.
     */
    private ?string $description;

    /**
     * The display name of the fileStorageContainer. Read-write.
     */
    private ?string $displayName;

    /**
     * Indicates the lock state of the fileStorageContainer. The possible values are unlocked and lockedReadOnly. Read-only.
     */
    private ?string $lockState;

    /**
     */
    private ?string $settings;

    /**
     * Status of the fileStorageContainer. Containers are created as inactive and require activation. Inactive containers are subjected to automatic deletion in 24 hours. The possible values are: inactive, active. Read-only.
     */
    private ?string $status;

    /**
     * Data specific to the current user. Read-only.
     */
    private ?string $viewpoint;

    /**
     */
    private array $columns = [];

    /**
     * The drive of the resource fileStorageContainer. Read-only.
     */
    private ?string $drive;

    /**
     * The set of permissions for users in the fileStorageContainer. Permission for each user is set by the roles property. The possible values are: reader, writer, manager, and owner. Read-write.
     */
    private array $permissions = [];

    /**
     * Recycle bin of the fileStorageContainer. Read-only.
     */
    private ?string $recycleBin;


    public function getContainerTypeId(): ?string
    {
        return $this->containerTypeId;
    }

    public function setContainerTypeId(?string $containerTypeId): self
    {
        $this->containerTypeId = $containerTypeId;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getCustomProperties(): ?string
    {
        return $this->customProperties;
    }

    public function setCustomProperties(?string $customProperties): self
    {
        $this->customProperties = $customProperties;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLockState(): ?string
    {
        return $this->lockState;
    }

    public function setLockState(?string $lockState): self
    {
        $this->lockState = $lockState;
        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getViewpoint(): ?string
    {
        return $this->viewpoint;
    }

    public function setViewpoint(?string $viewpoint): self
    {
        $this->viewpoint = $viewpoint;
        return $this;
    }

    public function getColumns(): array
    {
        return $this->columns;
    }

    public function setColumns(array $columns): self
    {
        $this->columns = $columns;
        return $this;
    }

    public function getDrive(): ?string
    {
        return $this->drive;
    }

    public function setDrive(?string $drive): self
    {
        $this->drive = $drive;
        return $this;
    }

    public function getPermissions(): array
    {
        return $this->permissions;
    }

    public function setPermissions(array $permissions): self
    {
        $this->permissions = $permissions;
        return $this;
    }

    public function getRecycleBin(): ?string
    {
        return $this->recycleBin;
    }

    public function setRecycleBin(?string $recycleBin): self
    {
        $this->recycleBin = $recycleBin;
        return $this;
    }

}
