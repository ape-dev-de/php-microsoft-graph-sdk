<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditProperty
 */
class AuditProperty
{
    public function __construct(
        /** Display name. */
        public ?string $displayName = null,
        /** New value. */
        public ?string $newValue = null,
        /** Old value. */
        public ?string $oldValue = null
    ) {}
}
