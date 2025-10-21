<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SkypeForBusinessUserConversationMember
 */
class SkypeForBusinessUserConversationMember
{
    public function __construct(
        /** ID of the tenant that the user belongs to. */
        public ?string $tenantId = null,
        /** Microsoft Entra ID of the user. */
        public ?string $userId = null
    ) {}
}
