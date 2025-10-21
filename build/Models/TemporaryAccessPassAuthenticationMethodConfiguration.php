<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TemporaryAccessPassAuthenticationMethodConfiguration
 */
class TemporaryAccessPassAuthenticationMethodConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Groups of users that are excluded from a policy. */
        public array $excludeTargets = [],
        /** The state of the policy. Possible values are: enabled, disabled. */
        public ?AuthenticationMethodState $state = null,
        /** Default length in characters of a Temporary Access Pass object. Must be between 8 and 48 characters. */
        public ?float $defaultLength = null,
        /** Default lifetime in minutes for a Temporary Access Pass. Value can be any integer between the minimumLifetimeInMinutes and maximumLifetimeInMinutes. */
        public ?float $defaultLifetimeInMinutes = null,
        /** If true, all the passes in the tenant will be restricted to one-time use. If false, passes in the tenant can be created to be either one-time use or reusable. */
        public ?bool $isUsableOnce = null,
        /** Maximum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days). */
        public ?float $maximumLifetimeInMinutes = null,
        /** Minimum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days). */
        public ?float $minimumLifetimeInMinutes = null,
        /** A collection of groups that are enabled to use the authentication method. */
        public array $includeTargets = []
    ) {}
}
