<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppAuthorization
 */
class TeamsAppAuthorization
{
    public function __construct(
        /** The registration ID of the Microsoft Entra app ID associated with the teamsApp. */
        public ?string $clientAppId = null,
        /** Set of permissions required by the teamsApp. */
        public ?TeamsAppPermissionSet $requiredPermissionSet = null
    ) {}
}
