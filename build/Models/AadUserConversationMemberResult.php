<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AadUserConversationMemberResult
 */
class AadUserConversationMemberResult
{
    public function __construct(
        /** The error that occurred, if any, during the bulk operation. */
        public ?PublicError $error = null,
        /**  */
        public ?string $userId = null
    ) {}
}
