<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SelfServiceSignUpAuthenticationFlowConfiguration
 */
class SelfServiceSignUpAuthenticationFlowConfiguration
{
    public function __construct(
        /** Indicates whether self-service sign-up flow is enabled or disabled. The default value is false. This property isn't a key. Required. */
        public ?bool $isEnabled = null
    ) {}
}
