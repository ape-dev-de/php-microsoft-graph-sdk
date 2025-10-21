<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationConditionsApplications
 */
class AuthenticationConditionsApplications
{
    public function __construct(
        /** @var string[]  */
        public array $includeApplications = []
    ) {}
}
