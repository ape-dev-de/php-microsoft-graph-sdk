<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileEncryptionInfo
 */
class FileEncryptionInfo
{
    /** The key used to encrypt the file content. */
    public ?string $encryptionKey = null;

    /** The file digest prior to encryption. ProfileVersion1 requires a non-null FileDigest. */
    public ?string $fileDigest = null;

    /** The file digest algorithm. ProfileVersion1 currently only supports SHA256 for the FileDigestAlgorithm. */
    public ?string $fileDigestAlgorithm = null;

    /** The initialization vector (IV) used for the encryption algorithm. Must be 16 bytes. */
    public ?string $initializationVector = null;

    /** The hash of the concatenation of the IV and encrypted file content. Must be 32 bytes. */
    public ?string $mac = null;

    /** The key used to compute the message authentication code of the concatenation of the IV and encrypted file content. Must be 32 bytes. */
    public ?string $macKey = null;

    /** The profile identifier. Maps to the strategy used to encrypt the file. Currently, only ProfileVersion1 is supported. */
    public ?string $profileIdentifier = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['encryptionKey'])) {
            $this->encryptionKey = $data['encryptionKey'];
        }
        if (isset($data['fileDigest'])) {
            $this->fileDigest = $data['fileDigest'];
        }
        if (isset($data['fileDigestAlgorithm'])) {
            $this->fileDigestAlgorithm = $data['fileDigestAlgorithm'];
        }
        if (isset($data['initializationVector'])) {
            $this->initializationVector = $data['initializationVector'];
        }
        if (isset($data['mac'])) {
            $this->mac = $data['mac'];
        }
        if (isset($data['macKey'])) {
            $this->macKey = $data['macKey'];
        }
        if (isset($data['profileIdentifier'])) {
            $this->profileIdentifier = $data['profileIdentifier'];
        }
    }
}
