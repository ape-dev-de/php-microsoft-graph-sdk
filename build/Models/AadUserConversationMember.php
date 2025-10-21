<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AadUserConversationMember
 */
class AadUserConversationMember
{
    public function __construct(
        /** The email address of the user. */
        public ?string $email = null,
        /** TenantId which the Microsoft Entra user belongs to. */
        public ?string $tenantId = null,
        /** The guid of the user. */
        public ?string $userId = null,
        /**  */
        public ?string $user = null
    ) {}
}
