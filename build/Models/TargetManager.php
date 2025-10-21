<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetManager
 */
class TargetManager
{
    public function __construct(
        /** Manager level, between 1 and 4. The direct manager is 1. */
        public ?string $managerLevel = null
    ) {}
}
