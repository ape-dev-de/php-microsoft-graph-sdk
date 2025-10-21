<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VerifiedDomain
 */
class VerifiedDomain
{
    public function __construct(
        /** For example, Email, OfficeCommunicationsOnline. */
        public ?string $capabilities = null,
        /** true if this is the default domain associated with the tenant; otherwise, false. */
        public ?bool $isDefault = null,
        /** true if this is the initial domain associated with the tenant; otherwise, false. */
        public ?bool $isInitial = null,
        /** The domain name; for example, contoso.com. */
        public ?string $name = null,
        /** For example, Managed. */
        public ?string $type = null
    ) {}
}
