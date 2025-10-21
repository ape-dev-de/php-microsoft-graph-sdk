<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsUnavailableRecord
 */
class DomainDnsUnavailableRecord
{
    public function __construct(
        /** Provides the reason why the DomainDnsUnavailableRecord entity is returned. */
        public ?string $description = null
    ) {}
}
