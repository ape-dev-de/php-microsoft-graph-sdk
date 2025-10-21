<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserIdentity
 */
class UserIdentity
{
    public function __construct(
        /** Indicates the client IP address associated with the user performing the activity (audit log only). */
        public ?string $ipAddress = null,
        /** The userPrincipalName attribute of the user. */
        public ?string $userPrincipalName = null
    ) {}
}
