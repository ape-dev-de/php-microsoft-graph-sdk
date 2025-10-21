<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityLoggedOnUser
 */
class SecurityLoggedOnUser
{
    public function __construct(
        /** User account name of the logged-on user. */
        public ?string $accountName = null,
        /** User account domain of the logged-on user. */
        public ?string $domainName = null
    ) {}
}
