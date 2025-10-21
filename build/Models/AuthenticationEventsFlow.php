<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationEventsFlow
 */
class AuthenticationEventsFlow
{
    public function __construct(
        /** The conditions representing the context of the authentication request that's used to decide whether the events policy is invoked.  Supports $filter (eq). See support for filtering on user flows for syntax information. */
        public ?string $conditions = null,
        /** The description of the events policy. */
        public ?string $description = null,
        /** Required. The display name for the events policy. */
        public ?string $displayName = null
    ) {}
}
