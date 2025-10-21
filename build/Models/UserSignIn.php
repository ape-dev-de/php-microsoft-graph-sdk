<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSignIn
 */
class UserSignIn
{
    public function __construct(
        /** TenantId of the guest user as applies to Microsoft Entra B2B scenarios. */
        public ?string $externalTenantId = null,
        /**  */
        public ?string $externalUserType = null,
        /** Object ID of the user. */
        public ?string $userId = null
    ) {}
}
