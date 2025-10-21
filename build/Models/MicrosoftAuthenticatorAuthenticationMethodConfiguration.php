<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAuthenticatorAuthenticationMethodConfiguration
 */
class MicrosoftAuthenticatorAuthenticationMethodConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Groups of users that are excluded from a policy. */
        public array $excludeTargets = [],
        /** The state of the policy. Possible values are: enabled, disabled. */
        public ?string $state = null,
        /** A collection of Microsoft Authenticator settings such as application context and location context, and whether they are enabled for all users or specific users only. */
        public ?string $featureSettings = null,
        /**  */
        public ?bool $isSoftwareOathEnabled = null,
        /** A collection of groups that are enabled to use the authentication method. Expanded by default. */
        public array $includeTargets = []
    ) {}
}
