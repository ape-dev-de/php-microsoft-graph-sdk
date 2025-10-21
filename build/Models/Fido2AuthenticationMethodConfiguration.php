<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Fido2AuthenticationMethodConfiguration
 */
class Fido2AuthenticationMethodConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Groups of users that are excluded from a policy. */
        public array $excludeTargets = [],
        /** The state of the policy. Possible values are: enabled, disabled. */
        public ?AuthenticationMethodState $state = null,
        /** Determines whether attestation must be enforced for FIDO2 security key registration. */
        public ?bool $isAttestationEnforced = null,
        /** Determines if users can register new FIDO2 security keys. */
        public ?bool $isSelfServiceRegistrationAllowed = null,
        /** Controls whether key restrictions are enforced on FIDO2 security keys, either allowing or disallowing certain key types as defined by Authenticator Attestation GUID (AAGUID), an identifier that indicates the type (for example, make and model) of the authenticator. */
        public ?Fido2KeyRestrictions $keyRestrictions = null,
        /** A collection of groups that are enabled to use the authentication method. */
        public array $includeTargets = []
    ) {}
}
