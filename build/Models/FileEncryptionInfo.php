<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileEncryptionInfo
 */
class FileEncryptionInfo
{
    /**
     * The key used to encrypt the file content.
     */
    private ?string $encryptionKey;

    /**
     * The file digest prior to encryption. ProfileVersion1 requires a non-null FileDigest.
     */
    private ?string $fileDigest;

    /**
     * The file digest algorithm. ProfileVersion1 currently only supports SHA256 for the FileDigestAlgorithm.
     */
    private ?string $fileDigestAlgorithm;

    /**
     * The initialization vector (IV) used for the encryption algorithm. Must be 16 bytes.
     */
    private ?string $initializationVector;

    /**
     * The hash of the concatenation of the IV and encrypted file content. Must be 32 bytes.
     */
    private ?string $mac;

    /**
     * The key used to compute the message authentication code of the concatenation of the IV and encrypted file content. Must be 32 bytes.
     */
    private ?string $macKey;

    /**
     * Contains properties for file encryption information for the content version of a line-of-business app.
     */
    private ?string $profileIdentifier;


    public function getEncryptionKey(): ?string
    {
        return $this->encryptionKey;
    }

    public function setEncryptionKey(?string $encryptionKey): self
    {
        $this->encryptionKey = $encryptionKey;
        return $this;
    }

    public function getFileDigest(): ?string
    {
        return $this->fileDigest;
    }

    public function setFileDigest(?string $fileDigest): self
    {
        $this->fileDigest = $fileDigest;
        return $this;
    }

    public function getFileDigestAlgorithm(): ?string
    {
        return $this->fileDigestAlgorithm;
    }

    public function setFileDigestAlgorithm(?string $fileDigestAlgorithm): self
    {
        $this->fileDigestAlgorithm = $fileDigestAlgorithm;
        return $this;
    }

    public function getInitializationVector(): ?string
    {
        return $this->initializationVector;
    }

    public function setInitializationVector(?string $initializationVector): self
    {
        $this->initializationVector = $initializationVector;
        return $this;
    }

    public function getMac(): ?string
    {
        return $this->mac;
    }

    public function setMac(?string $mac): self
    {
        $this->mac = $mac;
        return $this;
    }

    public function getMacKey(): ?string
    {
        return $this->macKey;
    }

    public function setMacKey(?string $macKey): self
    {
        $this->macKey = $macKey;
        return $this;
    }

    public function getProfileIdentifier(): ?string
    {
        return $this->profileIdentifier;
    }

    public function setProfileIdentifier(?string $profileIdentifier): self
    {
        $this->profileIdentifier = $profileIdentifier;
        return $this;
    }

}
