<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VoiceAuthenticationMethodConfiguration
 */
class VoiceAuthenticationMethodConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Groups of users that are excluded from a policy. */
        public array $excludeTargets = [],
        /** The state of the policy. Possible values are: enabled, disabled. */
        public ?string $state = null,
        /** true if users can register office phones, otherwise, false. */
        public ?bool $isOfficePhoneAllowed = null,
        /** A collection of groups that are enabled to use the authentication method. Expanded by default. */
        public array $includeTargets = []
    ) {}
}
