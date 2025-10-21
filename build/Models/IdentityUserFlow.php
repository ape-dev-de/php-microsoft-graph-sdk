<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityUserFlow
 */
class IdentityUserFlow
{
    public function __construct(
        /**  */
        public ?string $userFlowType = null,
        /**  */
        public ?string $userFlowTypeVersion = null
    ) {}
}
