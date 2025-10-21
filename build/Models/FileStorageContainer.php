<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainer
 */
class FileStorageContainer
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Container type ID of the fileStorageContainer. For details about container types, see Container Types. Each container must have only one container type. Read-only. */
        public ?string $containerTypeId = null,
        /** Date and time of the fileStorageContainer creation. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Custom property collection for the fileStorageContainer. Read-write. */
        public ?FileStorageContainerCustomPropertyDictionary $customProperties = null,
        /** Provides a user-visible description of the fileStorageContainer. Read-write. */
        public ?string $description = null,
        /** The display name of the fileStorageContainer. Read-write. */
        public ?string $displayName = null,
        /** Indicates the lock state of the fileStorageContainer. The possible values are unlocked and lockedReadOnly. Read-only. */
        public ?SiteLockState $lockState = null,
        /**  */
        public ?FileStorageContainerSettings $settings = null,
        /** Status of the fileStorageContainer. Containers are created as inactive and require activation. Inactive containers are subjected to automatic deletion in 24 hours. The possible values are: inactive, active. Read-only. */
        public ?FileStorageContainerStatus $status = null,
        /** Data specific to the current user. Read-only. */
        public ?FileStorageContainerViewpoint $viewpoint = null,
        /**  */
        public array $columns = [],
        /** The drive of the resource fileStorageContainer. Read-only. */
        public ?Drive $drive = null,
        /** The set of permissions for users in the fileStorageContainer. Permission for each user is set by the roles property. The possible values are: reader, writer, manager, and owner. Read-write. */
        public array $permissions = [],
        /** Recycle bin of the fileStorageContainer. Read-only. */
        public ?RecycleBin $recycleBin = null
    ) {}
}
