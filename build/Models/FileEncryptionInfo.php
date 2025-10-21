<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileEncryptionInfo
 */
class FileEncryptionInfo
{
    public function __construct(
        /** The key used to encrypt the file content. */
        public ?string $encryptionKey = null,
        /** The file digest prior to encryption. ProfileVersion1 requires a non-null FileDigest. */
        public ?string $fileDigest = null,
        /** The file digest algorithm. ProfileVersion1 currently only supports SHA256 for the FileDigestAlgorithm. */
        public ?string $fileDigestAlgorithm = null,
        /** The initialization vector (IV) used for the encryption algorithm. Must be 16 bytes. */
        public ?string $initializationVector = null,
        /** The hash of the concatenation of the IV and encrypted file content. Must be 32 bytes. */
        public ?string $mac = null,
        /** The key used to compute the message authentication code of the concatenation of the IV and encrypted file content. Must be 32 bytes. */
        public ?string $macKey = null,
        /** Contains properties for file encryption information for the content version of a line-of-business app. */
        public ?string $profileIdentifier = null
    ) {}
}
