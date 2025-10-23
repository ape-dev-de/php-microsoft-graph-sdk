<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainer
 */
class FileStorageContainer
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Container type ID of the fileStorageContainer. For details about container types, see Container Types. Each container must have only one container type. Read-only. */
    public ?string $containerTypeId = null;

    /** Date and time of the fileStorageContainer creation. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Custom property collection for the fileStorageContainer. Read-write.
     * @var FileStorageContainerCustomPropertyDictionary|\stdClass|null
     */
    public mixed $customProperties = null;

    /** Provides a user-visible description of the fileStorageContainer. Read-write. */
    public ?string $description = null;

    /** The display name of the fileStorageContainer. Read-write. */
    public ?string $displayName = null;

    /** 
     * Indicates the lock state of the fileStorageContainer. The possible values are unlocked and lockedReadOnly. Read-only.
     * @var SiteLockState|\stdClass|null
     */
    public mixed $lockState = null;

    /**  */
    public ?FileStorageContainerSettings $settings = null;

    /** 
     * Status of the fileStorageContainer. Containers are created as inactive and require activation. Inactive containers are subjected to automatic deletion in 24 hours. The possible values are: inactive, active. Read-only.
     * @var FileStorageContainerStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * Data specific to the current user. Read-only.
     * @var FileStorageContainerViewpoint|\stdClass|null
     */
    public mixed $viewpoint = null;

    /** 
     * 
     * @var ColumnDefinition[]
     */
    public array $columns = [];

    /** 
     * The drive of the resource fileStorageContainer. Read-only.
     * @var Drive|\stdClass|null
     */
    public mixed $drive = null;

    /** 
     * The set of permissions for users in the fileStorageContainer. Permission for each user is set by the roles property. The possible values are: reader, writer, manager, and owner. Read-write.
     * @var Permission[]
     */
    public array $permissions = [];

    /** 
     * Recycle bin of the fileStorageContainer. Read-only.
     * @var RecycleBin|\stdClass|null
     */
    public mixed $recycleBin = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['containerTypeId'])) {
            $this->containerTypeId = $data['containerTypeId'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['customProperties'])) {
            $this->customProperties = $data['customProperties'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lockState'])) {
            $this->lockState = $data['lockState'];
        }
        if (isset($data['settings'])) {
            $this->settings = $data['settings'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['viewpoint'])) {
            $this->viewpoint = $data['viewpoint'];
        }
        if (isset($data['columns'])) {
            $this->columns = $data['columns'];
        }
        if (isset($data['drive'])) {
            $this->drive = $data['drive'];
        }
        if (isset($data['permissions'])) {
            $this->permissions = $data['permissions'];
        }
        if (isset($data['recycleBin'])) {
            $this->recycleBin = $data['recycleBin'];
        }
    }
}
