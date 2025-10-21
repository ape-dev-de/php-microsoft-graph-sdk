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
        /** Contains properties for a single Intune app category. */
        public ?\DateTimeInterface $lastModifiedDateTime = null
    ) {}
}
