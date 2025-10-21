<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileSecurityState
 */
class FileSecurityState
{
    public function __construct(
        /** Complex type containing file hashes (cryptographic and location-sensitive). */
        public ?FileHash $fileHash = null,
        /** File name (without path). */
        public ?string $name = null,
        /** Full file path of the file/imageFile. */
        public ?string $path = null,
        /** Provider generated/calculated risk score of the alert file. Recommended value range of 0-1, which equates to a percentage. */
        public ?string $riskScore = null
    ) {}
}
