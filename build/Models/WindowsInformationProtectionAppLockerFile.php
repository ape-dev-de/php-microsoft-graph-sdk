<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionAppLockerFile
 */
class WindowsInformationProtectionAppLockerFile
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The friendly name */
        public ?string $displayName = null,
        /** File as a byte array */
        public ?string $file = null,
        /** SHA256 hash of the file */
        public ?string $fileHash = null,
        /** Version of the entity. */
        public ?string $version = null
    ) {}
}
