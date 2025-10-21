<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InviteNewBotResponse
 */
class InviteNewBotResponse
{
    public function __construct(
        /** URI to receive new incoming call notification. */
        public ?string $inviteUri = null
    ) {}
}
