<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetedManagedAppPolicyAssignment
 */
class TargetedManagedAppPolicyAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The type for deployment of groups or apps. */
        public ?string $target = null
    ) {}
}
