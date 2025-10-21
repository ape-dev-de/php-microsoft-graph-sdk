<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodsRegistrationCampaignIncludeTarget
 */
class AuthenticationMethodsRegistrationCampaignIncludeTarget
{
    public function __construct(
        /** The object identifier of a Microsoft Entra user or group. */
        public ?string $id = null,
        /** The authentication method that the user is prompted to register. The value must be microsoftAuthenticator. */
        public ?string $targetedAuthenticationMethod = null,
        /**  */
        public ?string $targetType = null
    ) {}
}
