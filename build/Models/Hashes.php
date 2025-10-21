<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Hashes
 */
class Hashes
{
    public function __construct(
        /** The CRC32 value of the file (if available). Read-only. */
        public ?string $crc32Hash = null,
        /** A proprietary hash of the file that can be used to determine if the contents of the file change (if available). Read-only. */
        public ?string $quickXorHash = null,
        /** SHA1 hash for the contents of the file (if available). Read-only. */
        public ?string $sha1Hash = null,
        /** This property isn't supported. Don't use. */
        public ?string $sha256Hash = null
    ) {}
}
