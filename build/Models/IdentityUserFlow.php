<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityUserFlow
 */
class IdentityUserFlow
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?UserFlowType $userFlowType = null,
        /**  */
        public ?string $userFlowTypeVersion = null
    ) {}
}
