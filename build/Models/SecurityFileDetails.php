<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFileDetails
 */
class SecurityFileDetails
{
    public function __construct(
        /** The name of the file. */
        public ?string $fileName = null,
        /** The file path (location) of the file instance. */
        public ?string $filePath = null,
        /** The publisher of the file. */
        public ?string $filePublisher = null,
        /** The size of the file in bytes. */
        public ?float $fileSize = null,
        /** The certificate authority (CA) that issued the certificate. */
        public ?string $issuer = null,
        /** The Md5 cryptographic hash of the file content. */
        public ?string $md5 = null,
        /** The Sha1 cryptographic hash of the file content. */
        public ?string $sha1 = null,
        /** The Sha256 cryptographic hash of the file content. */
        public ?string $sha256 = null,
        /**  */
        public ?string $sha256Ac = null,
        /** The signer of the signed file. */
        public ?string $signer = null
    ) {}
}
