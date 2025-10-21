<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyBase
 */
class PolicyBase
{
    public function __construct(
        /** Description for this policy. Required. */
        public ?string $description = null,
        /** Display name for this policy. Required. */
        public ?string $displayName = null
    ) {}
}
