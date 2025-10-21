<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserScopeTeamsAppInstallation
 */
class UserScopeTeamsAppInstallation
{
    public function __construct(
        /** The chat between the user and Teams app. */
        public ?string $chat = null
    ) {}
}
