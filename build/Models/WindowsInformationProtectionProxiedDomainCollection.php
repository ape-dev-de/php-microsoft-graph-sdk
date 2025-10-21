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
        /** @var string[] Windows Information Protection Proxied Domain Collection */
        public array $proxiedDomains = []
    ) {}
}
