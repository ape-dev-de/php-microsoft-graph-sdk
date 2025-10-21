<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppCategory
 */
class MobileAppCategory
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The name of the app category. */
        public ?string $displayName = null,
        /** The date and time the mobileAppCategory was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null
    ) {}
}
