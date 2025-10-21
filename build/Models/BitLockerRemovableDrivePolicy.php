<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BitLockerRemovableDrivePolicy
 */
class BitLockerRemovableDrivePolicy
{
    public function __construct(
        /** This policy setting determines whether BitLocker protection is required for removable data drives to be writable on a computer. */
        public ?bool $blockCrossOrganizationWriteAccess = null,
        /** Select the encryption method for removable  drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256. */
        public ?string $encryptionMethod = null,
        /** BitLocker Removable Drive Policies. */
        public ?string $requireEncryptionForWriteAccess = null
    ) {}
}
