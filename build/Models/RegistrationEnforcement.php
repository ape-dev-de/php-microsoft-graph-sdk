<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RegistrationEnforcement
 */
class RegistrationEnforcement
{
    public function __construct(
        /** Run campaigns to remind users to set up targeted authentication methods. */
        public ?string $authenticationMethodsRegistrationCampaign = null
    ) {}
}
