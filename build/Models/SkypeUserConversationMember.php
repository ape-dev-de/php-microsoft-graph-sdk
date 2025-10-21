<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SkypeUserConversationMember
 */
class SkypeUserConversationMember
{
    public function __construct(
        /** Skype ID of the user. */
        public ?string $skypeId = null
    ) {}
}
