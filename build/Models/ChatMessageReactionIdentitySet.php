<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageReactionIdentitySet
 */
class ChatMessageReactionIdentitySet
{
    public function __construct(
        /** Optional. The application associated with this action. */
        public ?string $application = null,
        /** Optional. The device associated with this action. */
        public ?string $device = null,
        /** Optional. The user associated with this action. */
        public ?string $user = null
    ) {}
}
