<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceLocalCredential
 */
class DeviceLocalCredential
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The name of the local admin account for which LAPS is enabled. */
        public ?string $accountName = null,
        /** The SID of the local admin account for which LAPS is enabled. */
        public ?string $accountSid = null,
        /** When the local administrator account credential for the device object was backed up to Azure Active Directory. */
        public ?\DateTimeInterface $backupDateTime = null,
        /** The password for the local administrator account that is backed up to Azure Active Directory and returned as a Base64 encoded value. */
        public ?string $passwordBase64 = null
    ) {}
}
