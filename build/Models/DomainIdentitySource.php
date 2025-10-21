<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainIdentitySource
 */
class DomainIdentitySource
{
    public function __construct(
        /** The name of the identity source, typically also the domain name. Read only. */
        public ?string $displayName = null,
        /** The domain name. Read only. */
        public ?string $domainName = null
    ) {}
}
