<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailAuthenticationMethodConfiguration
 */
class EmailAuthenticationMethodConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Groups of users that are excluded from a policy. */
        public array $excludeTargets = [],
        /** The state of the policy. Possible values are: enabled, disabled. */
        public ?AuthenticationMethodState $state = null,
        /** Determines whether email OTP is usable by external users for authentication. Possible values are: default, enabled, disabled, unknownFutureValue. Tenants in the default state who didn't use public preview have email OTP enabled beginning in October 2021. */
        public ?ExternalEmailOtpState $allowExternalIdToUseEmailOtp = null,
        /** A collection of groups that are enabled to use the authentication method. */
        public array $includeTargets = []
    ) {}
}
