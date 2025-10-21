<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BitLockerRemovableDrivePolicy
 */
class BitLockerRemovableDrivePolicy
{
    /**
     * This policy setting determines whether BitLocker protection is required for removable data drives to be writable on a computer.
     */
    private ?bool $blockCrossOrganizationWriteAccess;

    /**
     * Select the encryption method for removable  drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
     */
    private ?string $encryptionMethod;

    /**
     * BitLocker Removable Drive Policies.
     */
    private ?string $requireEncryptionForWriteAccess;


    public function getBlockCrossOrganizationWriteAccess(): ?bool
    {
        return $this->blockCrossOrganizationWriteAccess;
    }

    public function setBlockCrossOrganizationWriteAccess(?bool $blockCrossOrganizationWriteAccess): self
    {
        $this->blockCrossOrganizationWriteAccess = $blockCrossOrganizationWriteAccess;
        return $this;
    }

    public function getEncryptionMethod(): ?string
    {
        return $this->encryptionMethod;
    }

    public function setEncryptionMethod(?string $encryptionMethod): self
    {
        $this->encryptionMethod = $encryptionMethod;
        return $this;
    }

    public function getRequireEncryptionForWriteAccess(): ?string
    {
        return $this->requireEncryptionForWriteAccess;
    }

    public function setRequireEncryptionForWriteAccess(?string $requireEncryptionForWriteAccess): self
    {
        $this->requireEncryptionForWriteAccess = $requireEncryptionForWriteAccess;
        return $this;
    }

}
