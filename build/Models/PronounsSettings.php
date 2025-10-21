<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PronounsSettings
 */
class PronounsSettings
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** true to enable pronouns in the organization; otherwise, false. The default value is false, and pronouns are disabled. */
        public ?string $isEnabledInOrganization = null
    ) {}
}
