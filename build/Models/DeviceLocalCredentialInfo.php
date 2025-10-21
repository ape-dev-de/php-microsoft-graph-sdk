<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceLocalCredentialInfo
 */
class DeviceLocalCredentialInfo
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The credentials of the device's local administrator account backed up to Azure Active Directory. */
        public array $credentials = [],
        /** Display name of the device that the local credentials are associated with. */
        public ?string $deviceName = null,
        /** When the local administrator account credential was backed up to Azure Active Directory. */
        public ?\DateTimeInterface $lastBackupDateTime = null,
        /** When the local administrator account credential will be refreshed and backed up to Azure Active Directory. */
        public ?\DateTimeInterface $refreshDateTime = null
    ) {}
}
