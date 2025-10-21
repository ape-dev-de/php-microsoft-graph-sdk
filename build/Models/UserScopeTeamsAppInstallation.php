<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserScopeTeamsAppInstallation
 */
class UserScopeTeamsAppInstallation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The set of resource-specific permissions consented to while installing or upgrading the teamsApp. */
        public ?TeamsAppPermissionSet $consentedPermissionSet = null,
        /** The app that is installed. */
        public ?TeamsApp $teamsApp = null,
        /** The details of this version of the app. */
        public ?TeamsAppDefinition $teamsAppDefinition = null,
        /** The chat between the user and Teams app. */
        public ?Chat $chat = null
    ) {}
}
