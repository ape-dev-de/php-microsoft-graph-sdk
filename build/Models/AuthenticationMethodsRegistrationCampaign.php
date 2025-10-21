<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodsRegistrationCampaign
 */
class AuthenticationMethodsRegistrationCampaign
{
    public function __construct(
        /** Users and groups of users that are excluded from being prompted to set up the authentication method. */
        public array $excludeTargets = [],
        /** Users and groups of users that are prompted to set up the authentication method. */
        public array $includeTargets = [],
        /** Specifies the number of days that the user sees a prompt again if they select 'Not now' and snoozes the prompt. Minimum: 0 days. Maximum: 14 days. If the value is '0', the user is prompted during every MFA attempt. */
        public ?float $snoozeDurationInDays = null,
        /**  */
        public ?string $state = null
    ) {}
}
