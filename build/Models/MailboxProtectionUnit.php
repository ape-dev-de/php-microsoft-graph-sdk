<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxProtectionUnit
 */
class MailboxProtectionUnit
{
    public function __construct(
        /** The ID of the directory object. */
        public ?string $directoryObjectId = null,
        /** Display name of the directory object. */
        public ?string $displayName = null,
        /** Email address associated with the directory object. */
        public ?string $email = null
    ) {}
}
