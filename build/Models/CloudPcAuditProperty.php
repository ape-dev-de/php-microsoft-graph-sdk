<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcAuditProperty
 */
class CloudPcAuditProperty
{
    public function __construct(
        /** The display name for this property. */
        public ?string $displayName = null,
        /** The new value for this property. */
        public ?string $newValue = null,
        /** The old value for this property. */
        public ?string $oldValue = null
    ) {}
}
