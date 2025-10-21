<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessUsers
 */
class ConditionalAccessUsers
{
    public function __construct(
        /** @var string[] Group IDs excluded from scope of policy. */
        public array $excludeGroups = [],
        /** Internal guests or external users excluded from the policy scope. Optionally populated. */
        public ?ConditionalAccessGuestsOrExternalUsers $excludeGuestsOrExternalUsers = null,
        /** @var string[] Role IDs excluded from scope of policy. */
        public array $excludeRoles = [],
        /** @var string[] User IDs excluded from scope of policy and/or GuestsOrExternalUsers. */
        public array $excludeUsers = [],
        /** @var string[] Group IDs in scope of policy unless explicitly excluded. */
        public array $includeGroups = [],
        /** Internal guests or external users included in the policy scope. Optionally populated. */
        public ?ConditionalAccessGuestsOrExternalUsers $includeGuestsOrExternalUsers = null,
        /** @var string[] Role IDs in scope of policy unless explicitly excluded. */
        public array $includeRoles = [],
        /** @var string[] User IDs in scope of policy unless explicitly excluded, None, All, or GuestsOrExternalUsers. */
        public array $includeUsers = []
    ) {}
}
