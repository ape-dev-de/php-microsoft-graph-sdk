<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAccountUserConversationMember
 */
class MicrosoftAccountUserConversationMember
{
    public function __construct(
        /** Microsoft Account ID of the user. */
        public ?string $userId = null
    ) {}
}
