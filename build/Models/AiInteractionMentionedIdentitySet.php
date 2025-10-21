<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionMentionedIdentitySet
 */
class AiInteractionMentionedIdentitySet
{
    public function __construct(
        /** Optional. The application associated with this action. */
        public ?Identity $application = null,
        /** Optional. The device associated with this action. */
        public ?Identity $device = null,
        /** Optional. The user associated with this action. */
        public ?Identity $user = null,
        /**  */
        public ?TeamworkConversationIdentity $conversation = null,
        /**  */
        public ?TeamworkTagIdentity $tag = null
    ) {}
}
