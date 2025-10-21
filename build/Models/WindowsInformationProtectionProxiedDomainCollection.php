<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionProxiedDomainCollection
 */
class WindowsInformationProtectionProxiedDomainCollection
{
    public function __construct(
        /** Display name */
        public ?string $displayName = null,
        /** Collection of proxied domains */
        public array $proxiedDomains = []
    ) {}
}
