<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveProtectionUnit
 */
class DriveProtectionUnit
{
    public function __construct(
        /** ID of the directory object. */
        public ?string $directoryObjectId = null,
        /** Display name of the directory object. */
        public ?string $displayName = null,
        /** Email associated with the directory object. */
        public ?string $email = null
    ) {}
}
