<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileHash
 */
class FileHash
{
    public function __construct(
        /** File hash type. Possible values are: unknown, sha1, sha256, md5, authenticodeHash256, lsHash, ctph, peSha1, peSha256. */
        public ?string $hashType = null,
        /** Value of the file hash. */
        public ?string $hashValue = null
    ) {}
}
