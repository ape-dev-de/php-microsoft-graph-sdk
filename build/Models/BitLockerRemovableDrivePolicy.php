<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BitLockerRemovableDrivePolicy
 */
class BitLockerRemovableDrivePolicy
{
    /** This policy setting determines whether BitLocker protection is required for removable data drives to be writable on a computer. */
    public ?bool $blockCrossOrganizationWriteAccess = null;

    /** 
     * Select the encryption method for removable  drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
     * @var BitLockerEncryptionMethod|\stdClass|null
     */
    public mixed $encryptionMethod = null;

    /** Indicates whether to block write access to devices configured in another organization.  If requireEncryptionForWriteAccess is false, this value does not affect. */
    public ?bool $requireEncryptionForWriteAccess = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['blockCrossOrganizationWriteAccess'])) {
            $this->blockCrossOrganizationWriteAccess = $data['blockCrossOrganizationWriteAccess'];
        }
        if (isset($data['encryptionMethod'])) {
            $this->encryptionMethod = is_array($data['encryptionMethod']) ? new BitLockerEncryptionMethod($data['encryptionMethod']) : $data['encryptionMethod'];
        }
        if (isset($data['requireEncryptionForWriteAccess'])) {
            $this->requireEncryptionForWriteAccess = $data['requireEncryptionForWriteAccess'];
        }
    }
}
