<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppSettings
 */
class TeamsAppSettings
{
    public function __construct(
        /** Indicates whether users are allowed to request access to the unavailable Teams apps. */
        public ?bool $allowUserRequestsForAppAccess = null,
        /** Indicates whether resource-specific consent for personal scope in Teams apps is enabled for the tenant. True indicates that Teams apps that are allowed in the tenant and require resource-specific permissions can be installed in the personal scope. False blocks the installation of any Teams app that requires resource-specific permissions in the personal scope. */
        public ?string $isUserPersonalScopeResourceSpecificConsentEnabled = null
    ) {}
}
