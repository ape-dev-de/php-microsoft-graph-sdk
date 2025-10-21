<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LobbyBypassSettings
 */
class LobbyBypassSettings
{
    public function __construct(
        /** Specifies whether or not to always let dial-in callers bypass the lobby. Optional. */
        public ?bool $isDialInBypassEnabled = null,
        /** Specifies the type of participants that are automatically admitted into a meeting, bypassing the lobby. Optional. */
        public ?LobbyBypassScope $scope = null
    ) {}
}
