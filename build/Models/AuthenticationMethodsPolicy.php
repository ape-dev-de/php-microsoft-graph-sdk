<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodsPolicy
 */
class AuthenticationMethodsPolicy
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** A description of the policy. Read-only. */
        public ?string $description = null,
        /** The name of the policy. Read-only. */
        public ?string $displayName = null,
        /** The date and time of the last update to the policy. Read-only. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The state of migration of the authentication methods policy from the legacy multifactor authentication and self-service password reset (SSPR) policies. The possible values are: premigration - means the authentication methods policy is used for authentication only, legacy policies are respected. migrationInProgress - means the authentication methods policy is used for both authentication and SSPR, legacy policies are respected. migrationComplete - means the authentication methods policy is used for authentication and SSPR, legacy policies are ignored. unknownFutureValue - Evolvable enumeration sentinel value. Do not use. */
        public ?string $policyMigrationState = null,
        /** The version of the policy in use. Read-only. */
        public ?string $policyVersion = null,
        /**  */
        public ?float $reconfirmationInDays = null,
        /** Enforce registration at sign-in time. This property can be used to remind users to set up targeted authentication methods. */
        public ?string $registrationEnforcement = null,
        /** Represents the settings for each authentication method. Automatically expanded on GET /policies/authenticationMethodsPolicy. */
        public array $authenticationMethodConfigurations = []
    ) {}
}
